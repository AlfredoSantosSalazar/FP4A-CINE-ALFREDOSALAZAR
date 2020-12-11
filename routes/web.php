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

Route :: resource('movies', 'MoviesController');
Route :: resource('room', 'RoomController');
Route :: resource('consumables', 'ConsumablesController');
Route :: resource('entrances', 'EntrancesController');
Route :: resource('functions', 'FunctionsController');
Route::get('/home', 'HomeController@index')->name('home');
Route::name('imprimir')->get('/imprimir-pdf', 'Controller@imprimir');

Route::get('room-pdf', 'RoomController@exportToPDF') ->name('room.pdf');
Route::get('movies-pdf', 'MoviesController@exportToPDF') ->name('movies.pdf');
Route::get('functions-pdf', 'FunctionsController@exportToPDF') ->name('functions.pdf');
Route::get('entrances-pdf', 'EntrancesController@exportToPDF') ->name('entrances.pdf');
Route::get('consumables-pdf', 'ConsumablesController@exportToPDF') ->name('consumables.pdf');

Route::get('/consumablesXLS', 'ConsumablesController@exportToXls');
Route::get('/entrancesXLS', 'EntrancesController@exportToXls');
Route::get('/functionsXLS', 'FunctionsController@exportToXls');
Route::get('/moviesXLS', 'MoviesController@exportToXls');
Route::get('/roomXLS', 'RoomController@exportToXls');

Auth::routes();