
<?php

session_start();
include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Shop</title>
<meta name="description" content="">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/png" href="logo.png">

<!-- CSS Style -->
<link rel="stylesheet" href="style.css">
</head>
 <?php
  include_once("header.php");
  
  ?>
  
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
            <li> <a href="shop_grid.html" title="">Clutches</a> <span>/ </span> </li>
            <li> <a href="shop_grid.html" title="">Bucket Bag</a> <span>/</span> </li>
            <li> <strong>
			<?php
			
			try{
				$z = $_GET['z'];
				$link = $_GET['link'];
				//$_GET['link']==$key;
				//$key=$_POST['key'];
				$cat_group='$link';
				$stmt = $db_con->prepare("SELECT * FROM category WHERE cat_group=:cat_group");
			$stmt->execute(array(":cat_group"=>$cat_group));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
				
				$vendor_id=$link;
				
			}
			
			catch(PDOException $e){
			echo $e->getMessage();
		}

			?>
			
			Fashion Handbags</strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-xs-12">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="images/category-img1.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Handbag 2017</div>
                      <h2 class="cat-heading">New special collection</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="images/category-img2.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Big Sale</div>
                      <h2 class="cat-heading">New Fashion</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                    <!-- End Item --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <article class="col-main">
            <h2 class="page-heading"> <span class="page-heading-title"><?php echo $link;echo '<br><small>'.$z.'</small> ';?></span> </h2>
            <div class="toolbar">
              <div class="row">
                <div class="col-md-4 col-sm-5">
                  <div class="btn-group">
                    <div id="grid-view" class="btn btn-default active" data-toggle="tooltip" title="Grid"><a href="shop_grid.html"><i class="fa fa-th"></i></a></div>
                    <div id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><a href="shop_list.html"><i class="fa fa-th-list"></i></a></div>
                  </div>
                  <a href="compare.html" id="compare-total">Product Compare (3)</a> </div>
                <div class="col-sm-2 text-right sort-by">
                  <label class="control-label" for="input-sort">Sort By:</label>
                </div>
                <div class="col-md-3 col-sm-2 text-right">
                  <select id="input-sort" class="form-control col-sm-3">
                    <option value="" selected="selected">Default</option>
                    <option value="">Name (A - Z)</option>
                    <option value="">Name (Z - A)</option>
                    <option value="">Price (Low &gt; High)</option>
                    <option value="">Price (High &gt; Low)</option>
                    <option value="">Rating (Highest)</option>
                    <option value="">Rating (Lowest)</option>
                    <option value="">Model (A - Z)</option>
                    <option value="">Model (Z - A)</option>
                  </select>
                </div>
                <div class="col-sm-1 text-right show-limit">
                  <label class="control-label" for="input-limit">Show:</label>
                </div>
                <div class="col-sm-2 text-right">
                  <select id="input-limit" class="form-control">
                    <option value="" selected="selected">15</option>
                    <option value="">20</option>
                    <option value="">30</option>
                    <option value="">40</option>
                    <option value="">50</option>
                  </select>
                </div>
              </div>
            </div>
			
			
			
            <div class="category-products">
              <ul class="products-grid">
			  
			  <?php 
		/*	$getUsers = $DBH->prepare("SELECT * FROM users ORDER BY id ASC");
$getUsers->fetchAll();
if(count($getUsers) > 0){
    while($user = $getUsers->fetch()){
        echo $user['username']."<br/>";
    }
}else{
    error('No users.');
} */


