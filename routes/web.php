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


Route::get('ss','App\Http\Controllers\ScreenshortController@ss_view');
Route::get('toTelegram','App\Http\Controllers\ScreenshortController@toTelegram');
Route::get('autoss','App\Http\Controllers\ScreenshortController@auto_ss');

Route::get('check_for_telegram','App\Http\Controllers\ScreenshortController@check_for_telegram');

Route::get('takeScreenshot','App\Http\Controllers\TakeScreenShortController@takeScreenshot');

