@extends('AdminLayout.master')

@section('title')
Result
@endsection

@section('content')

<div class="container"><!--container start-->
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <center><h1 class="title" style="color:#660033">Result</h1><center><br />
          <table class="table table-striped title1" style="font-size:20px;font-weight:1000;">
            <tr style="color:#66CCFF">
              <td>Total Questions</td>
              <td>{{$score->numquestion}}</td>
            </tr>
            <tr style="color:#99cc32">
              <td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
              <td>{{($score->score)/$score->mark}}</td>
            </tr> 
            <tr style="color:red">
              <td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td>
              <td>{{($score->numquestion) - (($score->score)/$score->mark)}}</td>
            </tr>
            <tr style="color:#66CCFF">
              <td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td>
              <td>{{$score->score}}</td>
            </tr>
            <tr style="color:#990000">
              <td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td>
              <td>-1</td>
            </tr>
          </table>
        </div><!--quiz end-->
      </div>
    </div>
  </div>
</div>

@endsection