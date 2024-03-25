<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome') ->with('name' , 'mojtaba');
});


// Route::group(['prefix' => 'admin/panel' ], function(){
//     Route::get('/' , function(){
//         return "dashbord";});]
//     Route::get('menu' , function(){
//         return "admin/menu";});
// });


// Route::domain('test.localhost.com')->group(function()
// {
//     Route::get('/' , function(){
//         return "admin/menu";});
// });




