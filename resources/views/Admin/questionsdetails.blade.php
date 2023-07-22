@extends('AdminLayout.master')

@section('title')
QUESTIONS DETAILS
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form class="form-horizontal title1" name="form" action="/admin/savequestion"  method="POST">
            {{ csrf_field() }}
                <b>Question number&nbsp;{{$quiz->num+1}}&nbsp;:</b><br/>
                <div class="form-group">
               
                  <label class="col-md-12 control-label" for="qns1 "></label>  
                  <div class="col-md-12">
                  <textarea rows="3" cols="5" name="question" class="form-control" placeholder="Write question number 1 here..."></textarea>  
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="11"></label>  
                  <div class="col-md-12">
                  <input id="11" name="optiona" placeholder="Enter option a" class="form-control input-md" type="text">
                    
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="12"></label>  
                  <div class="col-md-12">
                  <input id="12" name="optionb" placeholder="Enter option b" class="form-control input-md" type="text">
                    
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="13"></label>  
                  <div class="col-md-12">
                  <input id="13" name="optionc" placeholder="Enter option c" class="form-control input-md" type="text">
                    
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="14"></label>  
                  <div class="col-md-12">
                  <input id="14" name="optiond" placeholder="Enter option d" class="form-control input-md" type="text">
                    
                  </div>
                </div>
                <br />
                <b>Correct answer</b>:<br />
                <select id="ans1" name="correct" placeholder="Choose correct answer " class="form-control input-md" >
                  <option value="">Select answer for question {{$quiz->num+1}}</option>
                  <option value="a">option a</option>
                  <option value="b">option b</option>
                  <option value="c">option c</option>
                  <option value="d">option d</option> 
                </select><br /><br />
                <div class="form-group">
                  <label class="col-md-12 control-label" for=""></label>
                  <div class="col-md-12"> 
                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                  </div>
                </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection