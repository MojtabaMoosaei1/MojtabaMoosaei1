<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::resource('home' , HomeController::class); //*   باعث میشه تمامی متدهای این کنترلز رو برای کا ایجاد کنه
// Route::get('/home', [HomeController::class ,'index']);  //* 


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class ,'store']);  //* 




// Route::redirect('adres-vorodi' , 'home/create');

Route::get('login', function () {     // اگرب بخام به صفحه ای برم که باید پارامتری رو خم برا خودم ببرم ازین استفاده میشه 
    // return redirect('home/create');
    return view('form');
});


// Route::get('adres-vorodi', function () {     // اگرب بخام به صفحه ای برم که باید پارامتری رو خم برا خودم ببرم ازین استفاده میشه 
//     return redirect()->route('home.create', ['name'=>'mojtaba']);
//  // **
// });








// Route::get('/', function () {
//     return view('welcome') ->with(['name'=>'mojtaba' , 'famil'=> 'moosaei']);
// });

// Route::get('/home', function () {
//     $var = "test"; 
//     return view('welcome' , compact('var'));
// });

// Route::group(['prefix' => 'admin/panel' ], function(){
//     Route::get('/' , function(){
//         return "dashbord";});
//     Route::get('menu' , function(){
//         return "admin/menu";});
// });


// Route::domain('test.localhost.com')->group(function()
// {
//     Route::get('/' , function(){
//         return "admin/menu";});
// });




