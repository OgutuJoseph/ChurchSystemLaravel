<?php

namespace App\Http\Controllers\Admin;

use App\ChurchGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChurchGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $church_groups = ChurchGroup::all();
        return view('admin.church_group.index',compact('church_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.church_group.create');
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
           'group_name' => 'required'
        ]);
        $church_group = new ChurchGroup();
        $church_group->group_name = $request->group_name; 
        $church_group->save();
        return redirect()->route('church_group.index')->with('successMsg','Church Group Successfully Added');
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
    public function edit($group_id)
    {
        $church_group = ChurchGroup::find($group_id);
        return view('admin.church_group.edit',compact('church_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $group_id)
    {
        $this->validate($request,[
            'group_name' => 'required'  
        ]);
        $church_group = ChurchGroup::find($group_id);
        $church_group->group_name = $request->group_name; 
        $church_group->save(); 
        return redirect()->route('church_group.index')->with('successMsg','Church Group Details Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($group_id)
    {
        ChurchGroup::find($group_id)->delete();
        return redirect()->back()->with('successMsg','Church Group Successfully Deleted');
    }
}
