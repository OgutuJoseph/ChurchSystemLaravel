<?php

namespace App\Http\Controllers\Admin;
 
use App\Service;
use App\Priest;
use App\Member;
use App\Reservation;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {  
        $serviceCount = Service::count();
        $priestCount = Priest::count();
        $memberCount = Member::count();
        $reservations = Reservation::where('status',false)->get();
        $contactCount = Contact::count();
        $services = Service::all();
        return view('admin.dashboard',compact('serviceCount','priestCount','memberCount','reservations','contactCount','services'));
    }
}
