<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {   //$single = __('blog.single');
        $data = __('blog');
        return view('pages.blog.blog')
        ->with('data', $data);
            
    }
}
