<!DOCTYPE html>
<html lang="en">
<head>

    <title>Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/icons/favicon.ico" rel="shortcut icon">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300" rel="stylesheet" id="googlefont">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bootstrap/css/bootstrap.min.css">

    <!--LOADING SCRIPTS FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bootstrap-datepicker/css/datepicker.css">
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bootstrap-switch/css/bootstrap-switch.css">

    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/vendors/jquery-pace/pace.css">

    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/style.css">
    <!--<link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/style.css">-->
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/style-mango.css" id="theme-style">
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/vendors.css">
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/themes/grey.css" id="color-style">
    <link type="text/css" rel="stylesheet" href="{{ env('APP_URL') }}/css/style-responsive.css">


</head>
<body>
<div>
    <!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
    <div id="wrapper"><!--BEGIN TOPBAR-->
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="http://www.webqom.com/web88.html" target="_blank" class="navbar-brand"><img src="{{ env('APP_URL') }}/images/logo_web88.png"></a>          </div>

            <div class="topbar-main">
                <a id="logo" href="#" class="navbar-brand"><img src="{{ env('APP_URL') }}/images/logo.jpg"></a>
                <a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>

                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control"/></div>
                </form>
                <ul class="nav navbar-top-links navbar-right">
                    <!--<li><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-shopping-cart fa-fw"></i><span class="badge badge-blue">3</span></a></li> -->
                    <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img src="{{ asset('images/profile/'.Auth::user()->image) }}" alt="" class="img-responsive img-circle"/>&nbsp;
                            Support Webqom
                            &nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                            <li>
                                <div class="navbar-content">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="{{ asset('images/profile/'.Auth::user()->image) }}" alt="" class="img-responsive img-circle"/>

                                            <p class="text-center mtm">
                                                <a href="#" data-target="#modal-change-avatar" data-toggle="modal" class="change-avatar">
                                                    <small>Change Avatar</small>                                                </a></p>
                                        </div>
                                        <div class="col-md-7 col-xs-5"><span>Support Webqom</span>

                                            <p class="text-muted small">support@webqom.com</p>

                                            <div class="divider"></div>
                                            <!--<a href="#" class="btn btn-primary btn-sm">View Profile</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-footer">
                                    <div class="navbar-footer-content">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6"><a href="#" class="btn btn-default btn-sm" data-target="#modal-change-password" data-toggle="modal">Change Password</a></div>
                                            <div class="col-md-6 col-xs-6"><a href="{{ env('APP_URL') }}/auth/logout" class="btn btn-default btn-sm pull-right">Sign Out</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Modal Change Avatar start-->
        <div id="modal-change-avatar" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label2" class="modal-title">Change Avatar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form">
                            <form id="avatar-form" class="form-horizontal" role="form" action="{{ route('admin.avatar') }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group" >
                                    <label class="col-md-4 control-label">Upload Avatar Image </label>
                                    <div class="col-md-8">
                                        <div class="text-15px margin-top-10px">
                                            <img src="{{ asset('images/profile/'.Auth::user()->image) }}" alt="Avatar" class="img-responsive"><br/>
                                            <input name="avatar_image" id="exampleInputFile1" type="file"/>
                                            <br/>
                                            <span class="help-block">(Image dimension: 100 x 100 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="col-md-offset-4 col-md-8"> <a href="#" onclick="$('#avatar-form').submit()" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL Change Avatar-->

        <!--Modal Change Password start-->
        <div id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Change Password</h4></div>
                    <div class="modal-body">
                        <div class="form">
                            <form class="form-horizontal">

                                <div class="form-group">
                                    <label for="password" class="control-label col-md-4">New Password</label>

                                    <div class="col-md-8">
                                        <div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="New Password" class="form-control"/><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="control-label col-md-4">Confirm New Password</label>

                                    <div class="col-md-8">
                                        <div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="Confirm New Password" class="form-control"/><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-md-offset-4 col-md-8">
                                        <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp;
                                        <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>                                            </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL CHANGE PASSWORD-->
        <!--END TOPBAR-->

        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="clock"><strong id="get-date"></strong>

                        <div class="digital-clock">
                            <div id="getHours" class="get-time"></div>
                            <span>:</span>

                            <div id="getMinutes" class="get-time"></div>
                            <span>:</span>

                            <div id="getSeconds" class="get-time"></div>
                        </div>
                    </li>
                    <li class="active"><a href="{{ env('APP_URL') }}/admin/dashboard"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Dashboard</span></a></li>

                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">



            @yield('content')


            <!--BEGIN FOOTER-->
            <div class="page-footer">
                <div class="copyright"><span class="text-15px">2017 &copy; <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                    <div class="pull-right"><img src="{{ env('APP_URL') }}/images/logo_webqom.png" alt="Webqom Technologies"></div>
                </div>
            </div>
            <!--END FOOTER--></div>
        <!--END PAGE WRAPPER--></div>
</div>
<script src="{{ env('APP_URL') }}/js/jquery-1.9.1.js"></script>
<script src="{{ env('APP_URL') }}/js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ env('APP_URL') }}/js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="{{ env('APP_URL') }}/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="{{ env('APP_URL') }}/js/html5shiv.js"></script>
<script src="{{ env('APP_URL') }}/js/respond.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="{{ env('APP_URL') }}/vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="{{ env('APP_URL') }}/js/jquery.menu.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-pace/pace.min.js"></script>

<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{ env('APP_URL') }}/vendors/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-jvectormap/gdp-data.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-knob/jquery.knob.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-animateNumber/jquery.animateNumber.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.categories.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.pie.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.tooltip.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.fillbetween.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.stack.js"></script>
<script src="{{ env('APP_URL') }}/vendors/flot-chart/jquery.flot.spline.js"></script>
<script src="{{ env('APP_URL') }}/vendors/skycons/skycons.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-news-ticker/jquery.news-ticker.js"></script>
<script src="{{ env('APP_URL') }}/js/index.js"></script>


