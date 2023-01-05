<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController as Auth;
use App\Http\Controllers\ProfileController as Profile;

use App\Http\Controllers\Admin\UserController as AdminUser;
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
    return view('welcome');
});

// Login
Route::prefix('auth')->group(function() {
    Route::name('auth.')->controller(Auth::class)->group(function() {
        Route::get('/login', 'login')->name('login');// auth.login
        Route::get('/loginCheck', 'check')->name('check');
        Route::post('/login', 'loginSubmit')->name('create');

        // Register
        Route::get('/register', 'registerShow')->name('register.show');
        Route::post('/register', 'registerSubmit')->name('register.create');
    });
});
Route::redirect('/login', '/auth/login');

// Profile
Route::get('/profile', [Profile::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard', ['page' => 'dashboard']);
    })->name('admin.dashboard');
    // User Page
    Route::get('/users', [AdminUser::class, 'index'])->name('admin.users.list');
});

