<?php



session_start();

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
<script type="text/javascript" src="prof.js"></script>


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
        <h1 class="title"><span>Swift Admin</span>Register <span class="msg">Sign in to start your session</span></h1>
        <div class="col-md-12">
  
<div class="signin-form">

	<div class="container">
     
        
      <form class="form-signin" method="post" id="acc-form">
	   
	           <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
	   
			<fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="vendorname" id="vendorname" required>
                                        <label class="form-label">Vendor Name*</label>
                                    </div>
                                </div>
								
								   <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="vendorcat" id="vendorcat" required>
                                        <label class="form-label">Vendor Category*</label>
                                    </div>
                                </div>
								
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tag" id="tag" required>
                                        <label class="form-label">Tags</label>
                                    </div>
                                </div>
								
								    <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bphone" id="bphone" required>
                                        <label class="form-label">Business Phone number</label>
                                    </div>
                                </div>

								   <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" name="desc" id="desc" placeholder="" required ></textarea>
                                        <label class="form-label">Write a description*</label>
                                    </div>
                                </div>


                            </fieldset>
							
				<h3>Contact Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="cname" id="cname" class="form-control" required>
                                        <label class="form-label">Contact person*</label>
                                    </div>
                                </div>
                               <!--- -> <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="surname" class="form-control" required>
                                        <label class="form-label">Last Name*</label>
                                    </div>
                                </div>-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="cemail" id="cemail" class="form-control" required>
                                        <label class="form-label">Email*</label>
                                    </div>
                                </div>
								
								
								   <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="cphone" id="cphone" required>
                                        <label class="form-label">Mobile number</label>
                                    </div>
                                </div>
								
								
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="caddress"  id="caddress" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Contact Address*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input min="18" type="number" name="cage" id="cage" class="form-control" required>
                                        <label class="form-label">Age*</label>
                                    </div>
                                    <div class="help-info">The warning step will show up if age is less than 18</div>
                                </div>
                            </fieldset>
                            </fieldset>
	   <div class="form-group">
                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
            </div>
            <div class="text-center">
			 <button type="submit" class="btn btn-raised g-bg-cyan waves-effect" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> Create an Account
			</button>
			
               <!-- <a href="#" class="btn btn-default button create-account" >SIGN UP</a>-->
            </div>
            <div class="m-t-10 m-b--5 align-center">
                <a href="index">You already have a membership?</a>
            </div>
	   
      
        <!--h2 class="form-signin-heading">Log In to WebApp.</h2><hr /-->
        
<?php $_SESSION['vendor_id'];   ?>
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