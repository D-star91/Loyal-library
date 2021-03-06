<?php

namespace App\Http\Controllers;

use App\Models\Praypost;
use Illuminate\Http\Request;

class Prayercontroller extends Controller
{
    function prayer(){
        return view('Prayer.prayer');
    }
    function pray_post(){
        $validation=request()->validate([
            "name"=>'required',
            "pray"=>'required',
            "select"=>'required',
            "content"=>'required',
        ]);
        if($validation){
            $name=request('name');
            $pray=request('pray');
            $select=request('select');
            $content=request('content');
            
            $praypost=new Praypost();
            $praypost->user_id=auth()->user()->id;
            $praypost->name=$name;
            $praypost->pray=$pray;
            $praypost->select=$select;
            $praypost->content=$content;
            $praypost->save();

            return redirect()->route("index")->with("message","post added");
        }else{
            return back()->withErrors($validation);
        }
    }

    function prayer_success(){
        return view('Prayer.Prayer_success');
    }
}
