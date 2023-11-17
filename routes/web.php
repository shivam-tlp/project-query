<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function(){

    
    Route::get('/','showusers')->name('home');
    Route::get('/User/{id}','singleUser')->name('view.user');
    // Route::get('/allusers',[UserController::class,'showusers']);
    
    Route::post('/add','adduser')->name('/adduser');
    
    Route::put('/update/{id}','update')->name('update.user');
    Route::get('/updatepage/{id}','updatepage')->name('update.page');
    Route::get('/delete/{id}','deleteUser')->name('delete.user');
});

Route::view('newuser','/adduser');