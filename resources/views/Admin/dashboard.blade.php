@extends('AdminLayout.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--home start-->
        <div class="panel">
          <div class="table-responsive">
            <table class="table table-striped title1">
              <tr>
                <td><b>S.N.</b></td>
                <td><b>Topic</b></td>
                <td><b>Total question</b></td>
                <td><b>Marks</b></td>
                <td><b>Time limit</b></td>
                <td></td>
              </tr>
          
           
           <input type="hidden" {{$increment=1}}>
            @foreach ($quizzes as $quiz )
                  <input type="hidden" {{$restart=0}}>
              @foreach ($scores as $score )
                @if (Session::get('admin')->email == $score->email && $quiz->topic == $score->topic)

                 <input type="hidden" {{$restart++}}>
                @endif
             @endforeach

           @if ($restart==1)
             <tr style="color:#99cc32">
                    <td>{{$increment}}</td>
                    <td>{{$quiz->topic}} &nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                    <td>{{$quiz->totalquestions}}</td>
                    <td>{{$quiz->mark * $quiz->totalquestions}}</td>
                    <td>{{$quiz->timelimit}} min</td>
                    <td><b><a href="/admin/respond/{{$quiz->topic}}" class="pull-right btn sub1" style="margin:0px;background:red">
                      <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;
                  <span class="title1"><b>Restart</b></span></a></b></td>
            </tr>
            @else
            <tr>
              <td>{{$increment}}</td>
              <td>{{$quiz->topic}}</td>
              <td>{{$quiz->totalquestions}}</td>
              <td>{{$quiz->mark * $quiz->totalquestions}}</td>
              <td>{{$quiz->timelimit}} min</td>
              <td><b><a href="/admin/respond/{{$quiz->topic}}" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td>
            </tr>
           @endif
          
            <input type="hidden" {{$increment++}}>
            @endforeach
             
            
         
          
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection