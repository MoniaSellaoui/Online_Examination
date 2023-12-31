<div class="row footer">
    <div class="col-md-3 box">
      <a href="" target="_blank">About us</a>
    </div>
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
    </div>
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
    </div>
    <div class="col-md-3 box">
      <a href="" target="_blank">Feedback</a>
    </div>
  </div>

  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
        </div>
      
        <div class="modal-body">
          <p>
            <div class="row">
              <div class="col-md-4">
                <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
              </div>
              <div class="col-md-5">
                <a href="" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
                <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
                <h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
                <h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai</h4>
              </div>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
              <div class="col-md-6">
                <form role="form" method="post" action="">
                  <div class="form-group">
                    <input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
                  </div>
                  <div class="form-group" align="center">
                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                  </div>
                </form>
              </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>