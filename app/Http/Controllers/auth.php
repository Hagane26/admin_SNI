<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class auth extends Controller
{
    public function login(){
        return view('auth.login');
    }

public function login_action(Request $req){
        dd($req);
    }

    public function signup(){
        return view('auth.signup');
    }

    public function signup_action(Request $req){
        dd($req);
    }
}
