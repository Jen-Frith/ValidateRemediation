<?php

use Illuminate\Support\Facades\Route;
use App\Gender;
use App\Useer;
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

    $genders=Gender::all();

    return view('welcome', compact('genders'));
});


Route::post('/store', 'UseerController@store', function(){})->name('useers.store');
Route::post('/test', 'UseerController@test', function(){})->name('useers.test');