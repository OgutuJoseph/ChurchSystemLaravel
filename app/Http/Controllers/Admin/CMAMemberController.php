<?php

namespace App\Http\Controllers\Admin;
 
use App\ChurchGroup;
use App\CMAMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CMAMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $allcma_members = new CMAMember();
        $cma_members = $allcma_members->Loadcma_members();
        return view('admin.cma_member.index')->with(compact('cma_members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $church_groups = ChurchGroup::all();
        return view('admin.cma_member.create',compact('church_groups'));
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
        $cma_member = new CMAMember(); 
        $cma_member->surname = $request->surname;
        $cma_member->other_names = $request->other_names;
        $cma_member->phone = $request->phone;
        $cma_member->dob = $request->dob;
        $cma_member->group_id = $request->group_id;
        $cma_member->save();
        return redirect()->route('cma_member.index')->with('successMsg','CMA Member Successfully Added');
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
    public function edit($cma_id)
    {
        $cma_member = CMAMember::find($cma_id);
        $church_groups = ChurchGroup::all();
        return view('admin.cma_member.edit',compact('cma_member','church_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cma_id)
    {
        $this->validate($request,[ 
           'surname' => 'required',
           'other_names' => 'required',
           'phone' => 'required',
           'dob' => 'required',
           'group_id' => 'required' 
        ]);
        $cma_member = CMAMember::find($cma_id); 
        $cma_member->surname = $request->surname;
        $cma_member->other_names = $request->other_names;
        $cma_member->phone = $request->phone;
        $cma_member->dob = $request->dob;
        $cma_member->group_id = $request->group_id;
        $cma_member->save();
        return redirect()->route('cma_member.index')->with('successMsg','CMA Member Details Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cma_id)
    {
        CMAMember::find($cma_id)->delete();
        return redirect()->back()->with('successMsg','CMA Member Successfully Deleted');
    }
}