<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {   
        $subscribers = Subscriber::orderBy('created_at','desc')->paginate(10);
        return view('admin.subscribers')->with ('subscribers', $subscribers);
    }
    
}
