<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
    return view ('home', [
        "title" => "Home"
        
    ]);
});
Route::get('/login-admin', function () {
    return view ('login-admin', [
        "title" => "login-admin"
    ]);
});
Route::get('/login', function () {
    return view ('login-user', [
        "title" => "login"
    ]);
});



Route::get('/lupa password', function () {
    return view ('forgot-pwd', [
       "title" => "lupa-password"

    ]);
});
Route::get('/buat akun', function () {
    return view ('register-user', [
        "title" => "buat-akun"

    ]);
});
Route::get('/upload foto', function () {
    return view ('upload-img', [
        "title" => "upload-foto"

    ]);
});

Route::get('/login', [LoginController::class, 'index']);

