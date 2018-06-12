<?php



session_start();

if(isset($_SESSION['vendor_session'])!="")
{
	header("Location: home");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>


<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/login.css" rel="stylesheet">

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />

</head>
<body class="login-page authentication">
  

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift Admin</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="col-md-12">
  
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <!--h2 class="form-signin-heading">Log In to WebApp.</h2><hr /-->
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
		   <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Username" required autofocus />
                    </div>
                </div><span id="check-e"></span>
		
		
        <!--<div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>- ->
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>-->
		
		   <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
		
       
     	<!--<hr />-->
        
		    <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
					
					
                        <button type="submit" class="btn btn-raised waves-effect g-bg-cyan" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
                               <!-- <a href="sign-up.html" class="btn btn-raised waves-effect">SIGN UP</a> -->
                    </div>
                    <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
					<div class="text-center"> <a href="account">New? Sign up</a></div>
                </div>
		
		
        <!--div class="form-group">
            <button type="submit" class="btn btn-raised waves-effect g-bg-cyan" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
        </div-->  
      
      </form>

    </div>
    
</div>
 </div>
    </div>    
</div>
<div class="theme-bg"></div>
    <!--
	
	<!-- Jquery Core Js -- >  
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -- > 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -- > 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -- > 
	
	
	-->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>