<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/inbox', [MessageController::class, 'index'])->name('inbox.index');
    Route::get('/inbox/{id}', [MessageController::class, 'show'])->name('inbox.show');
});

Route::get('/service', function () {
    return view('service');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
