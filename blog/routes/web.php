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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/HomeAde', 'HomeController@prueba')->name('Wenas');

Route::get('/tamano', 'HomeController@tamanos')->name('la buena');

Route::get('/pequeno', 'HomeController@chiquita')->name('la rebuena');

Route::get('/mediana', 'HomeController@mediana')->name('la recontrabuena');

Route::get('/grande', 'HomeController@grande')->name('la megabuena');