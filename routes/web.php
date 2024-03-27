<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response; 
use App\Http\Controllers\HomeController;

Route::resource('home' , HomeController::class); //*   باعث میشه تمامی متدهای این کنترلز رو برای کا ایجاد کنه


Route::get('/', function () {
    return view('welcome');
});



Route::get('/form', function () {
    $users = [
        ['userid' => 1, 'name' => 'Alex'],
        ['userid' => 2, 'name' => 'Jane'],
    ];
    return response()->json($users);
});




// Route::get('/form' , function()
// {
//     return response()->json([
//         'message' => 'Hello, World!',
//         'code'  => 200
//     ]);
// });


// Route::get('/form' , function()
// {
//     return view('form');
// });

// Route::get('home/store' , [HomeController::class , 'store']);
