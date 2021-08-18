<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Librarycontroller;
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


Route::get('/',[Homecontroller::class,'index'])->name("index");

// Library
Route::get('/free_books',[Librarycontroller::class,'freebook'])->name("free_books");
Route::get('/free_books_page-2',[Librarycontroller::class,'freepg_2'])->name("freepg_2");