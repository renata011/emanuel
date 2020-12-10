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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('verifica', 'HomeController@verificaShow')->name('verificaShow');

Route::get('cadastro','pacienteController@cadastroShow')->name('cadastroShow');
Route::post('salvar','pacienteController@salvaCadastro')->name('salvaCadastro');	
Route::get('consulta','pacienteController@consultaShow')->name('consultaShow');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
