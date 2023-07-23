@extends('AdminLayout.master')

@section('title')
  Feedback
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
                <td><b>Subject</b></td>
                <td><b>Email</b></td>
                <td><b>Date</b></td>
                <td><b>Time</b></td>
                <td><b>By</b></td>
                <td></td>
                <td></td>
              </tr>
             
              <tr>
                <td>2</td>
                <td><a title="Click to open feedback" href=""></a></td>
                <td></td>
                <td>10-05-2020</td>
                <td>10:43:31am</td>
                <td>Grade 12 - Class 2</td>
                <td><a title="Open Feedback" href="/admin/viewfeedback"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>
                <td><a title="Delete Feedback" href=""><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection