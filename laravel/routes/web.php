<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController as Auth;
use App\Http\Controllers\ProfileController as Profile;
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
Route::get('/login', [Auth::class, 'login']);
Route::get('/loginCheck', [Auth::class, 'check']);
Route::post('/login', [Auth::class, 'loginSubmit']);

// Profile
Route::get('/profile', [Profile::class, 'index']);

