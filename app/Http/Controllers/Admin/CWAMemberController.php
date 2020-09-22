<?php

namespace App\Http\Controllers\Admin;
 
use App\ChurchGroup;
use App\CWAMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CWAMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $allcwa_members = new CWAMember();
        $cwa_members = $allcwa_members->Loadcwa_members();
        return view('admin.cwa_member.index')->with(compact('cwa_members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $church_groups = ChurchGroup::all();
        return view('admin.cwa_member.create',compact('church_groups'));
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
           'surname' => 'required',
           'other_names' => 'required',
           'phone' => 'required',
           'dob' => 'required',
           'group_id' => 'required'
        ]);
        $cwa_member = new CWAMember(); 
        $cwa_member->surname = $request->surname;
        $cwa_member->other_names = $request->other_names;
        $cwa_member->phone = $request->phone;
        $cwa_member->dob = $request->dob;
        $cwa_member->group_id = $request->group_id;
        $cwa_member->save();
        return redirect()->route('cwa_member.index')->with('successMsg','cwa Member Successfully Added');
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
    public function edit($cwa_id)
    {
        $cwa_member = CWAMember::find($cwa_id);
        $church_groups = ChurchGroup::all();
        return view('admin.cwa_member.edit',compact('cwa_member','church_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cwa_id)
    {
        $this->validate($request,[ 
           'surname' => 'required',
           'other_names' => 'required',
           'phone' => 'required',
           'dob' => 'required',
           'group_id' => 'required' 
        ]);
        $cwa_member = CWAMember::find($cwa_id); 
        $cwa_member->surname = $request->surname;
        $cwa_member->other_names = $request->other_names;
        $cwa_member->phone = $request->phone;
        $cwa_member->dob = $request->dob;
        $cwa_member->group_id = $request->group_id;
        $cwa_member->save();
        return redirect()->route('cwa_member.index')->with('successMsg','cwa Member Details Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cwa_id)
    {
        CWAMember::find($cwa_id)->delete();
        return redirect()->back()->with('successMsg','cwa Member Successfully Deleted');
    }
}