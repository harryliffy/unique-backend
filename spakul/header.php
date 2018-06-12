<?php
//session_start();
include_once("dbconfig.php");

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
<title>Spakul</title>
<meta name="description" content="">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/png" href="spakul.png">

<!-- CSS Style -->
<link rel="stylesheet" href="style.css">
</head>



<body class="cms-index-index cms-home-page">

<!-- mobile menu *****************************************************************************-->
<div id="jtv-mobile-menu">
  <ul>
    <li>
      <div class="jtv-search-mob">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="" name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li><a href="index.html">Home</a>
      <ul>
        <li><a href="">BigStart - Fashion</a></li>
        <li><a href="index.html">BigStart - Handbag</a></li>
      </ul>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="shop_grid.html"><span>Shop Grid</span></a>
          <ul>
            <li> <a href="shop_grid_right.html"> <span>Shop Grid Right Sidebar</span> </a> </li>
            <li> <a href="shop_grid_fullwidth.html"> <span>Shop Grid Fullwidth</span> </a> </li>
          </ul>
        </li>
        <li> <a href="shop_list.html"> <span>Shop List</span> </a>
          <ul>
            <li> <a href="shop_list_right.html"> <span>Shop List Right Sidebar</span> </a> </li>
          </ul>
        </li>
        <li> <a href="single_product.html"> <span>Single Product</span> </a> </li>
        <li> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
        <li><a href="checkout.html"><span>Checkout</span></a> </li>
        <li> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
        <li><a href="compare.html"><span>Compare</span></a> </li>
        <li><a href="quick_view.html"><span>Quick View</span></a> </li>
        <li><a href="404error.html"><span>404 Error Page</span></a> </li>
      </ul>
    </li>
    <li><a href="#">Category</a>
	
	
	
      <ul>
        <li> <a href="shop_grid.html"><span>tassel saddle bag</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Toaster Crossbody</span></a> </li>
            <li> <a href="shop_grid.html"><span>Piper Bag</span></a> </li>
            <li> <a href="shop_grid.html"><span>Leather Bag</span></a> </li>
            <li> <a href="shop_grid.html"><span>Canvas Bag</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>bucket bag</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Travel Accessories</span></a> </li>
            <li> <a href="shop_grid.html"><span>Gym Bags</span></a> </li>
            <li> <a href="shop_grid.html"><span>Fashion Waist Packs</span></a> </li>
            <li> <a href="shop_grid.html"><span>Messenger Bags</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>saddle bag</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Travel Duffels</span></a> </li>
            <li> <a href="shop_grid.html"><span>Umbrellas</span></a> </li>
            <li> <a href="shop_grid.html"><span>Waist Packs</span></a> </li>
            <li> <a href="shop_grid.html"><span>Travel Gear</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>curved boxy sling</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Luggage</span></a> </li>
            <li> <a href="shop_grid.html"><span>Briefcases</span></a> </li>
            <li> <a href="shop_grid.html"><span>Bowling</span></a> </li>
            <li> <a href="shop_grid.html"><span>Bucket Bag</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>floral lattice bag</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Crossbody Bag</span></a> </li>
            <li> <a href="shop_grid.html"><span>Clutch Handbag</span></a> </li>
            <li> <a href="shop_grid.html"><span>Hobo Shoulder</span></a> </li>
            <li> <a href="shop_grid.html"><span>Saddle Bag</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>Bag Accessories</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Wallet Wristlet</span></a> </li>
            <li> <a href="shop_grid.html"><span>Solo Premium </span></a> </li>
            <li> <a href="shop_grid.html"><span>Laptop Bags</span></a> </li>
            <li> <a href="shop_grid.html"><span>Belts</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Handbags</a>
      <ul>
        <li> <a href="shop_grid.html"><span>Steve Madden</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Elegant </span></a> </li>
            <li> <a href="shop_grid.html"><span>sassy &amp; chic</span></a> </li>
            <li> <a href="shop_grid.html"><span>Women's Satchel</span></a> </li>
            <li> <a href="shop_grid.html"><span>Shoulder Bag</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>College Bags</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>fashion Backpack</span></a> </li>
            <li> <a href="shop_grid.html"><span>Rose Gold Saffiano</span></a> </li>
            <li> <a href="shop_grid.html"><span>Black Velvet</span></a> </li>
            <li> <a href="shop_grid.html"><span>Leather Handbags</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>Material Bag</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Sling Bag</span></a> </li>
            <li> <a href="shop_grid.html"><span>Diaper Bags</span></a> </li>
            <li> <a href="shop_grid.html"><span>Laptop Backpack</span></a> </li>
            <li> <a href="shop_grid.html"><span>Benetton Black </span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>Lino Perros</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Graphite Croco</span></a> </li>
            <li> <a href="shop_grid.html"><span>Swiss Military Red</span></a> </li>
            <li> <a href="shop_grid.html"><span>Hidesign</span></a> </li>
            <li> <a href="shop_grid.html"><span>Benetton</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>Aquatan</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>Travel Blue</span></a> </li>
            <li> <a href="shop_grid.html"><span>Charles & Keith</span></a> </li>
            <li> <a href="shop_grid.html"><span>Clutches</span></a> </li>
            <li> <a href="shop_grid.html"><span>wristlets</span></a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"><span>Kenneth Cole</span></a>
          <ul>
            <li> <a href="shop_grid.html"><span>wallets</span></a> </li>
            <li> <a href="shop_grid.html"><span>shoulder bags</span></a> </li>
            <li> <a href="shop_grid.html"><span>leather totes</span></a> </li>
            <li> <a href="shop_grid.html"><span>satchels</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Laptop bags</a> </li>
    <li><a href="shop_grid.html">Furniture</a> </li>
    <li><a href="shop_grid.html">Luggage</a> </li>
    <li><a href="contact-us.html">Backpacks</a> </li>
  </ul>
  <div class="jtv-top-link-mob">
    <ul class="links">
      <li><a title="My Account" href="account_page.html">My Account</a> </li>
      <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
      <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
      <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
      <li class="last"><a title="Login" href="account_page.html"><span>Login</span></a> </li>
	  <li class="last"><a title="Login" href="account_page.html"><span> &nbsp;Hi' <?php echo $row['last_name']; ?>&nbsp;</span></a> </li>
	 
    </ul>
  </div>
