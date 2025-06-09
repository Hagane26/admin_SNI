<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\auth;
use App\Http\Controllers\turnitin;

Route::get('/', [dashboard::class,"index"]);

Route::get('/signin',[auth::class,"login"]);
Route::post('/signin-action',[auth::class,"login_action"]);

Route::get('/signup',[auth::class,"signup"]);
Route::post('/signup-action',[auth::class,"signup_action"]);

route::name("guest")->group(function(){
    route::get('/turnitin',[turnitin::class,'index']);
    route::post('/turnitin/order',[turnitin::class,'order']);
    route::post('/turnitin/order-action',[turnitin::class,'order_action']);
});
