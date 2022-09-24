<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    //
    public function showTimeLine(Post $post)
    {
        return view('/timeline')->with(['posts' => $post->get()]);
    }
    
    public function createPost(Request $request)
    {
        Post::create
        ([
            'user_id' => Auth::user()->id,
            'body' => $request->body,
        ]);
        
        return redirect('/');
    }
}
