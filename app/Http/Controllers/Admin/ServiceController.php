<?php

namespace App\Http\Controllers\Admin;

use App\Priest;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    public function index()
    {
        $allservices = new Service();
        $services = $allservices->Loadservices();
        return view('admin.service.index')->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priests = Priest::all(); 
        return view('admin.service.create',compact('priests'));
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
            'service_name' => 'required',
            'priest' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required', 
            'theme' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->service_name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/service'))
            {
                mkdir('uploads/service',0777,true);
            }
            $image->move('uploads/service',$imagename);
        }else{
            $imagename = "default.png";
        }
        $service = new Service();
        $service->service_name = $request->service_name;
        $service->priest_id = $request->priest;
        $service->date = $request->date;
        $service->start_time = $request->start_time;
        $service->end_time = $request->end_time; 
        $service->theme = $request->theme;
        $service->image = $imagename;
        $service->save();
        return redirect()->route('service.index')->with('successMsg','Mass Service Successfully Added');
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
    public function edit($service_id)
    {
        $service = Service::find($service_id);
        $priests = Priest::all();
        return view('admin.service.edit',compact('service','priests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_id)
    {
        $this->validate($request,[
            'service_name' => 'required',
            'priest' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required', 
            'theme' => 'required', 
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);
        $service = Service::find($service_id);
        $image = $request->file('image');
        $slug = str_slug($request->service_name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if(!file_exists('uploads/service'))
            {
                mkdir('uploads/service',0777,true);
            }
            unlink('uploads/service/'.$service->image);
            $image->move('uploads/service',$imagename);
        }else{
            $imagename = $service->image;
        }

        $service->service_name = $request->service_name;
        $service->priest_id = $request->priest;
        $service->date = $request->date;
        $service->start_time = $request->start_time;
        $service->end_time = $request->end_time; 
        $service->theme = $request->theme;
        $service->image = $imagename;
        $service->save();
        return redirect()->route('service.index')->with('successMsg','Mass Service Details Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_id)
    {
        $service = Service::find($service_id);
        if(file_exists('uploads/service'.$service->image))
        {
            unlink('uploads/service/'.$service->image);
        }
        $service->delete();
        return redirect()->back()->with('successMsg', 'Mass Service Successfully Deleted');
    }
}
