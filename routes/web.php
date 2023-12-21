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
    return view('home');
});
Route::get('/register_vendor', function () {
    return view('auth.register_vendor');
});

Route::get('/register_user', function () {
    return view('auth.register_user');
});
Route::get('/login_user', function () {
    return view('auth.login_user');
});

Route::get('/login_vendor', function () {
    return view('auth.login_vendor');
});