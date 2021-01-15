<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slid;
use App\Link;
use App\Service;
use App\Subscriber;

class PagesController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $slids = slid::orderBy('created_at','desc');
        $services = Service::orderBy('created_at','desc');
        $links = Link::orderBy('created_at','desc');
        return view('main',compact('slids','links','services'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'text' => 'required',
            'gender' => 'required',
            
        ]);
        //Create slide
        $sub = new subscriber;
        $sub->SubsName = $request->input("name");
        $sub->SubsEmail = $request->input("email");
        $sub->SubsSubject =$request->input("subject");
        $sub->SubsText = $request->input("text");
        $sub->SubsGender =  $request->input("gender");
        $sub->SubsNewsletter =  $request->input("check");
        $sub->save();

        // return redirect('admin/home')->with('success','Slide Created');

    }
    public function home()
    {
        return view('admin.home');
    }
    public function services()
    {
        return view('admin.services');
    }
    public function sociallinks()
    {
        return view('admin.sociallinks');
    }
    public function subscribers()
    {
        return view('admin.subscribers');
    }
    
}
