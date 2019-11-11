<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('123','Hellocontroller@gettnigvale');
Route::post('/submit','Hellocontroller@index');

Route::get('/', function () {
    return view('contacts');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/registration', function () {
    return view('registration');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('data/{id}',function($id) {
   echo 'ID: '.$id;
});


?>