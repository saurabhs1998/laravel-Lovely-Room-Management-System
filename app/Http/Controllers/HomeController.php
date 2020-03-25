<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function index1()
    {
        return view('About');
    }

     public function index2()
    {
        return view('dashboard');
    }

      public function index3()
    {
        return view('demoindex');
    }

      public function index4()
    {
        return view('demobook');
    }
}
