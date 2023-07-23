@extends('UserLayout.master')
@section('title')
   History
@endsection
@section('content')

<div class="container"><!--container start-->
    <div class="row">
      <div class="col-md-12">
        <div class="panel title">
          <table class="table table-striped title1" >
            <tr style="color:red">
              <td><b>S.N.</b></td>
              <td><b>Quiz</b></td>
              <td><b>Question Solved</b></td>
              <td><b>Right</b></td>
              <td><b>Wrong<b></td>
              <td><b>Score</b></td>
            </tr>  
<input type="hidden" {{$increment=1}}>
            @foreach ($scores as $score )
            <tr>
              <td>{{$increment}}</td>
              <td>{{$score->topic}}</td>
              <td>{{$score->solved}}</td>
              <td>{{(($score->score)/$score->mark)}}</td>
              <td>{{ $score->numquestion - (($score->score)/$score->mark)  }}</td>
              <td>{{$score->score}}</td>
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