
@extends('feedbackLayout.master')

@section('title')
Contact Us
    
@endsection
@section('content')

    <!-- start container -->
    <div>  
      <div class="bg1">
        <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-6 panel" style="background-image:url(style/image/bg1.jpg); min-height:430px;">
              <h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
              <div style="font-size:14px">
              
              You can send us your feedback through e-mail on the following e-mail id:<br />
              <div class="row">
                <div class="col-md-1"></div>
                  <div class="col-md-10">
                  <a href="mailto:serbermz2020@gmail.com" style="color:#000000">serbermz2020@gmail</a><br /><br />
                  </div>
                <div class="col-md-1"></div>
              </div>

              <p>Or you can directly submit your feedback by filling the enteries below:-</p>

                  <form role="form"  method="post" action="feed.php?q=feedback.php">
                    
                    <div class="row">
                      <div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
                      <div class="col-md-9">
                        <!-- Text input-->
                        <div class="form-group">
                          <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
                          <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

                        </div>
                      </div>
                    </div><!--End of row-->

                    <div class="row">
                      <div class="col-md-3"><b>E-Mail address:</b></div>
                      <div class="col-md-9">
                      <!-- Text input-->
                        <div class="form-group">
                          <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
                        </div>
                      </div>
                    </div><!--End of row-->

                    <div class="form-group"> 
                      <textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
                    </div>

                    <div class="form-group" align="center">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                    </div>
                  </form>
              </div><!--col-md-6 end-->
              <div class="col-md-3"></div>
            </div>
        </div>
      </div>
    </div>
    <!--container end-->

@endsection


