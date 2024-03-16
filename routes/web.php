<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('user',[UserController::class,'index']);
Route::post('user',[UserController::class,'create']);


Route::get('/token', function () { 
     return csrf_token(); 
});