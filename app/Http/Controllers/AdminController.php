<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //


    public function dashboard()
    {
        return view('Admin.dashboard');
    }
    
    public function users()
    {
        return view('Admin.users');
    }


public function ranking()
{
    return view('Admin.ranking');
}


public function feedback()
{
    return view('Admin.feedback');
}
public function viewfeedback()
{
    return view('Admin.viewfeedback');
}
public function quizdetails()
{
    return view('Admin.quizdetails');
}
public function questionsdetails()
{
    return view('Admin.questionsdetails');
}
public function removequiz()
{
    return view('Admin.removequiz');
}


}
