@extends('admin.layouts.app')

@section('content')
  <div class="br-mainpanel">
    <h1  class="text-center">Sliders</h1>
    <a class="btn btn-oblong btn-outline-success" href="/admin/home/create">Create Slide</a>

    @if(count($slids)>0)
    <table class="table table-hover">
        <thead>
          <td><b>ID</b></td>
          <td><b>Img</b> </td>
          <td><b>ImgDate</b> </td>
          <td><b>ImgTitle</b> </td>
          <td><b>Edit</b></td>
          <td><b>Delete</b></td>
        </thead>
      @foreach($slids as $slid)
          <tbody>
            <td>{{$slid->id}}</td>
            <td style="width:100px"><img style="width:100%" src="/storage/images/slider/{{$slid->Img}}"></td>
            <td>{{$slid->ImgDate}}</td>
            <td>{{$slid->ImgTitle}}</td>
            <td><a href="/admin/home/{{$slid->id}}/edit" class="btn btn-oblong btn-outline-primary">Edit</a></td>
            <td>
              {!!Form::open(['action'=>['SlidsController@destroy',$slid->id],'method'=>'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-oblong btn-outline-danger'])}}
              {!!Form::close() !!}
            
            </td>
          </tbody>
      @endforeach
    </table>
    {{$slids->links()}}
    @else
      <p> No image found </p>
    @endif
  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection