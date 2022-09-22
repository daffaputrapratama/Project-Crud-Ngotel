<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;

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

Route::get('/index', function () {
    return view('pages.userView.index');
});


Route::resource('/tambahKamar', \App\Http\Controllers\KamarController::class);

Route::resource('/dataKamar', \App\Http\Controllers\KamarController::class);

// Route::get('/loginView', function () {
//     return view('pages.userView.loginView.loginView');
// });

// Route::get('/registerView', function () {
//     return view('pages.userView.registerView.registerView');
// });

