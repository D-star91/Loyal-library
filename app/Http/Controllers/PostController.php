<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function verse_post(){
        return view('Posts.verse_post');
    }
    function vs_post(){
        $validation=request()->validate([
            "title"=>'required',
            "image"=>'required',
            "content"=>'required',
        ]);
        if($validation){
            $title=request('title');
            $image=request('image');
            $content=request('content');
            
            $post=new Post();
            $post->user_id=auth()->user()->id;
            $post->title=$title;
            // image
            $imageName=uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path("images/posts/"),$imageName);
            $post->image=$imageName;
            $post->content=$content;
            $post->save();

            return redirect()->route("index")->with("message","post added");
        }else{
            return back()->withErrors($validation);
        }
    }
}
