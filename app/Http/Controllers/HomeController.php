<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends BaseController
{
    public function index()
    {  
        return view('pages.home.home');
            
    }
    public function contacto()
    {  
        return view('pages.contact.contact');
            
    }
    public function lang($locale)
    {  
        
        \App::setLocale($locale);
       
        return view('pages.home.home');
            
    }
}

