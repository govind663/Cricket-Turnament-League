<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CricketTurnamentController;

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
    return view('auth.login');
});



Route::get('/index', [CricketTurnamentController::class, 'Home'])->name('/index');
Route::get('/404', [CricketTurnamentController::class, 'Error_404'])->name('/404');

Route::get('/account', [CricketTurnamentController::class, 'Account'])->name('/account');
Route::get('/help', [CricketTurnamentController::class, 'Help'])->name('/help');

Route::get('/settings', [CricketTurnamentController::class, 'Settings'])->name('/settings');


/**
 *  Here Start User Authnication
 */
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@store')->name('register');

Route::get('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('home', 'App\Http\Controllers\HomeController@home')->name('home');

Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

/***
 * Here Start Team Profile
 */
Route::get('/csk', [CricketTurnamentController::class, 'CSK'])->name('/csk');
Route::get('/dc', [CricketTurnamentController::class, 'DC'])->name('/dc');
Route::get('/kkr', [CricketTurnamentController::class, 'KKR'])->name('/kkr');
Route::get('/mi', [CricketTurnamentController::class, 'MI'])->name('/mi');
Route::get('/rcb', [CricketTurnamentController::class, 'RCB'])->name('/rcb');

Route::get('/player-profile', [CricketTurnamentController::class, 'Player_Profile'])->name('/player-profile');

Route::get('/venu', [CricketTurnamentController::class, 'Venu'])->name('/venu');

Route::get('/list-match', [CricketTurnamentController::class, 'List_Match'])->name('/list-match');
Route::get('/match-summary', [CricketTurnamentController::class, 'Match_List'])->name('/match-summary');
