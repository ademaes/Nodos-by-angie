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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/HomeAde', 'HomeController@index')->name('Wenas');

Route::get('/tamano', 'HomeController@tamanos')->name('la buena');

Route::get('/pequeno', 'HomeController@chiquita')->name('la rebuena');

Route::get('/mediana', 'HomeController@mediana')->name('la recontrabuena');

Route::get('/grande', 'HomeController@grande')->name('la megabuena');

Route::get('/chiquitaEstilo1', 'DisenoController@chiquitaEstilo1')->name('la remegabuena');

Route::get('/chiquitaEstilo2', 'DisenoController@chiquitaEstilo2')->name('la remegabuena');

Route::get('/chiquitaEstilo3', 'DisenoController@chiquitaEstilo3')->name('la remegabuena');

Route::get('/medianaEstilo1', 'DisenoController@medianaEstilo1')->name('la remegabuena');

Route::get('/medianaEstilo2', 'DisenoController@medianaEstilo2')->name('la remegabuena');

Route::get('/medianaEstilo3', 'DisenoController@medianaEstilo3')->name('la remegabuena');

Route::get('/grandeEstilo1', 'DisenoController@grandeEstilo1')->name('la remegabuena');

Route::get('/grandeEstilo2', 'DisenoController@grandeEstilo2')->name('la remegabuena');

Route::get('/grandeEstilo3', 'DisenoController@grandeEstilo3')->name('la remegabuena');

Route::post('/color2Save', 'ManillaController@save2Colores')->name('color2Save');

Route::post('/color3Save', 'ManillaController@save3Colores')->name('color3Save');

Route::post('/color4Save', 'ManillaController@save4Colores')->name('color4Save');

Route::post('/color5Save', 'ManillaController@save5Colores')->name('color5Save');

Route::post('/color7Save', 'ManillaController@save7Colores')->name('color7Save');

Route::post('/verManilla', 'HomeController@verManilla')->name('verManilla');

Route::post('/verCliente', 'HomeController@verCliente')->name('verCliente');

Route::get('/admin', 'HomeController@admin')->name('la remegabuena');
