<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home', [
            'pageTitle'  =>  "Home Page"
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'pageTitle'  =>  "Diyap Can"
        ]);
    }
    
    public function listings()
    {
        return view('listings', [
            'pageTitle'  =>  "Diyap Can"
        ]);
    }
    public function signup()
    {
        return view('signup', [
            'pageTitle'  =>  "Diyap Can"
        ]);
    }
    public function property()
    {
        return view('property', [
            'pageTitle'  =>  "Diyap Can"
        ]);
    }
    public function signin()
    {
        return view('signin', [
            'pageTitle'  =>  "Diyap Can"
        ]);
    }
}
