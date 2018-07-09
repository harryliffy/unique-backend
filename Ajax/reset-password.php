<?php

if(isset($_SESSION['loggedName'])!="")
{
	header("Location: home.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reset password</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="reset-password.js"></script>

</head>

<body>
    <?php
    include('layout/header.php');
    ?>
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="reset-form">
      
        <h2 class="form-signin-heading">Reset Password</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Email address" name="reset_user_email" id="reset_user_email" />
        <span id="check-e"></span>
        </div>
        
    
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-reset" id="btn-reset">
    		<span class="glyphicon glyphicon-envelope"></span> &nbsp; Reset link
			</button> 
        </div>  
      
      </form>

    </div>
    
</div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>