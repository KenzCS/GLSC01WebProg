<?php

use App\Http\Controllers\PostController;
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

// Route::get('/website', 'App\Http\Controllers\WebsiteController@home');
// Route::get('/website/branch',  'App\Http\Controllers\WebsiteController@branch');

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , [PostController::class,'index']);


