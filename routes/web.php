<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentControllerLEC;
use App\Http\Controllers\PageControllerLEC;

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

  Route::get('/new', function () {
     return ('welcome');
 })->name("greetroute");

Route::get('/greetings/{name?}',[PageControllerLEC::class,'greetings']);

Route::resource('/student', StudentControllerLEC::class);

Route::get('/aboutus', [PageControllerLEC::class,'aboutus']);
Route::get('/contactus',[PageControllerLEC::class,'contactus']);
Route::get('/dashboard',[PageControllerLEC::class,'dashboard']);
Route::get('/profile',[PageControllerLEC::class,'profile']);
Route::get('/controlstructures',[PageControllerLEC::class,'controlstructures']);
Route::get('/student_lce/{index?}', [PageControllerLEC::class, 'student_lce']);
Route::get('/login',[PageControllerLEC::class,'login']);



