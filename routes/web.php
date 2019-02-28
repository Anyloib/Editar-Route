<?php

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
    return redirect()->route('dashboard');
});

Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');

Route::resource('mascotas', 'MascotaController');
Route::get('/perfil', 'PerfilController@edit')->name('perfil.edit');

Route::put('/perfil/{id}', 'PerfilController@update')->name('perfil.update');

Route::resource('especies', 'EspecieController');

Auth::routes(['register' => false]);
