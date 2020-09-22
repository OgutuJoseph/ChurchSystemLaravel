<?php

namespace App\Http\Controllers;

 
use DB; 
use Session; 
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 

class GuestAuthController extends Controller
{

    public function confirm()
    {  
        return view('custom.confirm');
    }

  
    public function showRegisterForm()
    {  
        return view('custom.guestregister');
    }

    public function register(Request $request)
    {
        $data=array();
        $data['email']=$request->email; 
        $data['password']=md5($request->password);
        $data['surname']=$request->surname;
        $data['other_names']=$request->other_names;
        $data['phone']=$request->phone;
        $data['dob']=$request->dob; 

        $member_id=DB::table('guests')
                    ->insertGetId($data);
  
        Session::put('surname',$request->surname);
        return Redirect::to('/guest/login')->with('success', 'Member Registration Completed Successfully. Proceed To Login');
    }

    public function showLoginForm()
    {
        return view('custom.guestlogin');
    }

    public function login(Request $request)
    {
        $email=$request->email;
        $password=md5($request->password);
        $result=DB::table('guests')
                ->where('email',$email)
                ->where('password',$password)
                ->first();

        if($result) {
            Session::put('guest_id',$result->guest_id);
            return Redirect::to('/guestreservations');
        }else {
            return Redirect::to('/guest/login')->with('error', 'Login Error. Confirm Your Details And Try Again');
        }
    }
 
    public function logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
}