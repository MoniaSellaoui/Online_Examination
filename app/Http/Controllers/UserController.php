<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function home()
    {
        return view('User.home');
    }
    public function history()
    {
        return view('User.history');
    }
    public function ranking()
    {
        return view('User.ranking');
    }
    public function exam()
    {
        return view('User.exam');
    }

}
