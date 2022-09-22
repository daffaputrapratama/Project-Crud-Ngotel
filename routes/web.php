<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regController;
use App\Http\Controllers\logController;
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


// lain lain
Route::get('/suksesView', function () {
    return view('pages.userView.suksesView.suksesView');
});
// lain lain

// routes untuk admin
Route::get('/', function () {
    return view('pages.userView.loginView.loginView');
});

Route::get('/dataKamar',[KamarController::class,'tableKamar']);
Route::get('/dataKamar/createKamar',[KamarController::class,'createKamar']);
Route::post('/dataKamar/storeKamar',[KamarController::class,'storeKamar']);
Route::get('/dataKamar/{id}/editKamar',[KamarController::class,'editKamar']);
Route::put('/dataKamar/{id}',[KamarController::class,'updateKamar']);
Route::delete('/dataKamar/{id}',[KamarController::class,'deleteKamar']);

Route::get('/receptionist',[KamarController::class,'receptionistTable']);
Route::get('/List Kamar Hotel',[KamarController::class,'hotelUser']);

// Route::get('/loginView', function () {
//     return view('pages.userView.loginView.loginView');
// });

Route::get('/loginView', function () {
    return view('pages.userView.loginView.loginView');
});


Route::get('/dataRegister', function () {
    return view('pages.adminView.dataRegister');
});

Route::get('/tambahKamar', function () {
    return view('pages.adminView.tambahKamar');
});

Route::get('/hotelView', function () {
    return view('pages.userView.hotelView.hotelView');
});

Route::get('/profileView', function () {
    return view('pages.userView.profileView.profileView');
});


Route::get('/changeprofileView', function () {
    return view('pages.userView.profileView.changeprofileView');
});


Route::get('/dataRegister', [regController::class, 'dataRegister']);

Route::get('/dash', function () {
    return view('pages.adminView.dash');
});

Route::get('/dash', function () {
    return view('pages.adminView.dash');
});


Route::get('/registerView', function () {
    return view('pages.userView.registerView.registerView');
});
// routes untuk admin
// Route::get('/registerView', function () {
//     return view('pages.userView.registerView.registerView');
// });

// register dan autentikasi dan user
Route::post('/register', [regController::class, 'register']);
Route::post('/login', [logController::class, 'login']);
// register dan autentikasi dan user