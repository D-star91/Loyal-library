<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prayercontroller extends Controller
{
    function prayer(){
        return view('Prayer.prayer');
    }
}
