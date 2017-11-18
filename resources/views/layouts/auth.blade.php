<!DOCTYPE html>
<html lang="en">
<head>

<title>Login: Welcome to Web88 Administration Panel</title>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="images/icons/favicon.ico" rel="shortcut icon">
    <!--Loading bootstrap css-->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,400italic,700italic' rel='stylesheet' type='text/css'>
    
    
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING SCRIPTS FOR PAGE-->
    <!--LOADING SCRIPTS FOR PAGE-->
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bootstrap-datepicker/css/datepicker.css">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bootstrap-switch/css/bootstrap-switch.css">
    
    <!--Loading style vendors-->
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/animate.css/animate.css">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/jquery-pace/pace.css">
    <!--Loading style-->
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/style.css">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/style-mango.css" id="theme-style">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/vendors.css">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/themes/grey.css" id="color-style">
<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/style-responsive.css">

    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body id="signin-page" class="animated bounceInDown">

	@yield('content')

<script src="{{ env('APP_URL') }}/js/jquery-1.9.1.js"></script>
<script src="{{ env('APP_URL') }}/js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ env('APP_URL') }}/js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="{{ env('APP_URL') }}/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-hover-dropdown.js"></script>
<script src="{{ env('APP_URL') }}/js/html5shiv.js"></script>
<script src="{{ env('APP_URL') }}/js/respond.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-cookie/jquery.cookie.js"></script>
</body>
</html>