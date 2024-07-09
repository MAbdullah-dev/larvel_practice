<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\userController;

Route::controller(PageController::class)->group(function(){
        Route::get('/','showhome')->name('showhome');


//     Route::get('/user','userpage')->name('Allusers');

//     Route::get('/show/user/{id}','showuser')->name('showuser');

//     Route::post('/add/user','adduser')->name('adduser');

//     Route::post('/update/user/{id}','updateuser')->name('updateuser');

//     Route::get('/delete/user/{id}','deleteuser')->name('deleteuser');


//     Route::get('/updatepage/{id}','updatepage')->name('updatepage');
});

Route::view('adduser','/adduser')->name('insertuser');

Route::resource('user',userController::class);

Route::resource('role',RoleController::class);

// Route::resource('post',PostController::class);

