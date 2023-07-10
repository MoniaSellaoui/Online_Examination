

@extends('AdminLayout.master')

@section('title')
  Users
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
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
              <tr>
                <td>1</td>
                <td>Héritier</td>
                <td>M</td>
                <td>ISPT_KIN</td>
                <td>heir@gmail.com</td>
                <td>824754958</td>
                <td><a title="Delete User" href=""><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Lyndon</td>
                <td>F</td>
                <td>Ser Bermz University</td>
                <td>serbermz2020@gmail.com</td>
                <td>9079373999</td>
                <td><a title="Delete User" href=""><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection