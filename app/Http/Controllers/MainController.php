<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        print_r("nlkn");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print_r("nlkn");
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'text' => 'required',
            'gender' => 'required',
            
        ]);
        $subscribers = new Subscriber;
        $subscribers->SubsName = $request->input("name");
        $subscribers->SubsEmail = $request->input("email");
        $subscribers->SubsSubject =$request->input("subject");
        $subscribers->SubsText = $request->input("text");
        $subscribers->SubsGender =  $request->input("gender");
        $subscribers->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
