<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


function getuser(){

    return [
        1 => ['name' => 'Amitabh', 'phone' => '9123456789' , 'city' => 'Goa'],
        2 => ['name' => 'Salman' , 'phone' => '9123456789' , 'city' => 'Delhi'],
        3 => ['name' => 'Sunny'  , 'phone' => '9123456789' , 'city' => 'Mumbai'],
        4 => ['name' => 'Akshay' , 'phone' => '9123456789' , 'city' => 'Agra'],
    ];
}
Route::get('/users', function () {
    $users=getuser();
    return view('users',['users'=>$users]);
})->name(' users');

Route::get('/singledata/{id}', function ($id) {
    $users=getuser();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];
    return view('singleuser',['users'=>$user]);
})->name(' singleuser');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');
// Route::get('/contact/{id?}', function ( string $id =  null ) {
//     if ($id) {
//         # code...
//         return "POST ID : $id ";
//     }else{
//         return "NO ID FOUND";
//     }
//     // return view('contact');
// })->whereNumber('id');

