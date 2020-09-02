<?php

namespace App\Http\Controllers;
use App\Mail\BookingEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class FormsController extends Controller
{
    public function store(Request $request)
    {
        $message = request()->validate(
            [
                'booking-name' => 'required',
                'booking-email' => 'required|email',
                'booking-phone' => 'required',
                'booking-roomtype' => 'required',
                'booking-adults' => 'required',
                'booking-children' => 'required',
                'booking-checkin' => 'required',
                'booking-checkout' => 'required',
            ],
            [
                'name_requerid' => __('I need your name'),
            ]
        );

        Mail::to('alanmbenitezz@gmail.com')->queue(new BookingEmail($message));

        /* return new BookinkEmail($message); */
        return 'Datos validados';
    }
}
