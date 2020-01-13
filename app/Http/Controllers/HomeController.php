<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function indins()
    {
        return view('instruction');
    }


    public function lib()
    {
        return view('budjet');
    }

    public function person()
    {
        return view('personel');
    }
    public function plan()
    {
        return view('workplan');
    }

    public function upload()
    {
        return view('uploading');
    }


    public function dash()
    {
        return view('dashboard');
    }


}
