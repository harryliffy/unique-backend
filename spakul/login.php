<?php

session_start();





if(isset($_SESSION['user_session'])!="")
{
	header("Location: login");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Login</title>
<meta name="description" content="">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/png" href="http://localhost/spakul-main1/img/spakul.png">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">   
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style1.cssz" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="style.css">

<!--script type="text/javascript" src="js/jquery.min.js"></script> 

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>-->
</head>


 <?php
  include_once("header.php");
  
  ?>
  <!-- end nav --> 
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="account-login">
        <div class="page-title">
          <h2>Login or Create an Account</h2>
        </div>
        <fieldset class="col2-set">
          <div class="col-1 new-users"><strong>New Customers</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <div class="buttons-set">
                <button onclick="window.location='account';" class="button create-account" type="button"><span>Create an Account</span></button>
              </div>
            </div>
          </div>
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
        </fieldset>
		
		<!--form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Log In to WebApp.</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -- >
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
        </div>  
      
      </form-->
		
      </div>
 
    </div>
  </section>
  
  <section>
  
  <div class="signin-form">

	<div class="container">
     
        
       

    </div>
    
</div>
  
  </section>
  


 <!-- Brand Logo -->  
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -- >
            <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -- >
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -- >
            <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -- >
            <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image"> </a> </div>
            <!-- End Item -- > 
            
            <!-- Item -- >
            <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image"> </a> </div>
            <!-- End Item -- > 
            
            <!-- Item -- >
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image"> </a> </div>
            <!-- End Item -- > 
            
            <!-- Item -- >
            <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div style="text-align:center"> <a href="index.html"><img src="images/footer-logo.png" alt="logo"> </a> </div>
          <address>
          <p> <i class="fa fa-map-marker"></i>Company, 12/34 - West 21st Street, New York, USA </p>
          <p><i class="fa fa-mobile"></i><span>+ (800) 0123 456 789</span> </p>
          <p> <i class="fa fa-envelope"></i><span><a href="mailto:email@domain.com">support@themes.com</a></span></p>
          </address>
        </div>
      </div>
    </div>
    <div class="footer-inner">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 col-md-3">
            <div class="footer-links">
              <h4>Useful links</h4>
              <ul class="links">
                <li><a href="#" title="Product Recall">Product Recall</a></li>
                <li><a href="#" title="Gift Vouchers">Gift Vouchers</a></li>
                <li><a href="#" title="Returns &amp; Exchange">Returns &amp; Exchange</a></li>
                <li><a href="#" title="Shipping Options">Shipping Options</a></li>
                <li><a href="#" title="Help &amp; FAQs">Help &amp; FAQs</a></li>
                <li><a href="#" title="Order history">Order history</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 col-md-3">
            <div class="footer-links">
              <h4>Service</h4>
              <ul class="links">
                <li><a href="account_page.html">Account</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="shopping_cart.html">Shopping Cart</a></li>
                <li><a href="#">Return Policy</a></li>
                <li><a href="#">Special</a></li>
                <li><a href="#">Lookbook</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 col-md-2">
            <div class="footer-links">
              <h4>Information</h4>
              <ul class="links">
                <li><a href="sitemap.html">Sites Map </a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Trends</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="#">My Orders</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="footer-links">
              <div class="footer-newsletter">
                <h4>Subscribe to our news</h4>
                <form id="newsletter-validate-detail" method="post" action="#">
                  <div class="newsletter-inner">
                    <p>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</p>
                    <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                    <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="social">
                <h4>Follow Us</h4>
                <ul class="inline-mode">
                  <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="icon-social-twitter icons"></i></a></li>
                  <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                  <li class="social-network rss"><a title="Connect us on rss" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
                  <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-12 coppyright">Copyright © 2017 <a href="#"> Bigstart </a>. All Rights Reserved. </div>
          <div class="col-sm-7 col-xs-12 payment-accept">
            <ul>
              <li> <a href="#"><img src="images/payment-1.png" alt="Payment Card"></a> </li>
              <li> <a href="#"><img src="images/payment-2.png" alt="Payment Card"></a> </li>
              <li> <a href="#"><img src="images/payment-3.png" alt="Payment Card"></a> </li>
              <li> <a href="#"><img src="images/payment-4.png" alt="Payment Card"></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>


<!-- End Footer -->

<!-- jquery js -- > 
<script type="text/javascript" src="js/jquery.min.js"></script> 
-- >
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script--> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- jtv-jtv-mobile-menu js --> 
<script type="text/javascript" src="js/jtv-mobile-menu.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="js/countdown.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script> 
	

	
	
	
	
	
	
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>