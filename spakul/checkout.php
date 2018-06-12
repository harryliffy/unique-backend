<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	//header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

  <?php
  include_once("header.php");
  
  ?>
  <!-- end nav -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
            <li> <strong>Checkout</strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- main-container -->
  <div class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-sm-12 col-xs-12">
          <div class="col-main">
            <div class="page-title">
              <h1>Checkout</h1>
            </div>
            <div class="page-content checkout-page">
              <h3 class="checkout-sep">1. Checkout Method</h3>
              <div class="box-border">
                <div class="row">
                  <div class="col-sm-6">
                    <h4>Checkout as a Guest or Register</h4>
                    <p>Register with us for future convenience:</p>
                    <ul>
                      <li>
                        <label>
                          <input type="radio" name="radio1">
                          Checkout as Guest</label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" name="radio1">
                          Register</label>
                      </li>
                    </ul>
                    <br>
                    <h4>Register and save time!</h4>
                    <p>Register with us for future convenience:</p>
                    <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
                    <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status</p>
                    <button class="button">Continue</button>
                  </div>
                  <div class="col-sm-6">
                    <h4>Login</h4>
                    <p>Already registered? Please log in below:</p>
                    <label>Email address</label>
                    <input type="text" class="form-control input">
                    <label>Password</label>
                    <input type="password" class="form-control input">
                    <p><a href="#">Forgot your password?</a></p>
                    <button class="button">Login</button>
                  </div>
                </div>
              </div>
              <h3 class="checkout-sep">2. Billing Infomations</h3>
              <div class="box-border">
                <ul>
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="first_name" class="required">First Name</label>
                      <input type="text" class="input form-control" name="" id="first_name">
                    </div>
                    <!--/ [col] -->
                    <div class="col-sm-6">
                      <label for="last_name" class="required">Last Name</label>
                      <input type="text" name="" class="input form-control" id="last_name">
                    </div>
                    <!--/ [col] --> 
                  </li>
                  <!--/ .row -->
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="company_name">Company Name</label>
                      <input type="text" name="" class="input form-control" id="company_name">
                    </div>
                    <!--/ [col] -->
                    <div class="col-sm-6">
                      <label for="email_address" class="required">Email Address</label>
                      <input type="text" class="input form-control" name="" id="email_address">
                    </div>
                    <!--/ [col] --> 
                  </li>
                  <!--/ .row -->
                  <li class="row">
                    <div class="col-xs-12">
                      <label for="address" class="required">Address</label>
                      <input type="text" class="input form-control" name="" id="address">
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!-- / .row -->
                  
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="city" class="required">City</label>
                      <input class="input form-control" type="text" name="" id="city">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label class="required">State/Province</label>
                      <select class="input form-control" name="">
                        <option value="Alabama">Alabama</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Kansas">Kansas</option>
                      </select>
                    </div>
                    <!--/ [col] --> 
                  </li>
                  <!--/ .row -->
                  
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="postal_code" class="required">Zip/Postal Code</label>
                      <input class="input form-control" type="text" name="" id="postal_code">
                    </div>
                    <!--/ [col] -->
                    
                    <div  class="col-sm-6">
                      <label class="required">Country</label>
                      <select class="input form-control" name="">
                        <option value="USA">USA</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Canada">Canada</option>
                      </select>
                    </div>
                    <!--/ [col] --> 
                  </li>
                  <!--/ .row -->
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="telephone" class="required">Telephone</label>
                      <input class="input form-control" type="text" name="" id="telephone">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label for="fax">Fax</label>
                      <input class="input form-control" type="text" name="" id="fax">
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!--/ .row -->
                  
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="password" class="required">Password</label>
                      <input class="input form-control" type="password" name="" id="password">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label for="confirm" class="required">Confirm Password</label>
                      <input class="input form-control" type="password" name="" id="confirm">
                    </div>
                    <!--/ [col] --> 
                  </li>
                  <!--/ .row -->
                  <li>
                    <button class="button">Continue</button>
                  </li>
                </ul>
              </div>
              <h3 class="checkout-sep">3. Shipping Information</h3>
              <div class="box-border">
                <ul>
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="first_name_1" class="required">First Name</label>
                      <input class="input form-control" type="text" name="" id="first_name_1">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label for="last_name_1" class="required">Last Name</label>
                      <input class="input form-control" type="text" name="" id="last_name_1">
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!--/ .row -->
                  
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="company_name_1">Company Name</label>
                      <input class="input form-control" type="text" name="" id="company_name_1">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label for="email_address_1" class="required">Email Address</label>
                      <input class="input form-control" type="text" name="" id="email_address_1">
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!--/ .row -->
                  
                  <li class="row">
                    <div class="col-xs-12">
                      <label for="address_1" class="required">Address</label>
                      <input class="input form-control" type="text" name="" id="address_1">
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!--/ .row -->
                  
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="city_1" class="required">City</label>
                      <input class="input form-control" type="text" name="" id="city_1">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label class="required">State/Province</label>
                      <div class="custom_select">
                        <select class="input form-control" name="">
                          <option value="Alabama">Alabama</option>
                          <option value="Illinois">Illinois</option>
                          <option value="Kansas">Kansas</option>
                        </select>
                      </div>
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!--/ .row -->
                  
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="postal_code_1" class="required">Zip/Postal Code</label>
                      <input class="input form-control" type="text" name="" id="postal_code_1">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label class="required">Country</label>
                      <div class="custom_select">
                        <select class="input form-control" name="">
                          <option value="USA">USA</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Canada">Canada</option>
                        </select>
                      </div>
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!--/ .row -->
                  
                  <li class="row">
                    <div class="col-sm-6">
                      <label for="telephone_1" class="required">Telephone</label>
                      <input class="input form-control" type="text" name="" id="telephone_1">
                    </div>
                    <!--/ [col] -->
                    
                    <div class="col-sm-6">
                      <label for="fax_1">Fax</label>
                      <input class="input form-control" type="text" name="" id="fax_1">
                    </div>
                    <!--/ [col] --> 
                    
                  </li>
                  <!--/ .row -->
                  
                </ul>
                <button class="button">Continue</button>
              </div>
              <h3 class="checkout-sep">4. Shipping Method</h3>
              <div class="box-border">
                <ul class="shipping_method">
                  <li>
                    <p class="subcaption bold">Free Shipping</p>
                    <label for="radio_button_3">
                      <input type="radio" checked name="radio_3" id="radio_button_3">
                      Free $0</label>
                  </li>
                  <li>
                    <p class="subcaption bold">Free Shipping</p>
                    <label for="radio_button_4">
                      <input type="radio" name="radio_3" id="radio_button_4">
                      Standard Shipping $5.00</label>
                  </li>
                </ul>
                <button class="button">Continue</button>
              </div>
              <h3 class="checkout-sep">5. Payment Information</h3>
              <div class="box-border">
                <ul>
                  <li>
                    <label for="radio_button_5">
                      <input type="radio" checked name="radio_4" id="radio_button_5">
                      Check / Money order</label>
                  </li>
                  <li>
                    <label for="radio_button_6">
                      <input type="radio" name="radio_4" id="radio_button_6">
                      Credit card (saved)</label>
                  </li>
                </ul>
                <button class="button">Continue</button>
              </div>
              <h3 class="checkout-sep">6. Order Review</h3>
              <div class="box-border">
                <div class="order-detail-content">
                  <table class="table table-bordered table-responsive jtv-cart-summary">
                    <thead>
                      <tr>
                        <th class="cart_product">Product</th>
                        <th>Description</th>
                        <th>Avail.</th>
                        <th>Unit price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th class="action"><i class="fa fa-trash-o"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="cart_product"><a href="#"><img src="images/products/img02.jpg" alt="Product"></a></td>
                        <td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>
                          <small class="cart_ref">SKU : #987654</small><br>
                          <small><a href="#">Color : Pink</a></small><br></td>
                        <td class="cart_avail"><span class="label label-success">In stock</span></td>
                        <td class="price"><span>$99.00</span></td>
                        <td class="qty"><input class="form-control input-sm" type="text" value="1">
                          <a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>
                        <td class="price"><span>$99.00</span></td>
                        <td class="action"><a href="#">Delete item</a></td>
                      </tr>
                      <tr>
                        <td class="cart_product"><a href="#"><img src="images/products/img03.jpg" alt="Product"></a></td>
                        <td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>
                          <small class="cart_ref">SKU : #123654999</small><br>
                          <small><a href="#">Color : Orange</a></small><br></td>
                        <td class="cart_avail"><span class="label label-success">In stock</span></td>
                        <td class="price"><span>$49.00</span></td>
                        <td class="qty"><input class="form-control input-sm" type="text" value="2">
                          <a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>
                        <td class="price"><span>$98.00</span></td>
                        <td class="action"><a href="#">Delete item</a></td>
                      </tr>
                      <tr>
                        <td class="cart_product"><a href="#"><img src="images/products/img04.jpg" alt="Product"></a></td>
                        <td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>
                          <small class="cart_ref">SKU : #123654999</small><br>
                          <small><a href="#">Color : Red</a></small><br></td>
                        <td class="cart_avail"><span class="label label-success">In stock</span></td>
                        <td class="price"><span>$89.00</span></td>
                        <td class="qty"><input class="form-control input-sm" type="text" value="1">
                          <a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>
                        <td class="price"><span>$89.00</span></td>
                        <td class="action"><a href="#">Delete item</a></td>
                      </tr>
                      <tr>
                        <td class="cart_product"><a href="#"><img src="images/products/img08.jpg" alt="Product"></a></td>
                        <td class="cart_description"><p class="product-name"><a href="#"> Product Title Here </a></p>
                          <small class="cart_ref">SKU : #123654999</small><br>
                          <small><a href="#">Color : Grey</a></small><br></td>
                        <td class="cart_avail"><span class="label label-success">In stock</span></td>
                        <td class="price"><span>$69.00</span></td>
                        <td class="qty"><input class="form-control input-sm" type="text" value="1">
                          <a href="#"><i class="fa fa-plus"></i></a> <a href="#"><i class="fa fa-minus"></i></a></td>
                        <td class="price"><span>$69.00</span></td>
                        <td class="action"><a href="#">Delete item</a></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="2" rowspan="2"></td>
                        <td colspan="3">Total products (tax incl.)</td>
                        <td colspan="2">$355.00</td>
                      </tr>
                      <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td colspan="2"><strong>$355.00</strong></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="cart_navigation">
                    <button class="button pull-right">Place Order</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!--End main-container --> 
  
  <!-- Brand Logo -->
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
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

<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- jtv-jtv-mobile-menu js --> 
<script type="text/javascript" src="js/jtv-mobile-menu.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="js/countdown.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>