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
    return view('home');
});

Route::get('/calculadora/soma/{v1}/{v2}', 'App\Http\Controllers\Calculator\ArithmeticController@sum')
    ->where('v1', '[0-9]+')
    ->where('v2', '[0-9]+');

Route::get('/calculadora/subtracao/{v1}/{v2}', 'App\Http\Controllers\Calculator\ArithmeticController@subtraction')
    ->where('v1', '[0-9]+')
    ->where('v2', '[0-9]+');