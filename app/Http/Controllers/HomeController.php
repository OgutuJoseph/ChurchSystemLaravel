<?php

namespace App\Http\Controllers;

use App\Priest;
use App\Service; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $priests = Priest::all();
        $services = Service::all(); 
        return view('welcome',compact('priests','services'));
    }
}
