<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigurationController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::resource("configuration",ConfigurationController::class);

Route::get('/login', [CustomAuthController::class, 'index']);
//Route::get('configuration', ConfigurationController::class);


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/client', [ClientController::class, 'index']);
