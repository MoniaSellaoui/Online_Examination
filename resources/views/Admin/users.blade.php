

@extends('AdminLayout.master')

@section('title')
  Users
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        @if (Session::has('status'))
        <div class="alert alert-success">
          {{Session::get('status')}}
        </div>
            
        @endif
        <div class="panel">
          <div class="table-responsive">
            <table class="table table-striped title1">
              <tr>
                <td><b>S.N.</b></td>
                <td><b>Name</b></td>
                <td><b>Gender</b></td>
                <td><b>College</b></td>
                <td><b>Email</b></td>
                <td><b>Mobile</b></td>
                <td></td>
              </tr>
              <input type="hidden" {{$increment=1}}>
              @foreach ($developers as $developer )
              <tr>
                <td>{{$increment}}</td>
                <td>{{$developer->name}}</td>
                <td>{{$developer->gender}}</td>
                <td>{{$developer->college}}</td>
                <td>{{$developer->email}}</td>
                <td>{{$developer->phone}}</td>
                <td><a title="Delete User" href="/admin/deletedeveloper/{{$developer->email}}"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
              </tr>
              <input type="hidden" {{$increment++}}>
              @endforeach
     
           
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection