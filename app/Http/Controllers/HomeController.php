<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $events = Event::where('datainicial','>=',date('Y-m-d'))
                       ->first();

        return view('welcome', compact('events'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
     return view('home');   
    }
}
