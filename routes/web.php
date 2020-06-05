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


Auth::routes();
Route::get('pendaftaran-siswa-baru', 'PpdbController@create')->name('ppdb.create');
Route::post('pendaftaran-siswa-baru', 'PpdbController@store')->name('ppdb.store');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('siswa', 'StudentController');
});
