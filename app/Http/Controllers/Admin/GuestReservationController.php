<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ReservationConfirmed;
use App\Service;
use App\GuestReservation; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class GuestReservationController extends Controller
{
    public function index()
    {
        $allguestreservations = new GuestReservation();
        $guestreservations = $allguestreservations->Loadguestreservations();
        return view('admin.guestreservation.index')->with(compact('guestreservations'));
     }

    public function status($reserve_id)
    {
        $guestreservation = GuestReservation::find($reserve_id);
        $guestreservation->status = true;
        $guestreservation->save();
        Notification::route('mail', $guestreservation->email)
            ->notify(new ReservationConfirmed());
        return redirect()->back()->with('successMsg','Reservation Successfully Confirmed');
    }

    public function destroy($reserve_id)
    {
        GuestReservation::find($reserve_id)->delete();
        return redirect()->back()->with('successMsg','Reservation Request Deleted');
    }
}
