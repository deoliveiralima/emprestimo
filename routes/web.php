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



Route::get('/item/cadastro', 'ItemController@create')->name('item.create');
Route::post('/item/cadastro', 'ItemController@store')->name('item.store');

Route::get('emprestimo/', 'EmprestimoController@index')->name('emprestimo.create');

Route::get('emprestimo/{id}', 'EmprestimoController@index')->name('emprestimo.create');
Route::post('emprestimo/', 'EmprestimoController@create')->name('emprestimo.create');
Route::put('emprestimo/{id}', 'EmprestimoController@create')->name('emprestimo.create');
Route::delete('emprestimo/{id}', 'EmprestimoController@create')->name('emprestimo.create');