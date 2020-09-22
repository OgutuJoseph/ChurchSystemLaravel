<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ReservationConfirmed;
use App\Service;
use App\Reservation; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    public function index()
    {
        $allreservations = new Reservation();
        $reservations = $allreservations->Loadreservations();
        return view('admin.reservation.index')->with(compact('reservations'));
     }

    public function status($reservation_id)
    {
        $reservation = Reservation::find($reservation_id);
        $reservation->status = true;
        $reservation->save();
        Notification::route('mail', $reservation->email)
            ->notify(new ReservationConfirmed());
        return redirect()->back()->with('successMsg','Reservation Successfully Confirmed');
    }

    public function destroy($reservation_id)
    {
        Reservation::find($reservation_id)->delete();
        return redirect()->back()->with('successMsg','Reservation Request Deleted');
    }
}
