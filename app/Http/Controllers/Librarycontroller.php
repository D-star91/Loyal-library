<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Librarycontroller extends Controller
{
    function freebook(){
        return view('library.library_free');
    }
    function freepg_2(){
        return view('library.free_page_2');
    }

}
