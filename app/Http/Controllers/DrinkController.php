<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\Drink_type;
use App\Models\User;

class DrinkController extends Controller
{

    public function show($shop_id, $prod_id) {

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

        return view('shop', [
            'drinks' => Drink::find('drink_type_id', $shop_id),
            'types' => Drink_type::all(),
            'users' => User::all(),
            'temp' => 2,
            'user_name' => $user_name,
            'user_loyalty_level' => $user_loyalty_level,
            'user_star_balance' => $user_star_balance,
            'user_id' => $user_id,
            'shop_id' => $shop_id,
            'prod_id' => $prod_id,
            'user_gender' => $user_gender,
        ]);
    }
}
