<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ URL::asset('assets/ico/favicon.png') }}">

    <title>Freedom!</title>

    <link href="{{ URL::asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/master.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>    

    @yield('content')
    
  </body>
</html> 
