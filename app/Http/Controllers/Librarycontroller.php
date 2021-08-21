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
}
