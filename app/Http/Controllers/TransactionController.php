<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Drink;
use App\Models\User;
use App\Models\Drink_type;

class TransactionController extends Controller
{

    public static function show($user_id) {

        $user_id = User::get_user_id();
        $user_data = User::all()->where('id', $user_id);
        $user_name;
        $user_loyalty_level;
        $user_star_balance;

        foreach ($user_data as $data) {
            $user_name = $data->name;
            $user_loyalty_level = $data->loyalty_level;
            $user_star_balance = $data->star_balance;
            $user_gender = $data->gender;
        }

        return view('/transaction', [
            'transactions' => Transaction::find($user_id),
            'temp' => 3,
            'drinks' => Drink::all(),
            'drink_types' => Drink_type::all(),
            'users' => User::all(),
            'user_name' => $user_name,
            'user_loyalty_level' => $user_loyalty_level,
            'user_star_balance' => $user_star_balance,
            'user_id' => $user_id,
            'user_gender' => $user_gender
        ]);
    }

    public function purchase_product(Request $request) {

        // dd($request->shop_id);
        Transaction::insert([
            'user_id' => $request->user_id,
            'drink_id' => $request->prod_id,
            'purchase_date' => now()
        ]);

        echo $link = "/shop/{$request->shop_id}/prod/0";

        return redirect($link);
    }
}
