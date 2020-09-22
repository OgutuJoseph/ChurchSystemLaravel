<?php

namespace App\Http\Controllers;


use App\ChurchGroup;
use DB; 
use Session; 
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 

class CustomAuthController extends Controller
{

    public function confirm()
    {  
        return view('custom.confirm');
    }

    public function showRegisterForm()
    { 
        $church_groups = ChurchGroup::all();
        return view('custom.register',compact('church_groups'));
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
        $data['group_id']=$request->group_id;

        $member_id=DB::table('members')
                    ->insertGetId($data);

        Session::put('member_id',$member_id);
        Session::put('surname',$request->surname);
        return Redirect::to('/member/login')->with('success', 'Member Registration Completed Successfully. Proceed To Login');
    }

    public function showLoginForm()
    {
        return view('custom.login');
    }

    public function login(Request $request)
    {
        $email=$request->email;
        $password=md5($request->password);
        $result=DB::table('members')
                ->where('email',$email)
                ->where('password',$password)
                ->first();

        if($result) {
            Session::put('member_id',$result->member_id);
            return Redirect::to('/reservations');
        }else {
            return Redirect::to('/member/login')->with('error', 'Login Error. Confirm Your Details And Try Again');
        }
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
 
}