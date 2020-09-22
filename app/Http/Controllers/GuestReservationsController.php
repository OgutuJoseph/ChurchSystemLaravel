<?php

namespace App\Http\Controllers;

use Session;
use App\Guest;
use App\Service;
use App\GuestReservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request; 

class GuestReservationsController extends Controller
{
    public function index ()
    { 
        return view('home.guestreservations');
    }

    public function create()
    {
        $guests = Guest::all();
        $services = Service::all(); 
        return view('home.guestreservations',compact('services','guests'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'service_id' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'number_of_seats' => 'required',
            'guest_id' => 'required',
            'email' => 'required'
        ]);
        $guestreservation = new GuestReservation();
        $guestreservation->service_id = $request->service_id;
        $guestreservation->date = $request->date;
        $guestreservation->start_time = $request->start_time;
        $guestreservation->end_time = $request->end_time;
        $guestreservation->number_of_seats = $request->number_of_seats;
        $guestreservation->guest_id = $request->guest_id;
        $guestreservation->email = $request->email;
        $guestreservation->status = false;
        $guestreservation->save();
         return redirect()->back()->with('success', 'Reservation Request Sent Successfully. We Will Get Back To You Shortly');


    }
}
