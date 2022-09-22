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

Route::get('/dataKamar',[KamarController::class,'tableKamar']);
Route::get('/dataKamar/createKamar',[KamarController::class,'createKamar']);
Route::post('/dataKamar/storeKamar',[KamarController::class,'storeKamar']);
Route::get('/dataKamar/{id}/editKamar',[KamarController::class,'editKamar']);
Route::put('/dataKamar/{id}',[KamarController::class,'updateKamar']);
Route::delete('/dataKamar/{id}',[KamarController::class,'deleteKamar']);

Route::get('/receptionist',[KamarController::class,'receptionistTable']);
Route::get('/List Kamar Hotel',[KamarController::class,'hotelUser']);
Route::get('/dataKamar/search',[KamarController::class,'search']);
Route::get('/receptionist/search',[KamarController::class,'receptionistSearch']);
Route::get('/List Kamar Hotel/search',[KamarController::class,'listSearch']);


// Route::get('/loginView', function () {
//     return view('pages.userView.loginView.loginView');
// });

// Route::get('/registerView', function () {
//     return view('pages.userView.registerView.registerView');
// });

