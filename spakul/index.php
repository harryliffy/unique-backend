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
  <!-- our features -->
  <div class="our-features-box hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="feature-box first"> <i class="icon-plane icons"></i>
            <div class="content">
              <h3>Free & Next Day Delivery</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="feature-box"> <i class="icon-earphones-alt icons"></i>
            <div class="content">
              <h3>Support 24/7 For Clients</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="feature-box"> <i class="icon-like icons"></i>
            <div class="content">
              <h3>100% Satisfaction Guarantee</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
          <div class="feature-box last"> <i class="icon-tag icons"></i>
            <div class="content">
              <h3>Great Daily Deals Discount</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- JTV Home Slider -->
  <div class="jtv-slideshow">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-push-3 col-sm-12">
          <div id='jtv-rev_slider_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
            <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>
              <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="images/Decor1.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                    <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>New special collection</span> </div>
                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Banquet</span> </div>
                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Stylish and Quality Handbags at wholesale prices.</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Shop Now</a></div>
                  </div>
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="images/cake.jpeg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                    <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Bridal Collection</span> </div>
                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Dominos Creamery </div>
                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Shop our low cost luxury leather bags.</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Order now</a> </div>
                  </div>
                </li>  


				<li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="images/decor.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                    <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Bridal collection</span> </div>
                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>flower bouque</div>
                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Shop our low cost luxury leather bags.</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Order now</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end JTV Home Slider --> 
        
        <!-- hot deal products -->
        <div class="col-md-3 hot-deal col-md-pull-9 col-sm-5">
          <div class="slider-items-products">
            <div id="hot-deal-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4">
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Product Title Here" class="product-image"> <img src="images/products/img15.jpg" alt="Product Title Here"></a>
                        <div class="hot-label hot-top-left">35% off</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="" title="Product Title Here"> Lake Mary Event Center</a></div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">N129.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button data-original-title="Add to Cart" title="" type="button" class="button btn-cart"><span>See details</span> </button>
                          </div>
                        </div>
                      </div>
                      <div class="jtv-box-timer">
                        <div class="countbox_1 timer-grid"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Product Title Here" class="product-image"> <img src="images/products/img08.jpg" alt="Product Title Here"></a>
                        <div class="hot-label hot-top-left">45% off</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="" title="Product Title Here"> Bahamas Event Center</a></div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">N129.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button data-original-title="Add to Cart" title="" type="button" class="button btn-cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                      <div class="jtv-box-timer">
                        <div class="countbox_1 timer-grid"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Product Title Here" class="product-image"> <img src="images/products/img04.jpg" alt="Product Title Here"></a>
                        <div class="hot-label hot-top-left">25% off</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="" title="Product Title Here"> Falls Event Center</a></div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">N129.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button data-original-title="Add to Cart" title="" type="button" class="button btn-cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                      <div class="jtv-box-timer">
                        <div class="countbox_1 timer-grid"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="jtv-top-banner">
    <div class="container">
      <div class="imgbox"><img src="images/bride.jpg" alt=""></div>
      <div class="jtv-cont-box">
        <h3>Event <br>
          venues</h3>
        <div class="jtv-line-bg"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
      </div>
      <div class="imgbox"><img src="images/makeup1.jpg" alt=""></div>
      <div class="jtv-cont-box2">
        <h3>Bridal  <br>
         collection</h3>
        <div class="jtv-line-bg"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
      </div>
      <div class="imgbox"><img src="images/sandb.jpeg" alt=""></div>
      <div class="jtv-cont-box3">
        <h3>Make-Over <br>
          Make-Up</h3>
        <div class="jtv-line-bg"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
      </div>
    </div>
  </div>
  <div class="content-page">
    <div class="container"> 
      <!-- Product Tabs-->
      <div class="category-product">
        <div class="navbar nav-menu">
          <div class="navbar-collapse">
            <div class="jtv-title">
              <h2>Featured Services</h2>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a data-toggle="tab" href="#tab-1">Fashion</a> </li>
              <li><a data-toggle="tab" href="#tab-2">Food</a> </li>
              <li><a data-toggle="tab" href="#tab-3">Venues</a> </li>
              <li><a data-toggle="tab" href="#tab-4">Entertainment</a> </li>
              <li><a data-toggle="tab" href="#tab-5">Accessories</a> </li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <div class="tab-container"> 
          <!-- tab product -->
          <div class="tab-panel active" id="tab-1">
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="single_product.html"> <img alt="Product Title Here"" src="images/products/img10.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href=""> Bridals </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">N155.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img01.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="shop_grid.php"> Groom </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">N225.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href=""> <img alt="Product Title Here"" src="images/products/img02.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href=""> Aso-ebi</a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">N99.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img03.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="">Jewelry </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> N156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> N167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- tab product -->
          <div class="tab-panel" id="tab-2">
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href=""> <img alt="Product Title Here"" src="images/products/img12.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href="compare.html"><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href=""> Inter continental </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href=""> <img alt="Product Title Here"" src="images/products/img11.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Local </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img05.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Cakes and confectioneries </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img06.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Drinks </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-panel" id="tab-3">
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img11.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img12.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img13.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img14.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-panel" id="tab-4">
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img10.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img01.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img02.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img03.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-panel" id="tab-5">
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img02.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img06.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img10.jpg"> </a>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img07.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="jtv-box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                            <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                            <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jtv bottom banner section -->
  <div class="jtv-bottom-banner-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="jtv-img-box"> <a href="#"> <img src="images/jtv-banner1.jpg" alt="bottom banner">
            <div class="jtv-banner-info"> <span>Photography</span>
              <h3>Videography</h3>
            </div>
            </a> </div>
        </div>
        <div class="col-sm-4">
          <div class="jtv-img-box"> <a href="#"> <img src="images/jtv-banner2.jpg" alt="bottom banner">
            <div class="jtv-banner-info"> <span>Make-up</span>
              <h3>Make-Over</h3>
            </div>
            </a> </div>
        </div>
        <div class="col-sm-4">
          <div class="jtv-img-box"> <a href="#"> <img src="images/jtv-banner3.jpg" alt="bottom banner">
            <div class="jtv-banner-info"> <span>Printing</span>
              <h3>Invitation Cards	</h3>
            </div>
            </a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bestsell Slider -->
  <section class="jtv-bestsell-section">
    <div class="container">
      <div class="slider-items-products">
        <div class="bestsell-block">
          <div class="jtv-block-inner">
            <div class="block-title">
              <h2>More services</h2>
            </div>
          </div>
		  <section class="special-products">
    <div class="container">
      <div class="slider-items-products">
        <div class="jtv-special-block">
          <div class="jtv-block-inner">
            <div class="block-title">
              <h2>Special Product</h2>
            </div>
            <div class="jtv-decs-text" style="visibility:hidden;s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
            <a href="shop_grid.html" class="jtv-more-bnt">More Products</a> </div>
          <div id="special-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid block-content">
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img12.jpg"> </a>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img15.jpg"> </a>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img05.jpg"> </a>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img06.jpg"> </a>
                      <div class="new-label new-top-left">new</div>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                          </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        
        </div>
      </div>
    </div>
  </section>
  <!-- End Bestsell Slider -->
  <div class="jtv-testimonial-block">
    <div class="container">
      <div class="row">
        <div class="col-md-12" data-wow-delay="0.2s">
          <div class="block-title">
            <h2>What people are saying about Spakul</h2>
          </div>
          <div class="carousel slide" data-ride="carousel" id="quote-carousel"> 
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <!--li data-target="#quote-carousel" data-slide-to="0"><img class="img-responsive " src="images/testimonials-img1.jpg" alt=""> </li>
              <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/testimonials-img2.jpg" alt=""> </li-->
              <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="images/testimonials-img3.jpg" alt=""> </li-->
              <li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="images/testimonials-img4.jpg" alt=""> </li>
              <li data-target="#quote-carousel" data-slide-to="4"><img class="img-responsive" src="images/testimonials-img5.jpg" alt=""> </li>
            </ol>
            
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner text-center"> 
              
              <!-- Quote 1 -- >
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                      <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 2 -- >
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                      <div class="holder-info"><strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 3 -->
              <div class="item active">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                      <div class="holder-info"> <strong class="name">John Doe</strong> <strong class="designation">Managing Director</strong></div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 4 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                      <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!-- Quote 5 -->
              <div class="item">
                <blockquote>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                      <div class="holder-info"><strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            
            <!-- Carousel Buttons Next/Prev --> 
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Special Product slider -- >
  
  <section class="special-products">
    <div class="container">
      <div class="slider-items-products">
        <div class="jtv-special-block">
          <div class="jtv-block-inner">
            <div class="block-title">
              <h2>Special Product</h2>
            </div>
            <div class="jtv-decs-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
            <a href="shop_grid.html" class="jtv-more-bnt">More Products</a> </div>
          <div id="special-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid block-content">
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img12.jpg"> </a>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img15.jpg"> </a>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img05.jpg"> </a>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Product Title Here ref=""> <img alt="Product Title Here"" src="images/products/img06.jpg"> </a>
                      <div class="new-label new-top-left">new</div>
                      <div class="jtv-box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href=""><i class="icon-magnifier-add icons"></i><span class="hidden">Quick View</span></a></li>
                          <li><a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a></li>
                          <li><a class="link-compare" href=""><i class="icon-shuffle icons"></i><span class="hidden">Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="Product Title Here" ref=""> Product Title Here </a> </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                          </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Latest Blog -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="blog-outer-container">
          <div class="jtv-title">
            <h2>Latest Blog</h2>
          </div>
          <div class="blog-inner">
            <div class="col-sm-4">
              <div class="entry-thumb"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img1.jpg"> </a> </div>
              <div class="blog-preview_info">
                <h3><a href="blog_single_post.html">Winter Morning Bigstart</a></h3>
                <ul class="post-meta">
                  <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
                  <li><i class="fa fa-comments"></i><a href="#">12 comments</a> </li>
                  <li><i class="fa fa-calendar"></i>2017-02-25</li>
                </ul>
                <div class="blog-preview_desc">Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor.</div>
                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
            <div class="col-sm-4">
              <div class="entry-thumb"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img2.jpg"> </a> </div>
              <div class="blog-preview_info">
                <h3><a href="blog_single_post.html">Perfect for promoting</a></h3>
                <ul class="post-meta">
                  <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
                  <li><i class="fa fa-comments"></i><a href="#">45 comments</a> </li>
                  <li><i class="fa fa-calendar"></i>2017-04-05</li>
                </ul>
                <div class="blog-preview_desc">Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor.</div>
                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
            <div class="col-sm-4">
              <div class="entry-thumb"> <a href="blog_single_post.html"> <img alt="Blog" src="images/blog-img3.jpg"> </a> </div>
              <div class="blog-preview_info">
                <h3><a href="blog_single_post.html">Sed do eiusmod sit amet</a></h3>
                <ul class="post-meta">
                  <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
                  <li><i class="fa fa-comments"></i><a href="#">85 comments</a> </li>
                  <li><i class="fa fa-calendar"></i>2017-05-05</li>
                </ul>
                <div class="blog-preview_desc">Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor.</div>
                <a class="blog-preview_btn" href="blog_single_post.html">Read More <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- End Latest Blog --> 
  
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
          <div style="text-align:center"> <a href="index.html"><img width="60px" src="images/spakul.png" alt="logo"> </a> </div>
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
                <li><a href="">Wishlist</a></li>
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

