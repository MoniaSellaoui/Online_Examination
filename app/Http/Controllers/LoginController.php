<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

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

}
