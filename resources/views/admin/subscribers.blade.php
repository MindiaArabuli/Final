@extends('admin.layouts.app')

@section('content')
  <div class="br-mainpanel">
    <h1  class="text-center">Subscribers</h1>

    <table class="table table-hover">
        <thead>
          <td><b>ID</b></td>
          <td><b>Name</b> </td>
          <td><b>Email</b> </td>
          <td><b>Created</b> </td>
        </thead>
      @foreach($subscribers as $subscriber)
          <tbody>
            <td>{{$subscriber->id}}</td>
            <td>{{$subscriber->SubsName}}</td>
            <td>{{$subscriber->SubsEmail}}</td>
            <td>{{$subscriber->created_at}}</td>
          </tbody>
      @endforeach
    </table>
    {{$subscribers->links()}}
  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection