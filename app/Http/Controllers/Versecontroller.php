<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Versecontroller extends Controller
{
    function verse(){
        return view('Bible.verse');
    }
}
