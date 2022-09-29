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
Route::get('/dashHotel', function () {
    return view('pages.adminView.kamarTable');
});
Route::get('/dataKamar',[KamarController::class,'tableKamar']);
Route::get('/dataKamarr',[KamarController::class,'tableKamarr']); 
// yang data kamarr itu yang ga ada bug pas dicobas
Route::get('/dataKamar/createKamar',[KamarController::class,'createKamar']);
Route::post('/dataKamar/storeKamar',[KamarController::class,'storeKamar']);
Route::get('/dataKamar/{id}/editKamar',[KamarController::class,'editKamar']);
Route::get('/receptionist/{id}/editKamar',[KamarController::class,'editKamarStatus']);
Route::put('/dataKamar/{id}',[KamarController::class,'updateKamar']);
Route::put('/receptionist/{id}',[KamarController::class,'updateKamarStatus']);
Route::delete('/dataKamar/{id}',[KamarController::class,'deleteKamar']);

Route::get('/receptionist',[KamarController::class,'receptionistTable']);
Route::get('/List Kamar Hotel',[KamarController::class,'hotelUser']);
Route::get('/dataKamar/search',[KamarController::class,'search']);
Route::get('/receptionist/search',[KamarController::class,'receptionistSearch']);
Route::get('/List Kamar Hotel/search',[KamarController::class,'listSearch']);


// Route::get('/loginView', function () {
//     return view('pages.userView.loginView.loginView');
// });

Route::get('/loginView', function () {
    return view('pages.userView.loginView.loginView');
});

Route::get('/bookView', function () {
    return view('pages.userView.bookView.bookView');
});

Route::get('/bookRoomView', function () {
    return view('pages.receptionistView.bookRoomView');
});


Route::get('/dataRegister', function () {
    return view('pages.adminView.dataRegister');
});

Route::get('/index', function () {
    return view('landingPage.index');
});


Route::resource('/tambahKamar', \App\Http\Controllers\KamarController::class);

Route::resource('/dataKamar', \App\Http\Controllers\KamarController::class);

// Route::get('/dash', function () {
//     return view('pages.adminView.dash');
// });


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



Route::get('admin-page', function() {
    return 'Halaman untuk Admin';
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return 'Halaman untuk User';
})->middleware('role:user')->name('user.page');
// register dan autentikasi dan user