<?php

namespace App\Http\Controllers\Admin;

use App\Guest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $guests = Guest::all();
        return view('admin.guest.index',compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'email' => 'required',
           'password' => 'required',
           'surname' => 'required',
           'other_names' => 'required',
           'phone' => 'required',
           'dob' => 'required'
        ]);
        $guest = new guest();
        $guest->email = $request->email;
        $guest->password = $request->password;
        $guest->surname = $request->surname;
        $guest->other_names = $request->other_names;
        $guest->phone = $request->phone;
        $guest->dob = $request->email;
        $guest->save();
        return redirect()->route('guest.index')->with('successMsg','guest Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($guest_id)
    {
        $guest = guest::find($guest_id);
        return view('admin.guest.edit',compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $guest_id)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
            'surname' => 'required',
            'other_names' => 'required',
            'phone' => 'required',
            'dob' => 'required'  
        ]);
        $guest = guest::find($guest_id);
        $guest->email = $request->email;
        $guest->password = $request->password;
        $guest->surname = $request->surname;
        $guest->other_names = $request->other_names;
        $guest->phone = $request->phone;
        $guest->dob = $request->email;
        $guest->save(); 
        return redirect()->route('guest.index')->with('successMsg','guest Details Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($guest_id)
    {
        guest::find($guest_id)->delete();
        return redirect()->back()->with('successMsg','guest Successfully Deleted');
    }
}