   <!--header start-->
   <div class="row header">
    <div class="col-lg-6">
      <span class="logo">Test Your Skill</span>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
      <a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Signin</a>&nbsp;
      <a href="" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
    </div>
  </div>

  <!--sign in modal start-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content title1">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="login.php?q=index.php" method="POST">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email"></label>  
              <div class="col-md-6">
                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="password"></label>
              <div class="col-md-6">
                <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
              </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Log in</button>
            </fieldset>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--sign in modal closed-->

  <!--header end-->