<?php

session_start();
include("dbconfig.php");
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift Admin ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/login.css" rel="stylesheet">
<script type="text/javascript" src="script.js"></script>
<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift Admin</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="col-md-12">
          <!--  <form id="sign_in" method="POST">
                
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <a href="index-2.html" class="btn btn-raised waves-effect g-bg-cyan">SIGN IN</a>
                        <a href="sign-up.html" class="btn btn-raised waves-effect">SIGN UP</a>
                    </div>
                    <div class="text-center"> <a href="forgot-password.html">Forgot Password?</a></div>
                </div>
            </form>  -->
			
			
					  <form class="form-signin" method="post" id="login-form">
          <div class="col-2 registered-users"><strong>Registered Customers</strong>
            <div class="content">
			<div id="error">
        <!-- error will be shown here ! -->
        </div>
              <p>If you have an account with us, please log in.</p>
              <ul class="form-list">
                <li>
                  <label for="email">Username <span class="required"></span></label>
                  <br>
                  <!--input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="login[username]"-->
				  
				  <input type="email" title="Username" class="form-control input-text required-entry" placeholder="Username" name="user_email" id="user_email" />
        <span id="check-e"></span>
				  
				  
                </li>
				<br>
                <li>
                  <label for="pass">Password <span class="required"></span></label>
                  <br>
                  <input type="password" title="Password" id="pass" class="form-control input-text required-entry validate-password" placeholder="Password" name="password" id="password"/>
				  
				    <!--input type="password" class="form-control" placeholder="Password" name="password" id="password" /-->
				  
				  
                </li>
              </ul>
              <!--p class="required">* Required Fields</p-->
			  <br> 
			  <br>
              <div class="buttons-set">
			   <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button>
			  
                <!--button id="send2" name="send" type="submit" class="button login"><span>Login</span></button-->
                <a class="forgot-word" href="http://demo.magentojtv.com/computerstore/customer/account/forgotpassword/">Forgot Your Password?</a> </div>
            </div>
          </div>
		  </form>
			
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js -- > 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -- > 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -- > 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>

</html>