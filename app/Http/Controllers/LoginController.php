<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Developer;

class LoginController extends Controller
{
    //



public function login()
{
    return view('login.login');
}
public function adminacces(Request $request)
{
    $admin= Admin::where('email',$request->input('email'))->first();
if($admin){
    if($admin->password==$request->input('password'))
    {
        Session::put('admin',$admin);
        return redirect('/admin/dashboard');
    }else{
        return back();
    }
}else{
    return back();
}



}
public function signout()
{
    Session::forget('admin');
    return redirect('/');
}


public function signup(Request $request)
{
    $developer= new Developer();
    $developer->name=$request->input('name');
    $developer->gender=$request->input('gender');
    $developer->college=$request->input('college');
    $developer->email=$request->input('email');
    $developer->phone=$request->input('phone');
    $developer->password=$request->input('password');
    $developer->score=0;
    $developer->save();
    Session::put('developer',$developer);
    return redirect('/user/home');
}
public function usersignout()
{
    Session::forget('developer');
    return redirect('/');
}
public function useracces(Request $request)
{
    $Developer= Developer::where('email',$request->input('email'))->first();
if($Developer){
    if($Developer->password==$request->input('password'))
    {
        Session::put('Developer',$Developer);
        return redirect('/user/home');
    }else{
        return back();
    }
}else{
    return back();
}


}

}
