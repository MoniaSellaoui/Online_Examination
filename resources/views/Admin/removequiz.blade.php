@extends('AdminLayout.master')

@section('title')
REMOVE QUIZ
@endsection

@section('content')
<div class="container"><!--container start-->
    <div class="row">
      <div class="col-md-12">
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
              <tr>
                <td>1</td>
                <td>Laravel</td>
                <td>1</td>
                <td>1</td>
                <td>1&nbsp;min</td>
                <td><b><a href="" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td>
              </tr>
            
            </table>
          </div>
        </div>
      </div><!--container closed-->
    </div>
  </div>
@endsection