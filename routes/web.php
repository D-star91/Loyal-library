<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Librarycontroller;
use App\Http\Controllers\Prayercontroller;
use App\Http\Controllers\Versecontroller;
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
// free_book_page
Route::get('/free_books',[Librarycontroller::class,'freebook'])->name("free_books");
Route::get('/free_books_page-2',[Librarycontroller::class,'freepg_2'])->name("freepg_2");

// free_books
Route::get('/fasting_successfully',[Librarycontroller::class,'fasting'])->name("fasting");
Route::get('/the-way-to-a-happy-life',[Librarycontroller::class,'happy'])->name("happy");
Route::get('/BFAM_pray',[Librarycontroller::class,'BFAM_pray'])->name("BFAM_pray");
Route::get('/cornerstone',[Librarycontroller::class,'cornerstone'])->name("cornerstone");
Route::get('/pray_to_him',[Librarycontroller::class,'pray_to_him'])->name("pray_to_him");
Route::get('/roof',[Librarycontroller::class,'roof'])->name("roof");
Route::get('/the_Change_the_world_school_of_prayer',[Librarycontroller::class,'the_change'])->name("the_change");
Route::get('/walking',[Librarycontroller::class,'walking'])->name("walking");
Route::get('/wall',[Librarycontroller::class,'wall'])->name("wall");
Route::get('/foundation',[Librarycontroller::class,'foundation'])->name("foundation");

// Category
Route::get('/life',[Librarycontroller::class,'life'])->name("life");
Route::get('/lesson',[Librarycontroller::class,'lesson'])->name("lesson");
Route::get('/pray',[Librarycontroller::class,'prayer_book'])->name("prayer_book");

// Prayer
Route::get('/prayer',[Prayercontroller::class,'prayer'])->name("prayer");
Route::get('/prayer_success',[Prayercontroller::class,'prayer_success'])->name("Pry_succ");

// Verses
Route::get('/verse',[Versecontroller::class,'verse'])->name("verse");