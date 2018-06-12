<?php

session_start();
include_once 'dbconfig.php';

?><?php
include('header.php');
?>
                <div class="content">
                    <div id="e-commerce-products" class="page-layout carded full-width">

                        <div class="top-bg bg-primary"></div>

                        <!-- CONTENT -->
                        <div class="page-content">

                            <!-- HEADER -->
                            <div
                                class="header bg-primary text-auto row no-gutters align-items-center justify-content-between">

                                <!-- APP TITLE -->
                                <div class="col-12 col-sm">

                                    <div class="logo row no-gutters align-items-start">
                                        <div class="logo-icon mr-3 mt-1">
                                            <i class="icon-cube-outline s-6"></i>
                                        </div>
                                        <div class="logo-text">
                                            <div class="h4">Products</div>
                                            <div class="">Total Products: 20</div>
                                        </div>
                                    </div>

                                </div>
                                <!-- / APP TITLE -->

                                <!-- SEARCH -->
                                <div class="col search-wrapper px-2">

                                    <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-icon">
                            <i class="icon icon-magnify"></i>
                        </button>
                    </span>
                                        <input id="products-search-input" type="text" class="form-control"
                                               placeholder="Search"
                                               aria-label="Search"/>
                                    </div>

                                </div>
                                <!-- / SEARCH -->

                                <div class="col-auto">
                                    <a href="addproduct" class="btn btn-secondary">ADD NEW PRODUCT</a>
                                </div>

                            </div>
                            <!-- / HEADER -->

                            <div class="page-content-card">

                                <table id="e-commerce-products-table" class="table dataTable">

                                    <thead>

                                        <tr>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">ID</span>
                                                </div>
                                            </th>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">Image</span>
                                                </div>
                                            </th>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">Name</span>
                                                </div>
                                            </th>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">Category</span>
                                                </div>
                                            </th>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">Price</span>
                                                </div>
                                            </th>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">Quantity</span>
                                                </div>
                                            </th>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">Active</span>
                                                </div>
                                            </th>

                                            <th>
                                                <div class="table-header">
                                                    <span class="column-title">Actions</span>
                                                </div>
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>

									  <?php

			//echo $row['vendor_name']; 
			
			try{
				
					
				$vendor_prod=$_SESSION['vendor_session'];
			$stmtp = $db_con->prepare("SELECT * FROM product WHERE vendor_id=:vendor_prod");
			$stmtp->execute(array(":vendor_prod"=>$vendor_prod));
			while ($rowp = $stmtp->fetch(PDO::FETCH_ASSOC)){
				$countp = $stmtp->rowCount();
				//echo $countp; //show number of records 
				//vendor linked image resoursce link
				$imagelink=$vendor_prod.'/'.$rowp['prod_name'].'/';
				echo'
                                        <tr>
                                            <td>#'; echo $rowp['itemcode']; echo'</td>
                                            <td><img class="product-image" src="data/'.$imagelink.$rowp['img'].'"></td>
                                            <td>'; echo $rowp['prod_name']; echo'</td>
                                            <td>'. $rowp['category'].'</td>
                                            <td>10.24</td>
                                            <td>3</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
			</tr>'; }}
			
			
				catch(PDOException $e){
			echo $e->getMessage();
		}
			?>

                                        <!--<tr>
                                            <td>2</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Green Skirt</td>
                                            <td>Skirts</td>
                                            <td>24.62</td>
                                            <td>92</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Printed Dress</td>
                                            <td>Dresses</td>
                                            <td>49.29</td>
                                            <td>60</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>White T-Shirt</td>
                                            <td>T-Shirts</td>
                                            <td>69.11</td>
                                            <td>101</td>
                                            <td>false</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Red Hoodie</td>
                                            <td>Hoodies</td>
                                            <td>10.24</td>
                                            <td>19</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Red Hoodie</td>
                                            <td>Hoodies</td>
                                            <td>59.36</td>
                                            <td>101</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Summer Dress</td>
                                            <td>Dresses</td>
                                            <td>64.21</td>
                                            <td>34</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Black Shoes</td>
                                            <td>Shoes</td>
                                            <td>69.73</td>
                                            <td>4</td>
                                            <td>false</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Yellow Bag</td>
                                            <td>Bags</td>
                                            <td>57.37</td>
                                            <td>58</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Brown Shoes</td>
                                            <td>Shoes</td>
                                            <td>68.4</td>
                                            <td>125</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Brown Shoes</td>
                                            <td>Shoes</td>
                                            <td>53.6</td>
                                            <td>27</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>12</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Night Dress</td>
                                            <td>Dresses</td>
                                            <td>10.24</td>
                                            <td>188</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Red Hoodie</td>
                                            <td>Hoodies</td>
                                            <td>24.62</td>
                                            <td>147</td>
                                            <td>false</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Red Hoodie</td>
                                            <td>Hoodies</td>
                                            <td>49.29</td>
                                            <td>21</td>
                                            <td>false</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>15</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Summer Dress</td>
                                            <td>Dresses</td>
                                            <td>69.11</td>
                                            <td>10</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Red Hoodie</td>
                                            <td>Hoodies</td>
                                            <td>10.24</td>
                                            <td>68</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>17</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Printed Dress</td>
                                            <td>Dresses</td>
                                            <td>59.36</td>
                                            <td>66</td>
                                            <td>false</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Blouse</td>
                                            <td>Dresses</td>
                                            <td>64.21</td>
                                            <td>60</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Leather Belt</td>
                                            <td>Belts</td>
                                            <td>69.73</td>
                                            <td>78</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>20</td>
                                            <td><img class="product-image"
                                                     src="../assets/images/backgrounds/january.jpg"></td>
                                            <td>Leather Belt</td>
                                            <td>Belts</td>
                                            <td>57.37</td>
                                            <td>2</td>
                                            <td>true</td>
                                            <td>
                                                <button type="button" class="btn btn-icon" aria-label="Product details">
                                                    <i class="icon icon-pencil s-4"></i>
                                                </button>
                                            </td>
                                        </tr>-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- / CONTENT -->
                    </div>

                    <script type="text/javascript" src="../assets/js/apps/e-commerce/products/products.js"></script>
                </div>

            </div>

            <div class="quick-panel-sidebar" fuse-cloak data-fuse-bar="quick-panel-sidebar"
                 data-fuse-bar-position="right">
                <div class="list-group" class="date">

                    <div class="list-group-item subheader">TODAY</div>

                    <div class="list-group-item two-line">

                        <div class="text-muted">

                            <div class="h1"> Monday</div>

                            <div class="h2 row no-gutters align-items-start">
                                <span> 12</span>
                                <span class="h6">th</span>
                                <span> Jun</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Events</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Group Meeting</h3>

                            <p>In 32 Minutes, Room 1B</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Public Beta Release</h3>

                            <p>11:00 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Dinner with David</h3>

                            <p>17:30 PM</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Q&A Session</h3>

                            <p>20:30 PM</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Notes</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Best songs to listen while working</h3>

                            <p>Last edit: May 8th, 2015</p>
                        </div>

                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">

                            <h3>Useful subreddits</h3>

                            <p>Last edit: January 12th, 2015</p>
                        </div>

                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Quick Settings</div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Notifications</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Cloud Sync</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Retro Thrusters</h3>
                        </div>

                        <div class="secondary-container">

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"/>
                                <span class="custom-control-indicator"></span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

<!-- Mirrored from fuse-bootstrap4-material.withinpixels.com/vertical-layout-below-toolbar-left-navigation/apps-e-commerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 09:20:22 GMT -->
</html>