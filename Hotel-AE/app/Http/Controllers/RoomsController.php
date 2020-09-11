<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function single()
    {   $rooms = __('rooms.single');
        return view('pages.rooms.singleRoom')
        ->with('rooms', $rooms);
            
    }
    
    
    public function double()
    {   $rooms = __('rooms.double');
        return view('pages.rooms.singleRoom')
        ->with('rooms', $rooms);
      
    
    } 
    
    public function triple()
    {   $rooms = __('rooms.triple');
        return view('pages.rooms.singleRoom')
        ->with('rooms', $rooms);
            
    }

}

