<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/history', function () {
    return view('history2');
});

Route::get('/history2', function () {
    return view('history2');
});
Route::get('/history3', function () {
    return view('history3');
});

Route::get('/history4', function () {
    return view('history4');
});

Route::get('/history5', function () {
    return view('history5');
});
