<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>H.I.S - Hotel Management Information System.</title>
    <meta name="description" content="H.I.S - Hotel Management Information System.">
    <meta name="author" content="Leonard C. Mpande">
    <meta name="keyword" content="H.I.S - Hotel Management Information System.">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    {{HTML::style("system/assets/css/bootstrap.min.css")}}
    {{HTML::style("system/assets/css/style.min.css")}}
    {{HTML::style("system/assets/css/retina.min.css")}}
    {{HTML::style("system/assets/css/font-awesome.min.css")}}
    {{HTML::style("font-awesome/css/font-awesome.css")}}
    {{HTML::style("system/assets/jquery-UI/jquery-ui.css")}}
    {{HTML::style("system/assets/jquery-UI/jquery-ui.structure.css")}}
    {{HTML::style("system/assets/jquery-UI/jquery-ui.theme.css")}}
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{HTML::script("http://html5shim.googlecode.com/svn/trunk/html5.js")}}
    {{HTML::script("system/assets/js/respond.min.js")}}
    {{HTML::style("system/assets/css/ie6-8.css")}}

    <![endif]-->

    <!-- start: Favicon and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('system/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('system/assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('system/assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ URL::asset('system/assets/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="system/assets/ico/favicon.png">
    <!-- end: Favicon and Touch Icons -->

</head>

<body>

<!-- start: JavaScript-->
<!--[if !IE]>-->
{{HTML::script("system/assets/js/jquery-2.1.0.min.js")}}


<!--[if IE]>
<!--{{HTML::script("system/assets/js/jquery-1.11.0.min.js")}}-->
{{HTML::script("system/assets/js/jquery-UI/jquery-ui.js")}}
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='system/assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>

<script type="text/javascript">
    window.jQuery || document.write("<script src='system/assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
</script>

<![endif]-->
{{HTML::script("system/assets/js/jquery-migrate-1.2.1.min.js")}}
{{HTML::script("system/assets/js/bootstrap.min.js")}}

<!--<![endif]-->


<!-- page scripts -->
{{HTML::script("system/assets/js/jquery-ui-1.10.3.custom.min.js")}}
{{HTML::script("system/assets/js/jquery.ui.touch-punch.min.js")}}
{{HTML::script("system/assets/js/jquery.sparkline.min.js")}}
{{HTML::script("system/assets/js/fullcalendar.min.js")}}
{{HTML::script("system/assets/js/excanvas.min.js")}}
{{--{{HTML::script("system/assets/js/jquery.flot.min.js")}}--}}
{{--{{HTML::script("system/assets/js/jquery.flot.pie.min.js")}}--}}
{{--{{HTML::script("system/assets/js/jquery.flot.stack.min.js")}}--}}
{{--{{HTML::script("system/assets/js/jquery.flot.resize.min.js")}}--}}
{{--{{HTML::script("system/assets/js/jquery.flot.time.min.js")}}--}}
{{HTML::script("system/assets/js/jquery.autosize.min.js")}}
{{HTML::script("system/assets/js/jquery.placeholder.min.js")}}

<!-- theme scripts -->
{{HTML::script("system/assets/js/custom.min.js")}}
{{HTML::script("system/assets/js/core.min.js")}}
<!-- inline scripts related to this page -->
{{--{{HTML::script("system/assets/js/pages/index.js")}}--}}

{{HTML::script("system/assets/js/jquery.dataTables.min.js")}}
{{HTML::script("system/assets/js/dataTables.bootstrap.min.js")}}
{{HTML::script("system/assets/js/jquery-picklist.js")}}
<!--{{HTML::script("system/assets/js/jquery.ui.widget.js")}}-->
{{--{{HTML::script("system/assets/js/highcharts-all.js")}}--}}
{{--{{HTML::script("system/assets/js/highcharts.js")}}--}}
<script src="http://code.highcharts.com/highcharts.js"></script>
{{HTML::script("system/assets/js/sand-signika.js")}}

<!-- end: JavaScript-->


<!-- start: Header -->
<header class="navbar">
<div class="container">
<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>
<a class="navbar-brand col-lg-2 col-sm-1 col-xs-12" href="{{ url('system/dashboard') }}"><span>H.I.S</span></a>
<!-- start: Header Menu -->
<div class="nav-no-collapse header-nav">
<ul class="nav navbar-nav pull-right">
<li class="dropdown hidden-xs">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
        <i class="fa fa-warning"></i>
    </a>
    <ul class="dropdown-menu notifications">
        <li class="dropdown-menu-title">
            <span>You have 11 notifications</span>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon blue"><i class="fa fa-user"></i></span>
                <span class="message">New user registration</span>
                <span class="time">1 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">7 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">8 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">16 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon blue"><i class="fa fa-user"></i></span>
                <span class="message">New user registration</span>
                <span class="time">36 min</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon yellow"><i class="fa fa-shopping-cart"></i></span>
                <span class="message">2 items sold</span>
                <span class="time">1 hour</span>
            </a>
        </li>
        <li class="warning">
            <a href="index.html#">
                <span class="icon red"><i class="fa fa-user"></i></span>
                <span class="message">User deleted account</span>
                <span class="time">2 hour</span>
            </a>
        </li>
        <li class="warning">
            <a href="index.html#">
                <span class="icon red"><i class="fa fa-shopping-cart"></i></span>
                <span class="message">Transaction was canceled</span>
                <span class="time">6 hour</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon green"><i class="fa fa-comment"></i></span>
                <span class="message">New comment</span>
                <span class="time">yesterday</span>
            </a>
        </li>
        <li>
            <a href="index.html#">
                <span class="icon blue"><i class="fa fa-user"></i></span>
                <span class="message">New user registration</span>
                <span class="time">yesterday</span>
            </a>
        </li>
        <li class="dropdown-menu-sub-footer">
            <a>View all notifications</a>
        </li>
    </ul>
</li>
<!-- start: Notifications Dropdown -->
<li class="dropdown hidden-xs">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
        <i class="fa fa-tasks"></i>
    </a>
    <ul class="dropdown-menu tasks">
        <li>
            <span class="dropdown-menu-title">You have 17 tasks in progress</span>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">iOS Development</span>
										<span class="percent"></span>
									</span>
                <div class="taskProgress progressSlim progressBlue">80</div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">Android Development</span>
										<span class="percent"></span>
									</span>
                <div class="taskProgress progressSlim progressYellow">47</div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">Django Project For Google</span>
										<span class="percent"></span>
									</span>
                <div class="taskProgress progressSlim progressRed">32</div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">SEO for new sites</span>
										<span class="percent"></span>
									</span>
                <div class="taskProgress progressSlim progressGreen">63</div>
            </a>
        </li>
        <li>
            <a href="index.html#">
									<span class="header">
										<span class="title">New blog posts</span>
										<span class="percent"></span>
									</span>
                <div class="taskProgress progressSlim progressPink">80</div>
            </a>
        </li>
        <li>
            <a class="dropdown-menu-sub-footer">View all tasks</a>
        </li>
    </ul>
</li>
<!-- end: Notifications Dropdown -->
<!-- start: Message Dropdown -->
<li class="dropdown hidden-xs">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
        <i class="fa fa-envelope"></i>
    </a>
    <ul class="dropdown-menu messages">
        <li>
            <span class="dropdown-menu-title">You have 9 messages</span>
        </li>
        <li>
            <a href="index.html#">
                <span class="avatar"><i class="fa fa-user fa-2x"></i></span>
									<span class="header">
										<span class="from">
									    	{{ Auth::User()->username }}
									     </span>
										<span class="time">
									    	6 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
            </a>
        </li>
        <li>
            <a class="dropdown-menu-sub-footer">View all messages</a>
        </li>
    </ul>
</li>
<!-- end: Message Dropdown -->

<!-- start: User Dropdown -->
<li class="dropdown">
    <a class="btn account dropdown-toggle" data-toggle="dropdown" href="index.html#">
        <div class="avatar"><i class="fa fa-user fa-2x"></i></div>
        <div class="user">
            <span class="hello">Welcome!</span>
            <span class="name"><b>{{ Auth::User()->username }}</b></span>
        </div>
    </a>
    <ul class="dropdown-menu">
        <li class="dropdown-menu-title">

        </li>
        <li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="{{ url("/logout") }}"><i class="fa fa-off"></i> Logout</a></li>
    </ul>
</li>
<!-- end: User Dropdown -->
</ul>
</div>
<!-- end: Header Menu -->

</div>
</header>
<!-- end: Header -->

<div class="container">

<div class="row">

<!-- start: Main Menu -->
    @include('system_layout.menu')
<!-- end: Main Menu -->

<!-- start: Content -->
@yield("contents")
<!-- end: Content -->

</div><!--/row-->

</div><!--/container-->


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save_changes" >Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="clearfix"></div>

<footer>

    <div class="row">

        <div class="col-sm-5">
            &copy; 2014 his team.
        </div><!--/.col-->

        <div class="col-sm-7 text-right">
            Powered by: <a href="#" alt="his team">his team</a>
        </div><!--/.col-->

    </div><!--/.row-->

</footer>
{{HTML::script("system/assets/js/statistics.js")}}
</body>
</html>