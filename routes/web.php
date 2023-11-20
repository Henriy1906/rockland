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
    return view('history');
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
Route::get('/history6', function () {
    return view('history6');
});

Route::get('/history7', function () {
    return view('history7');
});
Route::get('/history8', function () {
    return view('history8');
});

Route::get('/history9', function () {
    return view('history9');
});

Route::get('/history10', function () {
    return view('history10');
});
