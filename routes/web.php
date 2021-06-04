<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\insertcontroller;
use App\Http\Controllers\citizenController;
use App\Http\Controllers\UsersController;
use Illuminate\Session\Middleware\AuthenticateSession;
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
    return view('index');
});



  
//Route::get("insertcontroller",[insertcontroller::class,"adduser"]);
Route::get('/register1',[UsersController::class,'register']);
Route::get('/select',[UsersController::class,'select']);
Route::post('/insertUser',[UsersController::class,'insertUser']);
Route::resource('citizens',citizenController::class);


// zzRoute::get('login',[citizenController::class,'home']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
