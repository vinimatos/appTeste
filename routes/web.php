<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/novo', function () {
    return view('aluno.novo');
});

Route::post('/aluno/save', 'AlunoController@store');
Route::post('/aluno/update', 'AlunoController@update');
Route::get('/aluno/excluir/{id}', 'AlunoController@destroy');
Route::get('/alunos', 'AlunoController@index');
Route::get('/aluno/edit/{id}', 'AlunoController@edit');
Route::post('/aluno/update/{id}', 'AlunoController@update');

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

