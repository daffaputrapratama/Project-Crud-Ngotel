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


// Guide : Untuk menuju halaman login : /toLogin
// Guide : Untuk menuju halaman login : /toRegister

Route::get('/', function () {
    return view('layouts.main');
});


Route::get('/tambahKamar', function () {
    return view('pages.adminView.tambahKamar');
});

Route::get('/dataKamar', function () {
    return view('pages.adminView.dataKamar');
});

Route::get('/loginView', function () {
    return view('pages.userView.loginView.loginView');
});

Route::get('/registerView', function () {
    return view('pages.userView.registerView.registerView');
});

