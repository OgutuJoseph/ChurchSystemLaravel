<?php

namespace App\Http\Controllers;


use Session;
use App\Service;
use App\Reservation;
use App\Member; 
use Illuminate\Http\Request; 

class ReservationsController extends Controller
{
    public function index ()
    { 
        
        return view('home.reservations');
    }

    public function create()
    {
        $members = Member::all();
        $services = Service::all(); 
        return view('home.reservations',compact('services','members'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'service_id' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'number_of_seats' => 'required',
            'member_id' => 'required',
            'email' => 'required'
        ]);
        $reservation = new Reservation();
        $reservation->service_id = $request->service_id;
        $reservation->date = $request->date;
        $reservation->start_time = $request->start_time;
        $reservation->end_time = $request->end_time;
        $reservation->number_of_seats = $request->number_of_seats;
        $reservation->member_id = $request->member_id;
        $reservation->email = $request->email;
        $reservation->status = false;
        $reservation->save();
         return redirect()->back()->with('success', 'Reservation Request Sent Successfully. We Will Get Back To You Shortly');


    }
}
