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
            <tr>
              <td>1</td>
              <td>Linux:startup</td>
              <td>5</td><td>1</td>
              <td>4</td><td>-2</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Laravel</td>
              <td>1</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ddss</td>
              <td>1</td>
              <td>1</td>
              <td>0</td>
              <td>1</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection