<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\slid;

class SlidsController extends Controller
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
        $slids = slid::orderBy('created_at','desc')->paginate(10);
        return view('admin.home')->with ('slids', $slids);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createslide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'date' => 'required',
            'ImgName' => 'image|required|max:1999'
        ]);
        //Handle File Upload
        if($request->hasFile('ImgName')){
            //Get filename with the extansion
            $filenameWithExt= $request->file('ImgName')->getClientOriginalName();
            //Get Just filename
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just ext
            $extension = $request->file('ImgName')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('ImgName')->storeAs('public/images/slider',$fileNameToStore);
        }
        //Create slide
        $slid = new slid;
        $slid->ImgTitle = $request->input("title");
        $slid->ImgDate = $request->input("date");
        $slid->ImgName = $fileNameToStore;
        $slid->save();

        return redirect('admin/home')->with('success','Slide Created');

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
        $slid = slid::find($id);
        return view('admin.editSlide')->with('slid',$slid);
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
        $this->validate($request,[
            'title' => 'required',
            'date' => 'required'
        ]);

        if($request->hasFile('ImgName')){
            //Get filename with the extansion
            $filenameWithExt= $request->file('ImgName')->getClientOriginalName();
            //Get Just filename
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just ext
            $extension = $request->file('ImgName')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('ImgName')->storeAs('public/images/slider',$fileNameToStore);
        }
        //Create slide
        $slid = slid::find($id);
        $slid->ImgTitle = $request->input("title");
        $slid->ImgDate = $request->input("date");
        if($request->hasFile('ImgName')){
            $slid->Img = $fileNameToStore;
        }
        $slid->save();

        return redirect('admin/home')->with('success','Slide Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slid = slid::find($id);
        Storage::delete('public/images/slider/'.$slid->ImgName);
        $slid->delete();
        return redirect('/admin/home')->with('success','slide Removed');
    }
}
