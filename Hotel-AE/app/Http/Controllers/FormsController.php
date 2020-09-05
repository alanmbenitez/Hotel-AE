<?php

namespace App\Http\Controllers;
use App\Mail\BookingEmail;
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
                'child' => 'required',
                'checkin' => 'required',
                'checkout' => 'required',
            ],
            
        );

        Mail::to('alanmbenitezz@gmail.com')->queue(new BookingEmail($msg)); 

        return response()->json(['message' =>'todo ok'], 200);

    }
}
