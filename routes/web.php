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
/*DB::listen (function ($query){
    var_dump($query->sql);
});*/
Route::view('/', 'home')->name('home');
Route::get('/Lista', 'App\Http\Controllers\HomeController@index')->name('Lista');
//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index')->name('usuarios.index');
Route::get('/usuarios/crear', 'App\Http\Controllers\UsuariosController@create')->name('usuarios.create');
//Route::get('/usuarios/editar', 'App\Http\Controllers\UsuariosController@edit')->name('usuarios.edit');
Route::get('/usuarios/{usuarios}/editar', 'App\Http\Controllers\UsuariosController@edit')->name('usuarios.edit');
Route::patch('/usuarios/{usuarios}', 'App\Http\Controllers\UsuariosController@update')->name('usuarios.update');
//Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset','Auth\ForgortPasswordController@showLinkRequestForm')->name('password.request');
Route::delete('/usuarios/{usuarios}', 'App\Http\Controllers\UsuariosController@destroy')->name('usuarios.destroy');
//Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset','Auth\ForgotPasswordController@reset');

Route::post('/usuarios', 'App\Http\Controllers\UsuariosController@store')->name('usuarios.store');
Route::get('/usuarios/{usuarios}', 'App\Http\Controllers\UsuariosController@show')->name('usuarios.show');

Auth::routes();