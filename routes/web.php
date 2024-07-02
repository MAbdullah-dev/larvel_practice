<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'showhome'])->name('showhome');

Route::get('/user',[PageController::class,'userpage'])->name('Allusers');

Route::get('/show/user/{id}',[PageController::class,'showuser'])->name('showuser');

Route::get('/add/user',[PageController::class,'adduser'])->name('adduser');

Route::get('/update/user',[PageController::class,'updateuser'])->name('updateuser');

Route::get('/delete/user/{id}',[PageController::class,'deleteuser'])->name('deleteuser');

Route::view('adduser','/adduser')->name('insertuser');