</div>
<div id="page"> 
  <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row"> 
            <!-- Header Language -->
            <div class="col-xs-12 col-sm-6">
              <div class="welcome-msg">Welcome to spakul! </div>
              <div class="dropdown jtv-language-box"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="images/flag-english.jpg" alt="language"> English <span class="caret"></span> </a>
                <ul class="dropdown-menu" role="menu">
                  <li> <a class="selected" href="#"> <img src="images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                  <li> <a href="#"> <img src="images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                <!--  <li> <a href="#"> <img src="images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                  <li> <a href="#"> <img src="images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                  <li> <a href="#"> <img src="images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                  <li> <a href="#"> <img src="images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>-->
                </ul>
              </div>
              <!-- End Header Language --> 
              
              <!-- Header Currency -->
              <div class="dropdown jtv-currency-box"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> NGN <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#"> N - NGN </a> </li>
                  <!--li><a href="#"> £ - Pound </a> </li>
                  <li><a href="#"> € - Euro </a> </li-->
                </ul>
              </div>
              <!-- End Header Currency --> 
              
            </div>
            <div class="col-xs-6 hidden-xs"> 
              <!-- Header Top Links -->
              <div class="jtv-top-links">
                <div class="links">
                  <ul>
                    <li> <a title="My Account" href=""><span class="hidden-xs">My Account</span></a> </li>
                    <li> <a title="Wishlist" href="">Wishlist</a> </li>
                    <li> <a title="Checkout" href=""><span class="hidden-xs">Checkout</span></a> </li>
                    <li>
                      <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> More <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="about_us.html"> About Us </a> </li>
                          <li><a href="#"> Customer Service </a> </li>
                          <li><a href="#"> Privacy Policy </a> </li>
                          <li><a href="sitemap.html">Site Map </a> </li>
                          <li><a href="#">Search Terms </a> </li>
                          <li><a href="#">Advanced Search </a> </li>
                        </ul>
                      </div>
					  <?php
