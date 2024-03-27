<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response; 
use App\Http\Controllers\HomeController;
use Monolog\Handler\RotatingFileHandler;

Route::resource('home' , HomeController::class); //*   باعث میشه تمامی متدهای این کنترلز رو برای کا ایجاد کنه


// Route::get('/login/store' , [HomeController::class , 'store']);


// Route::get('login/create' , [HomeController::class , 'create']);


Route::get('/' , function()
{
    return view('welcome');
});