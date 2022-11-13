<?php

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

Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::post('/cadastrar', 'App\Http\Controllers\SuperController@cadastro')->name('cadastro');
Route::get('/', 'App\Http\Controllers\SuperController@home')->name('home');
Route::get('/exercicio2', 'App\Http\Controllers\SuperController@exercicio2')->name('exercicio2');
Route::get('/exercicio3', 'App\Http\Controllers\SuperController@exercicio3')->name('exercicio3');