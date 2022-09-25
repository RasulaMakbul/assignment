<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserEndController extends Controller
{
    public function features()
    {
        return view('userEnd.features');
    }

    public function projects()
    {
        return view('userEnd.projects');
    }

    public function pricing()
    {
        return view('userEnd.pricing');
    }

    public function aboutUs()
    {
        return view('userEnd.aboutUs');
    }

    public function contactUs()
    {
        return view('userEnd.contactUs');
    }

    public function login()
    {
        return view('userEnd.login');
    }
    public function registration()
    {
        return view('userEnd.registration');
    }
}
