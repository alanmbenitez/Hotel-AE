<?php

namespace App\Http\Controllers;
use App\Mail\BookingEmail;
use App\Mail\ContactEmail;
use App\Mail\UserEmail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class FormsController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        
      
        
        $msg = request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'room' => 'required',
                'adults' => 'required',
                'child' => '',
                'checkin' => 'required',
                'checkout' => 'required',
            ],
            
        );

        Mail::to('cecimtorres79@gmail.com')->queue(new BookingEmail($msg)); 
        Mail::to($msg['email'])->queue(new UserEmail($msg)); 


        return response()->json(['message' =>'todo ok'], 200);

    }

    public function contact(Request $request)
    {
        $data = $request->all();
        
      
        
        $msg = request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
               
            ],
            
        );

        Mail::to('cecimtorres79@gmail.com')->queue(new ContactEmail($msg)); 

        return response()->json(['message' =>'todo ok'], 200);

    }
}
