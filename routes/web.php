<?php

use Illuminate\Support\Facades\Auth;
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
Route::prefix('/')->group(function(){
    Route::get('index', function () {return view('index');});
    Route::get('contact', function () {return view('contact');});
    Route::get('about', function () {return view('about');});
    Route::get('/service', function () {return view('service');});
});



Route::get('/penggunaanTemplate', function () {
    return view('guest_side.penggunaanTemplateEngine', [
        'title' => 'Beranda',
    ]);
});
Route::get('/login_', function () {
    return view('guest_side.login', [
        'title' => 'Login Page',
    ]);
});
Route::get('/register_', function () {
    return view('guest_side.register', [
        'title' => 'Register Page',
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
