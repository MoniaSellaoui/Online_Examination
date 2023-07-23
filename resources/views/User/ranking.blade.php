@extends('UserLayout.master')
@section('title')
   Ranking
@endsection
@section('content')
   
<div class="container"><!--container start-->
    <div class="row">
      <div class="col-md-12">
        <div class="panel title">
          <div class="table-responsive">
            <table class="table table-striped title1" >
              <tr style="color:red">
                <td><b>Rank</b></td>
                <td><b>Name</b></td>
                <td><b>Gender</b></td>
                <td><b>College</b></td>
                <td><b>Score</b></td>
              </tr><br />
              <input type="hidden" {{$increment=1}}>
              @foreach ($developers as $developer )
              <tr>
                <td>{{$increment}}</td>
                <td>{{$developer->name}}</td>
                <td>{{$developer->gender}}</td>
                <td>{{$developer->college}}</td>
                <td>{{ $developer->score }}</td>
            
              </tr>
              <input type="hidden" {{$increment++}}>
              @endforeach
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection