<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    //
    public function showTimeLine()
    {
        return view('/timeline');
    }
}
