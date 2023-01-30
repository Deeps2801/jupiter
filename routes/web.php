<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\BookController;



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

// Route::get('/', 'FrontEndController@home')->name('website');
 Route::get('/', [HomeController::class, 'index']);
//Route::get('admin/dashbaord', [DashbaordController::class, 'index']);

Route::get('dashboard', [DashboardController::class,'index']);



Route::group(['prefix' => 'admin'], function () {
    Route::resource('book', BookController::class);
});

Route::get('book/fetch_data', 'BookController@fetch_data');

//Route::get('/dashboard','test\TestController@getTest');