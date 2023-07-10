@extends('AdminLayout.master')

@section('title')
  Users
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
                <td>1</td>
                <td><a title="Click to open feedback" href=""></a></td>
                <td></td>
                <td>28-03-2022</td>
                <td>10:05:18am</td>
                <td></td>
                <td><a title="Open Feedback" href=""><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>
                <td><a title="Delete Feedback" href=""><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
              </tr>
              <tr>
                <td>2</td>
                <td><a title="Click to open feedback" href=""></a></td>
                <td></td>
                <td>10-05-2020</td>
                <td>10:43:31am</td>
                <td>Grade 12 - Class 2</td>
                <td><a title="Open Feedback" href=""><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>
                <td><a title="Delete Feedback" href=""><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
              </tr>
            </table>
          </div>
        </div>

        <!--feedback reading portion start-->
        <br />
        <div class="panel">
          <a title="Back to Archive" href=""><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a>
          <h2 style="text-align:center; margin-top:-15px;font-family: sans-serif;"><b></b></h2>
          <div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;10-05-2020</span>
          <span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;10:43:31am</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;Grade 12 - Class 2</span><br />
          </div>
        </div><!--Feedback reading portion closed-->
      </div>
    </div>
  </div>
@endsection