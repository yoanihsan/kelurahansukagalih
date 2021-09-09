<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login','LoginController@login');

Route::get('/schedule-service','ScheduleServiceController@index');
Route::get('/schedule-service/add/{id}','ScheduleServiceController@add');
Route::post('/schedule-service/create','ScheduleServiceController@create');
Route::get('/schedule-service/confirmation/{id}','ScheduleServiceController@confirmation');

Route::get('/service','ServiceController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home/search',[App\Http\Controllers\HomeController::class, 'search'])->name('home');
Route::get('/home/search', ['as' => 'search', 'uses' => 'HomeController@search']);
