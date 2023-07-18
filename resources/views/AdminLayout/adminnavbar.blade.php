<div class="header">
    <div class="row">
      <div class="col-lg-6">
        <span class="logo">Test Your Skill</span>
      </div>
      <span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="" class="log log1">Admin</a>&nbsp;|&nbsp;<a href="/adminsignout" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>
    </div>
  </div>

  <!--navigation menu-->
  <nav class="navbar navbar-default title1">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=""><b>Dashboard</b></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="{{request()->is('admin/dashboard') ? 'active' : ''}}"><a href="/admin/dashboard">Home</a></li>
          <li class="{{request()->is('admin/users') ? 'active' : ''}}"><a href="/admin/users">Users</a></li>
          <li class="{{request()->is('admin/ranking') ? 'active' : ''}}"><a href="/admin/ranking">Ranking</a></li>
          <li class="{{request()->is('admin/feedback') ? 'active' : ''}}  {{request()->is('admin/viewfeedback') ? 'active' : ''}}"><a href="/admin/feedback">Feedback</a></li>
          <li class="dropdown {{request()->is('admin/quizdetails') ? 'active' : ''}}  
             {{request()->is('admin/questionsdetails') ? 'active' : ''}}
             {{request()->is('admin/removequiz') ? 'active' : ''}}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quiz<span class="caret"></span></a>
            <ul class="dropdown-menu" >
              <li><a href="/admin/quizdetails">Add Quiz</a></li>
              <li><a href="/admin/removequiz">Remove Quiz</a></li>
            </ul>
          </li>
          <li class="pull-right"> <a href="/adminsignout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>