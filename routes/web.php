<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\auth;


Route::get('/', [dashboard::class,"index"]);

Route::get('/signin',[auth::class,"login"]);
Route::post('/signin-action',[auth::class,"login_action"]);

Route::get('/signup',[auth::class,"login"]);
Route::post('/signup-action',[auth::class,"login_action"]);

