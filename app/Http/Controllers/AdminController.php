<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slid;
use App\Link;
use App\Service;
use App\Subscriber;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slids = slid::All();
        $subscribers = Subscriber::All();
        $slid=count($slids);
        $subscriber=count($subscribers);
        return view('admin.dashboard',compact('slid','subscriber'));
    }
}
