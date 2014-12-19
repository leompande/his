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
    {{HTML::style("public/system/assets/css/bootstrap.min.css")}}
    {{HTML::style("public/system/assets/css/style.min.css")}}
    {{HTML::style("public/system/assets/css/retina.min.css")}}
    {{HTML::style("public/system/assets/css/font-awesome.min.css")}}
    {{HTML::style("public/font-awesome/css/font-awesome.css")}}
    {{HTML::style("public/system/assets/js/jquery-UI/jquery-ui.css")}}
    {{HTML::style("public/system/assets/js/jquery-UI/jquery-ui.structure.css")}}
    {{HTML::style("public/system/assets/js/jquery-UI/jquery-ui.theme.css")}}
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{HTML::script("system/assets/js/html5.js")}}
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
		<div class="container">
		<div class="row">
			<div class="row">
                 <div class="login-title" style="width:400px;padding:20px;text-align:center;margin:0px auto;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px">
                    <span style="color:#FFFFFF;font-size: 25px;">H.I.S - Hotel Information System. </span>
                 </div>
            </div>
			<div class="row">
			    <div class="login-box">
					<h2>Login to your account</h2>
					<form class="form-horizontal" action="{{ url("/login") }}" method="post">
						<fieldset>
						<div class="form-group">
                            <label for="Email1">Email Address</label>
                            <input type="text" class="form-control" name="email" id="Email1" placeholder="Enter Email Address">
                        </div>

                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" name="password" id="password1" placeholder="Enter Password">
                        </div>

                        <div class="clearfix"></div>
						<label class="remember" for="remember"><input type="checkbox" name="remember_token" id="remember">Remember me</label>
						<div class="clearfix"></div>
						<button type="submit" class="btn btn-primary col-xs-12">Login</button>
						</fieldset>
					</form>
					@if (Session::has('flash_error'))
                            <div id="flash_error" style="color:red;font-weight: bold;font-style: italic;">{{ Session::get('flash_error') }}</div>
                        @endif
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a style="color:#36a9e1;font-weight: bold;font-style: italic;" href="{{ url("accessRequest") }}">click here</a>&nbsp;&nbsp;to get a new password. &nbsp;&nbsp;<a style="font-weight: bolder;color:#36a9e1;" href="{{ url("/") }}"><- site</a>
					</p>	
				</div>
			</div><!--/row-->
			
				</div><!--/row-->		
		
	</div><!--/container-->
	
		
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

	    <script src="assets/js/jquery-2.1.0.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="assets/js/jquery-1.11.0.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
		
	<!-- end: JavaScript-->
	

</body>
</html>