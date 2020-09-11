<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function single()
    {   $single = __('rooms.single');
        return view('pages.rooms.singleRoom')
        ->with('single', $single);
            
    }
}
