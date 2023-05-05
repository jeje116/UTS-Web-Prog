<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\User;

class PromoController extends Controller
{

    public function show() {
        $user_id = User::get_user_id();
        $user_data = User::all()->where('id', $user_id);
        $user_name;
        $user_loyalty_level;
        $user_star_balance;
        $user_gender;

        foreach ($user_data as $data) {
            $user_name = $data->name;
            $user_loyalty_level = $data->loyalty_level;
            $user_star_balance = $data->star_balance;
            $user_gender = $data->gender;
        }

        return view('home', [
            'promos' => Promo::all(),
            'user_name' => $user_name,
            'user_loyalty_level' => $user_loyalty_level,
            'user_star_balance' => $user_star_balance,
            'user_id' => $user_id,
            'user_gender' => $user_gender,
            'temp' => 1
        ]);
    }
}