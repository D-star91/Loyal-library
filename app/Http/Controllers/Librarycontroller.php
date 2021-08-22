<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Librarycontroller extends Controller
{
    function freebook(){
        return view('library.page.library_free');
    }
    function freepg_2(){
        return view('library.page.free_page_2');
    }

    // Free_books
    function fasting(){
        return view('library.book.fasting');
    }
    function happy(){
        return view('library.book.happy');
    }
    // Category
    function life(){
        return view('library.category.life');
    }
    function prayer_book(){
        return view('library.category.prayer_book');
    }
    function lesson(){
        return view('library.category.lesson');
    }
        
}
