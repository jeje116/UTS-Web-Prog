<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function auth(Request $req) {
        dd('berhasil login');
        $req->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
    }
}
