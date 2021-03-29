<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('show','PostController@Show');

Route::get('create','PostController@Create');
Route::post('store','PostController@Store') ->name('Store');

Route::get('edit/{id}','PostController@Edit');
Route::post('update/{id}','PostController@Update') ->name('Update');