if(!isset($_SESSION['user_session']))
{
	//header("Location: index.php");
echo ' <li> <a href="login"><span class="hidden-xs">Log In</span></a> </li>';
					 }
					else{
						echo '
						<div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> &nbsp;Hi ';echo $row['last_name'];echo'<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="logout"> Sign out </a> </li>
                     
                        </ul>
                      </div>';
						// echo ' <li> <a href="account_page.php"><span class="hidden-xs">Log In</span></a> </li>';
					}
					  ?>
                    </li>
                  
                   
                  </ul>
                </div>
              </div>
              <!-- End Header Top Links --> 
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="jtv-top-cart-box"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"> <span class="cart_count">2</span><span class="price">Cart / N259.00</span> </a> </div>
                <div>
                  <div class="jtv-top-cart-content"> 
                    
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <li class="item first">
                        <div class="item-inner"> <a class="product-image" title="Product Title Here ref="#"><img alt="Product Title Here"" src="images/products/img01.jpg"> </a>
                          <div class="product-details">
                            <div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <p class="product-name"><a href="#">Product Title Here</a> </p>
                            <strong>1</strong> x <span class="price">$79.99</span> </div>
                        </div>
                      </li>
                      <li class="item">
                        <div class="item-inner"> <a class="product-image" title="Product Title Here ref="single_product.html"><img alt="Product Title Here"" src="images/products/img02.jpg"> </a>
                          <div class="product-details">
                            <div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <p class="product-name"><a href="#">Product Title Here</a> </p>
                            <strong>1</strong> x <span class="price">$88.89</span> </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"> <a class="product-image" title="Product Title Here ref="single_product.html"><img alt="Product Title Here"" src="images/products/img04.jpg"> </a>
                          <div class="product-details">
                            <div class="access"><a class="jtv-btn-remove" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <p class="product-name"><a href="#">Product Title Here</a> </p>
                            <strong>1</strong> x <span class="price">$85.99</span> </div>
                        </div>
                      </li>
                    </ul>
                    
                    <!--actions-->
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button" onClick="checkout.html"><span>Checkout</span> </button>
                      <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 jtv-logo-box"> 
            <!-- Header Logo -->
            <div class="logo"> <a title="Spakul" href="../spakul/"><img width="90" alt="eCommerce" src="images/spakul.png"> </a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
            <div class="search-box">
              <form action="http://htmlmystore.justthemevalley.com/bigstart/Version2/cat" method="POST" id="search_mini_form" name="Categories">
                <input type="text" placeholder="Search entire store here..." value="" maxlength="70" name="search" id="search">
                <button type="button" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navigation -->
  
  <nav>
    <div class="container">
      <div class="mm-toggle-wrap">
        <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
      </div>
      <div class="nav-inner"> 
        <!-- BEGIN NAV -->
        <ul id="nav" class="hidden-xs">
          <li class="drop-menu"><a href="index.html" class="level-top active"><span>Home</span></a>
           <!-- <ul>
              <li><a href="http://htmlmystore.justthemevalley.com/bigstart/index.html">BigStart - Fashion</a></li>
        <li><a href="index.html">BigStart - Handbag</a></li>
            </ul> -->
          </li>
          <li class="drop-menu"> <a href="#"> <span>Pages</span> </a>
            <ul>
              <li class="sub-cat"><a href="#"><span>Shop Grid</span></a>
                <ul>
                  <li> <a href="#"> <span>Shop Grid Right Sidebar</span> </a> </li>
                  <li> <a href="#"> <span>Shop Grid Fullwidth</span> </a> </li>
                </ul>
              </li>
              <li class="sub-cat"> <a href="#"> <span>Shop List</span> </a>
                <ul>
                  <li> <a href="#"> <span>Shop List Right Sidebar</span> </a> </li>
                </ul>
              </li>
              <li> <a href="#"> <span>Single Product</span> </a> </li>
              <li> <a href="#"> <span>Shopping Cart</span> </a> </li>
              <li><a href="#"><span>Checkout</span></a> </li>
              <li> <a href="#"> <span>Wishlist</span> </a> </li>
              <li><a href="#"><span>Compare</span></a> </li>
              <li><a href="#"><span>Quick View</span></a> </li>
              <li><a href="#"><span>404 Error Page</span></a> </li>
            </ul>
          </li>
       
          <li class="mega-menu"> <a class="level-top" href="#"><span>Category</span></a>
            <div class="jtv-menu-block-wrapper">
              <div class="jtv-menu-block-wrapper2">
                <div class="nav-block jtv-nav-block-center">
				 <ul class="level0">
				<?php
	try {
		$stmt = $db_con->query("SELECT DISTINCT cat_group  FROM category ");
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$a= $row['cat_group'];
		
		echo'<li class="parent item"> <a href="shop_grid.html"><span>';echo $a; echo'</span></a>
                      <ul class="level1">';
		
		$item = $db_con->query("SELECT * FROM category WHERE cat_group='$a'");
		while($rowt = $item->fetch(PDO::FETCH_ASSOC)){
			
			$c=$rowt['cat_group'];
		//echo $a;
		
		
		
		 echo '<li> <a href="shop_grid?link=';echo $rowt['cat_group'];echo '&z=';echo $rowt['cat_name'];echo'"><span>';echo $rowt['cat_name']; echo' </span></a> </li>';
		}
		       echo'               </ul>
                    </li>';
		}
	}
	catch(PDOException $e){
			echo $e->getMessage();
		}
		
	?>

                  </ul>
                </div>
                <div class="jtv-nav-banner">
                  <div class="jtv-banner-box">
                    <div class="jtv-nav-banner-img"> <a href="#"><img src="images/menu-img2.jpg" alt="Handbag"> </a> </div>
                  </div>
                  <div class="jtv-banner-box">
                    <div class="jtv-nav-banner-img"> <a href="#"><img src="images/menu-img3.jpg" alt="Handbag"> </a> </div>
                  </div>
                  <div class="jtv-banner-box jtv-banner-box_last">
                    <div class="jtv-nav-banner-img"> <a href="#"><img src="images/menu-img4.jpg" alt="Handbag"> </a> </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
		     <li class="mega-menu"> <a class="level-top" href="#"><span>Events</span></a>
            <!--<div class="jtv-menu-block-wrapper">
              <div class="jtv-menu-block-wrapper2">
                <div class="nav-block jtv-nav-block-center">
                  <div class="col-1">
                  
                  </div>
                  <div class="col-2">
                    <div class="jtv-nav-image1"> <a title="" href="#"><img alt="menu_image" src="images/menu-img1.jpg"> </a> </div>
                  </div>
                </div>
              </div>
            </div> -->
          </li>
          
          <li class="mega-menu"> <a class="level-top" target="_blank" href="admin/"><span>spakul vendor</span></a>
            
          </li>
		  
		  
		  <li class="mega-menu"> <a class="level-top" href="shop_grid.html"><span>Virtual planner</span></a>
           
          </li>
		  
          <li class="mega-menu"> <a class="level-top" href="blog.html"><span>Blog</span></a> </li>
         
        </ul>
		
      </div>
    </div>
  </nav>
  <!-- end nav --> 
