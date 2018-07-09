<?php $AppName='UBS Admin'; 

/*
Author: Harry Lifford
URL: https://www.harrylifford.com/
*/
require_once('classes/core.php');
$user= new user();

?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>
<head>        
        <!-- META SECTION -->
        <title>UBS Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                       
    </head>
    <body>
        
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                <img src="img/logo-lr.png" class="" width="80" style="margin:0 50px 0 88px" />
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    

                    <form class="form-signin form-horizontal" method="post" id="login-form">
    
                    <div class="form-group">
      <div class="col-md-12">
      <div id="error">
      <!-- error will be shown here ! -->
      </div>
</div></div>
      <div class="form-group">
      <div class="col-md-12">
      <input type="email" class="form-control" required placeholder="Email address" name="user_email" id="user_email" />
      <span id="check-e"></span>
</div>
      </div>
      
      <div class="form-group">
      <div class="col-md-12">
      <input type="password"  class="form-control"  placeholder="Password" name="password" id="password" required />
</div>
      </div>
      <br>
      
      <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
     
      
      <div class="form-group">
           <div class="col-md-12">
          <button type="submit" class=" btn btn-info btn-block" name="btn-login" id="btn-login">
          <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
          </button> 
      </div>  
</div>
<br>
    </form>
<hr>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; <?php echo Date('Y'); echo '&nbsp;  '.$AppName; ?> 
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>






