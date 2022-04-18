<?php

<<<<<<< HEAD
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Admins\RoleController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\PermissionController;
use App\Http\Controllers\Admins\AdminDashboardController;
=======
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TechnicianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf

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

<<<<<<< HEAD
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', 'verified', 'role:admin|user'])->group(function() {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('admins', AdminController::class)->parameters(['admins' => 'user'])->only(['index', 'update']);
    Route::resource('users', UserController::class)->except(['create', 'show', 'edit']);
    Route::resource('permissions', PermissionController::class)->except(['create', 'show', 'edit']);
    Route::resource('roles', RoleController::class)->except(['create', 'show', 'edit']);
});
=======
Auth::routes();
Route::get('/indexTeknisi', function () {
    return view('teknisi.technician');
})->name('teknisi.index');
// });

Route::prefix('/')->group(function () {
    Route::get('login-page', function () {
        return view('auth.login', ['title' => 'Login']);
    })->name('login.auth');


    Route::get('register-page', function () {
        return view('auth.register', ['title' => 'Register']);
    })->name('register.auth');

    Route::get('', function () {
        return view('index', [
            'title' => 'Home'
        ]);
    })->name('index.home');

    Route::get('service', function () {
        return view('service', [
            'title' => 'Service'
        ]);
    })->name('service.home');

    Route::get('contact', function () {
        return view('contact', [
            'title' => 'Contact'
        ]);
    })->name('contact.home');

    Route::get('about', function () {
        return view('about', [
            'title' => 'About'
        ]);
    })->name('about.home');

    Route::get('tec', function () {
        return view('teknisi.technician', [
            'title' => 'Teknisi'
        ]);
    });
});

Route::get('/cdteknisi', [TechnicianController::class, 'ubahdata'])->name('inbox.cdt');

Route::group(['middleware' => 'auth'], function () {
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/inbox', [MessageController::class, 'index'])->name('inbox.index');
    Route::get('/inbox/{id}', [MessageController::class, 'show', 'title' => 'Message'])->name('inbox.show');
    Route::get('/detailOrder', function () {
        return view(
            'teknisi.detailOrder',
            ['title' => 'Order Detail']
        );
    })->name('teknisi.detailOrder');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
