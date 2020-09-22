<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
        if(request()->ajax())
        {
            if(!empty($request->filter_phone))
            {
                $data = DB::table('members')
                            ->select('email','surname','other_names','phone','dob','group_id')
                            ->where('phone', $request->filter_phone) 
                            ->get();
            }
            else
            {
                $data = DB::table('members')
                        ->select('email','surname','other_names','phone','dob','group_id')
                        ->get();
            }
            return datatables()->of($data)->make(true);
        }

        $phone = DB::table('members')
                    ->select('phone') 
                    ->get(); 
        return view('custom_search',compact('phone'));
    }
}
