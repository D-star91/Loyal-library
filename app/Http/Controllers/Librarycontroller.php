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
    function wall(){
        return view('library.book.wall');
    }
    function BFAM_pray(){
        return view('library.book.BFAMpray');
    }
    function foundation(){
        return view('library.book.foundation');
    }
    function roof(){
        return view('library.book.roof');
    }
    function the_Change(){
        return view('library.book.The_Change');
    }
    function walking(){
        return view('library.book.walking');
    }
    function pray_to_him(){
        return view('library.book.pray_to_him');
    }
    function cornerstone(){
        return view('library.book.cornerstone');
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