<!-- rev-slider js --> 
<script type="text/javascript" src="js/rev-slider.js"></script> 
<script type='text/javascript'>
jQuery(document).ready(function() {
jQuery('#jtv-rev_slider').show().revolution({
dottedOverlay: 'none',
delay: 5000,
startwidth: 850,
startheight: 450,
hideThumbs: 200,
thumbWidth: 200,
thumbHeight: 50,
thumbAmount: 2,
navigationType: 'thumb',
navigationArrows: 'solo',
navigationStyle: 'round',
touchenabled: 'on',
onHoverStop: 'on',
swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,
spinner: 'spinner0',
keyboardNavigation: 'off',
navigationHAlign: 'center',
navigationVAlign: 'bottom',
navigationHOffset: 0,
navigationVOffset: 20,
soloArrowLeftHalign: 'left',
soloArrowLeftValign: 'center',
soloArrowLeftHOffset: 20,
soloArrowLeftVOffset: 0,
soloArrowRightHalign: 'right',
soloArrowRightValign: 'center',
soloArrowRightHOffset: 20,
soloArrowRightVOffset: 0,
shadow: 0,
fullWidth: 'on',
fullScreen: 'off',
stopLoop: 'off',
stopAfterLoops: -1,
stopAtSlide: -1,
shuffle: 'off',
autoHeight: 'off',
forceFullWidth: 'on',
fullScreenAlignForce: 'off',
minFullScreenHeight: 0,
hideNavDelayOnMobile: 1500,
hideThumbsOnMobile: 'off',
hideBulletsOnMobile: 'off',
hideArrowsOnMobile: 'off',
hideThumbsUnderResolution: 0,
hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
startWithSlide: 0,
fullScreenOffsetContainer: ''
});
});
</script> 
<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
var dthen1 = new Date("12/25/17 11:59:00 PM");
start = "08/04/15 03:02:11 AM";
start_date = Date.parse(start);
var dnow1 = new Date(start_date);
if (CountStepper > 0)
ddiff = new Date((dnow1) - (dthen1));
else
ddiff = new Date((dthen1) - (dnow1));
gsecs1 = Math.floor(ddiff.valueOf() / 1000);

var iid1 = "countbox_1";
CountBack_slider(gsecs1, "countbox_1", 1);
</script> 









<!--Newsletter Popup Start-- >
<div id="myModal" class="modal fade">
  <div class="modal-dialog newsletter-popup">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-body">
        <h4 class="modal-title">NEWSLETTER SIGNUP</h4>
        <form id="newsletter-form" method="post" action="#">
          <div class="content-subscribe">
            <div class="form-subscribe-header">
              <label>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</label>
            </div>
            <div class="input-box">
              <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
            </div>
            <div class="actions">
              <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
            </div>
          </div>
        </form>
        <div class="subscribe-bottom">
          <input name="notshowpopup" id="notshowpopup" type="checkbox">
          Don’t show this popup again </div>
      </div>
    </div>
  </div>
</div>
<!--End of Newsletter Popup-->

</body>

</html>
