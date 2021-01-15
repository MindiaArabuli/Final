@extends('admin.layouts.app')

    @section('content')
        <div class="br-mainpanel">
            <h1  class="text-center">Edit Slider</h1>
            {!! Form::open(['action' =>['SlidsController@update', $slid->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title',$slid->ImgTitle,['class'=> 'form-control','placeholder'=>'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('date','Date')}}
                    {{Form::text('date',$slid->ImgDate,['class'=> 'form-control','placeholder'=>'Date'])}}
                </div>
                <div class="form-group">
                    {{Form::file('ImgName')}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-primery'])}}
            {!! Form::close() !!}
        </div>
    @endsection
