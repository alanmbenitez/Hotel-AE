<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {  
        return view('pages.home.home');
            
    }
    public function room()
    {  
        return view('pages.rooms.singleRoom');
            
    }
    public function lang($locale)
    {  
        
        \App::setLocale($locale);
       
        return view('pages.home.home');
            
    }
}

