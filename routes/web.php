<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\kalkulatorcontroller;

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

Route::get('1', function () {
    return view('kalkulator');
});
Route::get('2', function () {
    return view('calculator');
});

Route::get('/home', [kalkulatorcontroller::class, 'home'])->name('home');
Route::get('/kalkulator', [kalkulatorcontroller::class, 'index'])->name('kalkulator');
Route::post('/hitung', [kalkulatorcontroller::class, 'input'])->name('hitung');