<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
    public function index(){
        if(Auth::user()){
            echo "Welcome to the dashboard, " . Auth::user()->name;
        }else{
            return view('home');
        }
    }
}
