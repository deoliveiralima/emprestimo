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

Route::view('/inicio', 'inicio.home');


Route::get('item','ItemController@index')->name('item.inicio');
Route::get('item/adiciona','ItemController@create')->name('item.adiciona');
Route::post('item','ItemController@store')->name('item.salva');
Route::get('item/{id}','ItemController@show')->name('item.exibe');
Route::get('item/{id}/edita','ItemController@edit')->name('item.edita');
Route::put('item/{id}','ItemController@update')->name('item.atualiza');
Route::delete('item/{id}','ItemController@destroy')->name('item.exclui');

Route::get('solicitante','SolicitanteController@index')->name('solicitante.inicio');
Route::get('solicitante/adiciona','SolicitanteController@create')->name('solicitante.adiciona');
Route::post('solicitante','SolicitanteController@store')->name('solicitante.salva');
Route::get('solicitante/{id}','SolicitanteController@show')->name('solicitante.exibe');
Route::get('solicitante/{id}/edita','SolicitanteController@edit')->name('solicitante.edita');
Route::put('solicitante/{id}','SolicitanteController@update')->name('solicitante.atualiza');
Route::delete('solicitante/{id}','SolicitanteController@destroy')->name('solicitante.exclui');

Route::get('emprestimo','EmprestimoController@index')->name('emprestimo.inicio');
Route::get('emprestimo/adiciona','EmprestimoController@create')->name('emprestimo.adiciona');
Route::post('emprestimo','EmprestimoController@store')->name('emprestimo.salva');
Route::get('emprestimo/{id}','EmprestimoController@show')->name('emprestimo.exibe');
Route::get('emprestimo/{id}/edita','EmprestimoController@edit')->name('emprestimo.edita');
Route::put('emprestimo/{id}','EmprestimoController@update')->name('emprestimo.atualiza');
Route::delete('emprestimo/{id}','EmprestimoController@destroy')->name('emprestimo.exclui');