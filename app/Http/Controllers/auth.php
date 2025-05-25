<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auth extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function login_action(Request $req){
        dd($req);
    }
}
