<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Worlds || @yield('title') </title>
    <link  rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}"/>
    <link  rel="stylesheet" href="{{asset('style/css/bootstrap-theme.min.css')}}"/>    
    <link rel="stylesheet" href="{{asset('style/css/main.css')}}">
    <link  rel="stylesheet" href="{{asset('style/css/font.css')}}">
    <script src="{{asset('style/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/js/bootstrap.min.js')}}"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

  </head>

  <body>
@include('UserLayout.usernavbar')
      <!--end navigation menu-->


    @yield('content')

    <!--Footer start-->
  @include('UserLayout.userfooter')
    <!--footer end-->
  </body>
</html>
