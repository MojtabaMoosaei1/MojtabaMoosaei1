<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome') ->with(['name'=>'mojtaba' , 'famil'=> 'moosaei']);
});

Route::get('/home', function () {
    $var = "test"; 
    return view('welcome' , compact('var'));
});

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




