<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
        $validate = $req->validate([
            'email' => 'required',
            'password'=> 'required',
            'cpassword'=> 'required'
        ]);

        if(DB::table('users')->where('email', $req->email)->exists()){
            return back()->withErrors(['email'=> $req->email]);
        }else{
            if($validate['password'] != $validate['cpassword']){
                return back()->withErrors(['password'=> "Tidak Sama"]);
            }else{
                User::create([
                    'email'=> $req->email,
                    'password'=> $validate['password'],
                    'role_id' => 2,
                ]);
            }
        }
    }
}