$stmtv = $db_con->prepare("SELECT * FROM vendor WHERE vendor_cat_id=:vendor_id");
			$stmtv->execute(array(":vendor_id"=>$vendor_id));
		//$stmtv->execute();
			//$stmtv->fetchAll();
			while($rowv = $stmtv->fetch(PDO::FETCH_ASSOC)){
			$countv = $stmtv->rowCount();
			if ($rowv < 0 )
			 {	echo 'no user';	 echo $countv; 
		 }		
		 else{
			// echo $rowv['vendor_name']; 
		//	echo '<br>'; echo $countv;
		
			  echo '
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="';echo $rowv['vendor_name']; echo' href="single_product.html"> <img alt="Product Title Here"" src="images/products/img10.jpg"> </a>
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
                      <div class="info-inner">';
					  
					 
$str = $rowv['vendor_id'];
$xx= urlencode($str) ;


					  //$str = bin2hex($rowv['vendor_id']);
					  //$str1 = hex2bin($str);
//echo($str); 
//echo pack("H*",bin2hex($xx));				  
                        echo '<div class="item-title"> <a title="Product Title Here" href="shop?vendor=';echo $xx;echo '"> ';echo $rowv['vendor_name']; echo' </a> </div>
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
                </li>';
				
				
				
				 }

			 }
			 		?>
				
				
				
				
				
				
				
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img02.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img03.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img06.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img10.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img07.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img15.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img14.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img13.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img12.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img11.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img06.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img10.jpg"> </a>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here ref="single_product.html"> <img alt="Product Title Here"" src="images/products/img11.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
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
                        <div class="item-title"> <a title="Product Title Here" ref="single_product.html"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
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
            <div class="toolbar">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <ul class="pagination">
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">&gt;</a></li>
                    <li><a href="#">&gt;|</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 text-right">Showing 1 to 15 of 25 (2 Pages)</div>
              </div>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <div class="sidebar col-sm-3 col-xs-12">
          <aside class="sidebar">
            <div class="block block-layered-nav">
              <div class="block-title">Shop By</div>
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <dl id="narrow-by-list">
                  <dt class="odd">Price</dt>
                  <dd class="odd">
                    <ol>
                      <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                      <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                    </ol>
                  </dd>
                  <dt class="even">Manufacturer</dt>
                  <dd class="even">
                    <ol>
                      <li> <a href="#">Colorido</a> (20) </li>
                      <li> <a href="#">Adidas</a> (25) </li>
                      <li> <a href="#">Barisa Epic</a> (8) </li>
                      <li> <a href="#">Esbeda</a> (5) </li>
                    </ol>
                  </dd>
                  <dt class="odd">Handbag Material</dt>
                  <dd class="odd">
                    <ol class="bag-material">
                      <li> <a href="#">
                        <input type="checkbox" name="Material" value="Beaded">
                        Beaded</a></li>
                      <li> <a href="#">
                        <input type="checkbox" name="Material" value="Beaded">
                        Canvas</a></li>
                      <li> <a href="#">
                        <input type="checkbox" name="Material" value="Beaded">
                        Velvet</a></li>
                      <li> <a href="#">
                        <input type="checkbox" name="Material" value="Beaded">
                        Rubber</a></li>
                      <li> <a href="#">
                        <input type="checkbox" name="Material" value="Beaded">
                        Leather</a></li>
                    </ol>
                  </dd>
                  <dt class="odd">Color</dt>
                  <dd class="odd">
                    <ol>
                      <li> <a href="#">Green</a> (1) </li>
                      <li> <a href="#">White</a> (5) </li>
                      <li> <a href="#">Black</a> (5) </li>
                      <li> <a href="#">Gray</a> (4) </li>
                      <li> <a href="#">Dark Gray</a> (3) </li>
                      <li> <a href="#">Blue</a> (1) </li>
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>
            <div class="block product-price-range ">
              <div class="block-title">Price</div>
              <div class="block-content">
                <div class="slider-range">
                  <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="50" data-value-max="350">
                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 60%;"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 10%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 70%;"></span></div>
                  <div class="amount-range-price">Range: $10 - $550</div>
                  <ul class="check-box-list">
                    <li>
                      <input type="checkbox" id="p1" name="cc">
                      <label for="p1"> <span class="button"></span> $20 - $50<span class="count">(5)</span> </label>
                    </li>
                    <li>
                      <input type="checkbox" id="p2" name="cc">
                      <label for="p2"> <span class="button"></span> $50 - $100<span class="count">(10)</span> </label>
                    </li>
                    <li>
                      <input type="checkbox" id="p3" name="cc">
                      <label for="p3"> <span class="button"></span> $100 - $250<span class="count">(12)</span> </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="block block-cart">
              <div class="block-title ">My Cart</div>
              <div class="block-content">
                <div class="summary">
                  <p class="amount">There are <a href="shopping_cart.html">3 items</a> in your cart.</p>
                  <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$227.99</span> </p>
                </div>
                <div class="ajax-checkout">
                  <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
                </div>
                <p class="block-subtitle">Recently added item(s) </p>
                <ul>
                  <li class="item"> <a href="shopping_cart.html" title="Product Title Here" class="product-image"><img src="images/products/img10.jpg" alt="Product Title Here"></a>
                    <div class="product-details">
                      <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                      <strong>1</strong> x <span class="price">$99.99</span>
                      <p class="product-name"> <a href="shopping_cart.html">Product Title Here</a> </p>
                    </div>
                  </li>
                  <li class="item"> <a href="shopping_cart.html" title="Product Title Here" class="product-image"><img src="images/products/img01.jpg" alt="Product Title Here"></a>
                    <div class="product-details">
                      <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                      <strong>1</strong> x <span class="price">$88.00</span>
                      <p class="product-name"> <a href="shopping_cart.html">Product Title Here</a> </p>
                      
                      <!--access clearfix--> 
                    </div>
                  </li>
                  <li class="item"> <a href="shopping_cart.html" title="Product Title Here" class="product-image"><img src="images/products/img05.jpg" alt="Product Title Here"></a>
                    <div class="product-details">
                      <div class="access"> <a href="shopping_cart.html" title="Remove This Item" class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                      <strong>1</strong> x <span class="price">$98.00</span>
                      <p class="product-name"> <a href="shopping_cart.html">Product Title Here</a> </p>
                      
                      <!--access clearfix--> 
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="block block-compare">
              <div class="block-title ">Compare Products (2)</div>
              <div class="block-content">
                <ol id="compare-items">
                  <li class="item">
                    <input type="hidden" value="2173" class="compare-item-id">
                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a> </li>
                  <li class="item">
                    <input type="hidden" value="2174" class="compare-item-id">
                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a> </li>
                  <li class="item">
                    <input type="hidden" value="2174" class="compare-item-id">
                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a> </li>
                </ol>
                <div class="ajax-checkout">
                  <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                  <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                </div>
              </div>
            </div>
            <div class="custom-slider">
              <div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active"><img src="images/slide3.jpg" alt="slide3">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">Big sale</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a class="link" href="#">Shop Now</a></div>
                    </div>
                    <div class="item"><img src="images/slide1.jpg" alt="slide1">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">Bag collection</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="item"><img src="images/slide2.jpg" alt="slide2">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">New special</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span> </a></div>
              </div>
            </div>
            <div class="block block-list block-viewed">
              <div class="block-title"> Recently Viewed </div>
              <div class="block-content">
                <ol id="recently-viewed-items">
                  <li class="item odd">
                    <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                  </li>
                  <li class="item even">
                    <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                  </li>
                  <li class="item last odd">
                    <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                  </li>
                </ol>
              </div>
            </div>
            <div class="block block-poll">
              <div class="block-title">Community Poll </div>
              <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                <div class="block-content">
                  <p class="block-subtitle">What is your favorite color</p>
                  <ul id="poll-answers">
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1">
                      <span class="label">
                      <label for="vote_1">Green</label>
                      </span> </li>
                    <li class="even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2">
                      <span class="label">
                      <label for="vote_2">Red</label>
                      </span> </li>
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3">
                      <span class="label">
                      <label for="vote_3">Black</label>
                      </span> </li>
                    <li class="last even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4">
                      <span class="label">
                      <label for="vote_4">Pink</label>
                      </span> </li>
                  </ul>
                  <div class="actions">
                    <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="block block-tags">
              <div class="block-title"> Popular Tags</div>
              <div class="block-content">
                <div class="tags-list"> <a href="#">Clutches</a> <a href="#">Bag</a> <a href="#">Laptop bags</a> <a href="#">Luggage</a> <a href="#">Backpacks</a> <a href="#">Piper Bag</a> </div>
                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
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

<!-- jquery-ui js --> 
<script type="text/javascript" src="js/jquery-ui.js"></script> 
<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- jtv-jtv-mobile-menu js --> 
<script type="text/javascript" src="js/jtv-mobile-menu.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="js/countdown.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script>
</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/bigstart/Version2/shop_grid_right.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2017 12:14:25 GMT -->
</html>
