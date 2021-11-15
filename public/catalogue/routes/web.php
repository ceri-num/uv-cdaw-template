<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listMedias');
});

Route::get('/user/{name}/{second_name}', function ($name,$second_name) {
    return 'User '.$name." ".$second_name;
});

Route::get('/user/{name}', function ($name) {
    return 'User '.$name;
})->whereAlpha('name');

