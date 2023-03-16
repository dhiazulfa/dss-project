<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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

//route for home
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

//route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//route untuk logout
Route::post('/logout', [LoginController::class, 'logout']);

//route admin dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
  })->middleware('auth');