<?php

namespace App\Http\Controllers\Admin;
 
use App\ChurchGroup;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $allmembers = new Member();
        $members = $allmembers->Loadmembers();
        return view('admin.member.index')->with(compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $church_groups = ChurchGroup::all();
        return view('admin.member.create',compact('church_groups'));
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
           'dob' => 'required',
           'group_id' => 'required'
        ]);
        $member = new Member();
        $member->email = $request->email;
        $member->password = $request->password;
        $member->surname = $request->surname;
        $member->other_names = $request->other_names;
        $member->phone = $request->phone;
        $member->dob = $request->dob;
        $member->group_id = $request->group_id;
        $member->save();
        return redirect()->route('member.index')->with('successMsg','Member Successfully Added');
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
    public function edit($member_id)
    {
        $member = Member::find($member_id);
        $church_groups = ChurchGroup::all();
        return view('admin.member.edit',compact('member','church_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member_id)
    {
        $this->validate($request,[
            'email' => 'required',
           'password' => 'required',
           'surname' => 'required',
           'other_names' => 'required',
           'phone' => 'required',
           'dob' => 'required',
           'group_id' => 'required' 
        ]);
        $member = Member::find($member_id);
        $member->email = $request->email;
        $member->password = $request->password;
        $member->surname = $request->surname;
        $member->other_names = $request->other_names;
        $member->phone = $request->phone;
        $member->dob = $request->dob;
        $member->group_id = $request->group_id;
        $member->save();
        return redirect()->route('member.index')->with('successMsg','Member Details Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($member_id)
    {
        Member::find($member_id)->delete();
        return redirect()->back()->with('successMsg','Member Successfully Deleted');
    }
}