<script>

    $(function () {


        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')


        $('#revenue-number').animateNumber({
            number: {{ $count_emails_all }},
            numberStep: comma_separator_number_step
        }, 5000);
        $('#new-sales-number').animateNumber({
            number: {{ $count_emails_today }},
            numberStep: comma_separator_number_step
        }, 5000);


        var d5_1 = [
            @foreach ($emails as $value)
                ["{{ $value ['date'] }}", {{ $value ['value'] }}],
            @endforeach
        ];


        $.plot("#counter-chart", [
            {
                data: d5_1,
                label: "Emails",
                color: "#df4782"
            }
        ], {
            series: {
                lines: {
                    show: !0,
                    fill: .8
                },
                points: {
                    show: !0,
                    radius: 4
                }

            },
            grid: {
                borderColor: "#fafafa",
                borderWidth: 1,
                hoverable: !0
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%x : %y",
                defaultTheme: false
            },
            xaxis: {
                tickColor: "#fafafa",
                mode: "categories"
            },
            yaxis: {
                tickColor: "#fafafa"
            },
            shadowSize: 0
        });


        $('#earning-number').animateNumber({
            number: {{ $count_sms_all }},
            numberStep: comma_separator_number_step
        }, 5000);

        $('#visits-number').animateNumber({
            number: {{ $count_sms_today }},
            numberStep: comma_separator_number_step
        }, 5000);


        var d9_1 = [
            @foreach ($sms as $value)
                ["{{ $value ['date'] }}", {{ $value ['value'] }}],
            @endforeach
        ];


        $.plot("#area-chart", [
            {
                data: d9_1,
                label: "SMS",
                color: "#ffce54"
            }
        ], {
            series: {
                lines: {
                    show: !0,
                    fill: .8
                },
                points: {
                    show: !0,
                    radius: 4
                }
            },
            grid: {
                borderColor: "#fafafa",
                borderWidth: 1,
                hoverable: !0
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%x : %y",
                defaultTheme: false
            },
            xaxis: {
                tickColor: "#fafafa",
                mode: "categories"
            },
            yaxis: {
                tickColor: "#fafafa"
            },
            shadowSize: 0
        });


    });

</script>



<script src="{{ env('APP_URL') }}/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ env('APP_URL') }}/vendors/moment/moment.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="{{ env('APP_URL') }}/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="{{ env('APP_URL') }}/vendors/jquery-maskedinput/jquery-maskedinput.js"></script>
<script src="{{ env('APP_URL') }}/js/form-components.js"></script>


<!--CORE JAVASCRIPT-->
<script src="{{ env('APP_URL') }}/js/main.js"></script>
<script src="{{ env('APP_URL') }}/js/holder.js"></script>
</body>
</html>