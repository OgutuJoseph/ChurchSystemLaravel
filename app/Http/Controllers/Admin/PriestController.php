<?php

namespace App\Http\Controllers\Admin;
 
use App\Priest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priests = Priest::all();
        return view('admin.priest.index',compact('priests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priests = Priest::all();
        return view('admin.priest.create',compact('priests'));
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
            'priest_name' => 'required',
            'phone' => 'required',
            'email' => 'required', 
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/priest'))
            {
                mkdir('uploads/priest',0777,true);
            }
            $image->move('uploads/priest',$imagename);
        }else{
            $imagename = "default.png";
        }
        $priest = new Priest();
        $priest->priest_name = $request->priest_name;
        $priest->phone = $request->phone;
        $priest->email = $request->email; 
        $priest->image = $imagename;
        $priest->save();
        return redirect()->route('priest.index')->with('successMsg','Priest Successfully Added');
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
    public function edit($priest_id)
    {
        $priest = Priest::find($priest_id); 
        return view('admin.priest.edit',compact('priest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $priest_id)
    {
        $this->validate($request,[
            'priest_name' => 'required',
            'phone' => 'required',
            'email' => 'required', 
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);
        $priest = Priest::find($priest_id);
        $image = $request->file('image');
        $slug = str_slug($request->priest_name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/priest'))
            {
                mkdir('uploads/priest',0777,true);
            }
            unlink('uploads/priest/'.$priest->image);
            $image->move('uploads/priest',$imagename);
        }else{
            $imagename = $priest->image;
        }

        $priest->priest_name = $request->priest_name;
        $priest->phone = $request->phone;
        $priest->email = $request->email; 
        $priest->image = $imagename;
        $priest->save();
        return redirect()->route('priest.index')->with('successMsg','Priest Details Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($priest_id)
    {
        $priest = Priest::find($priest_id);
        if(file_exists('uploads/priest'.$priest->image))
        {
            unlink('uploads/priest/'.$priest->image);
        }
        $priest->delete();
        return redirect()->back()->with('successMsg', 'Priest Successfully Deleted');
    }
}
