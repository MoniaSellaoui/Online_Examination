<!DOCTYPE html>
<html>
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Worlds || TEST YOUR SKILL </title>
    <link  rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}"/>
    <link  rel="stylesheet" href="{{asset('style/css/bootstrap-theme.min.css')}}"/>    
    <link rel="stylesheet" href="{{asset('style/css/main.css')}}">
    <link  rel="stylesheet" href="{{asset('style/css/font.css')}}">
    <script src="{{asset('style/js/jquery.js')}}" type="text/javascript"></script>

    <script src="{{asset('style/js/bootstrap.min.js')}}"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <script>
      function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
      var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
    </script>
</head>


  <body>

    @include('feedbackLayout.feedbacknav')
    <!--start content-->
    @yield('content')
    <!--end content-->  
    @include('feedbackLayout.feedbackfooter')
</body>
</html>