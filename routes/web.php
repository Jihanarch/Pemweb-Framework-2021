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
    return view('welcome2');
});

Route::get('/','App\Http\Controllers\Coba@index') -> name('home');
Route::get('/create','App\Http\Controllers\Coba@create') ->name('create');
Route::post('/create','App\Http\Controllers\Coba@store')->name('store');
Route::get('/edit/{id}','App\Http\Controllers\Coba@edit') ->name('edit');
Route::post('/update/{id}','App\Http\Controllers\Coba@update')->name('update');
Route::get('/delete/{id}','App\Http\Controllers\Coba@delete') ->name('delete');


Route::get('/about','App\Http\Controllers\admin@index') -> name('About_K3518038');
Route::get('/editprofil/{id}','App\Http\Controllers\admin@edit') ->name('Edit_Profil');
Route::post('/updateprofil{id}','App\Http\Controllers\admin@update')->name('Update_Profil');

Route::get('/generate','App\Http\Controllers\Coba@generate');
Route::get('/getdatachunk','App\Http\Controllers\Coba@getdatachunk');
Route::get('/getdatanochunk','App\Http\Controllers\Coba@getdatanochunk');

