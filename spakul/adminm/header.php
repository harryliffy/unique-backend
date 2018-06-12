<?php
session_start();

if(!isset($_SESSION['vendor_session']))
{
	header("Location:login");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM v_users WHERE vendorid=:uid");
$stmt->execute(array(":uid"=>$_SESSION['vendor_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

    

<head>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Project Dashboard</title>
<link rel="icon" href="../spakul.png" type="image/x-icon"><!-- Favicon-->
        <!-- STYLESHEETS -->
        <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>
		
		<script>
								function nac() {
 //var el = document.getElementById("div1");

// Single class
//el.classList.add("active");
document.getElementById("div1").className += " active";
document.getElementById("de").classList.remove("collapsed");
document.getElementById("div1").className += " collapsing";
document.getElementById("collapse-dashboards").className += " show";
}
								
								
								</script>

        <!-- Icons.css -->
        <link type="text/css" rel="stylesheet" href="../assets/icons/fuse-icon-font/style.css">

        <!-- Animate.css -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">

        <!-- PNotify -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/pnotify/pnotify.custom.min.css">

        <!-- Nvd3 - D3 Charts -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/nvd3/build/nv.d3.min.css"/>

        <!-- Perfect Scrollbar -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css"/>

        <!-- Fuse Html -->
        <link type="text/css" rel="stylesheet" href="../assets/vendor/fuse-html/fuse-html.min.css"/>

        <!-- Main CSS -->
        <link type="text/css" rel="stylesheet" href="../assets/css/main.css">
        <!-- / STYLESHEETS -->

        <!-- JAVASCRIPT -->

        <!-- jQuery -->
        <script type="text/javascript" src="../assets/vendor/jquery/dist/jquery.min.js"></script>

        <!-- Mobile Detect -->
        <script type="text/javascript" src="../assets/vendor/mobile-detect/mobile-detect.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script type="text/javascript"
                src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

        <!-- Popper.js -->
        <script type="text/javascript" src="../assets/vendor/popper.js/index.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- Nvd3 - D3 Charts -->
        <script type="text/javascript" src="../assets/vendor/d3/d3.min.js"></script>
        <script type="text/javascript" src="../assets/vendor/nvd3/build/nv.d3.min.js"></script>

        <!-- Data tables -->
        <script type="text/javascript" src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript"
                src="../assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>

        <!-- PNotify -->
        <script type="text/javascript" src="../assets/vendor/pnotify/pnotify.custom.min.js"></script>

        <!-- Fuse Html -->
        <script type="text/javascript" src="../assets/vendor/fuse-html/fuse-html.min.js"></script>

        <!-- Main JS -->
        <script type="text/javascript" src="../assets/js/main.js"></script>

        <!-- / JAVASCRIPT -->
    </head>

    <body class="layout layout-vertical layout-left-navigation layout-below-toolbar" onload="nac()">

        <div id="wrapper">

            <aside id="aside" class="aside aside-left"
                   data-fuse-bar="aside" data-fuse-bar-media-step="md"
                   data-fuse-bar-position="left">
                <div class="aside-content-wrapper">

                    <div class="aside-content">

                        <div class="aside-toolbar">

                            <div class="logo">
                                <span class="logo-icon">F</span><span class="logo-text">FUSE</span>
                            </div>

                            <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block"
                                    data-fuse-aside-toggle-fold>
                                <i class="icon icon-backburger"></i>
                            </button>

                        </div>

                        <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">
<!--<a href="#" onclick="nac()" >pkij</a>-->
                            <li class="subheader">
                                <span>APPS 
								<?php

/*

$str =$_SERVER['PHP_SELF']; //display current page url

$char =  "spakul/admin/"; // remove peceeding link to get file name
$str = explode($char, $str);
$nav= $str[1]; 
echo $nav;
try{
	if ($nav="index.php"){
		//echo 'good';
  	}
	}

	catch(PDOException $e){
		echo $e->getMessage();
							 */
							//		$relative_path =  echo $relative_path;?></span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-dashboards">

                                <a id="de" class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-dashboards"
                                   href="#"
                                   aria-expanded="true"
                                   aria-controls="collapse-dashboards">
                                    <i class="icon s-4 icon-tile-four"></i>
                                    <span>Dashboard</span>
                                </a>

                                <ul id="collapse-dashboards"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-dashboards"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="index"
                                           data-page-url="/index" id="div1">

                                            <span>Vendor Dashboard</span>
                                        </a>
                                    </li>

                                    <!--	<li class="nav-item">
                                        <a class="nav-link ripple " href="apps-dashboards-server.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Server</span>
                                        </a>
                                    </li>-->

                                </ul>
                            </li>

                           <!-- <li class="nav-item">
                                <a class="nav-link ripple " href="apps-calendar.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-calendar-today"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>-->
							
							
							

                            <li class="nav-item" role="tab" id="heading-ecommerce">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-ecommerce"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-ecommerce">
                                    <i class="icon s-4 icon-cart"></i>
                                    <span>Ecommerce</span>
                                </a>

                                <ul id="collapse-ecommerce"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-ecommerce"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="products"
                                           data-page-url="/products">

                                            <span>Products</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="quotes"
                                           data-page-url="quotes">

                                            <span>Quotes</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="ecommerce-orders"
                                           data-page-url="/ecommerce-orders">

                                            <span>Orders</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-mail"
                                   data-page-url="">
                                    <i class="icon s-4 icon-email"></i>
                                    <span>Mail</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-chat.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-hangouts"></i>
                                    <span>Chat</span>
                                </a>
                            </li>

                         

                            <li class="subheader">
                                <span>PAGES</span>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="profile"
                                   data-page-url="profile">
                                    <i class="icon s-4 icon-account"></i>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-search.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-magnify"></i>
                                    <span>Search</span>
                                </a>
                            </li>
							   <li class="nav-item">
                                <a class="nav-link ripple " href="apps-file-manager.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-folder"></i>
                                    <span>File Manager</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-contacts.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-account-box"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-todo.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-checkbox-marked"></i>
                                    <span>To-Do</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>USER INTERFACE</span>
                            </li>

                         <!--   <li class="nav-item" role="tab" id="heading-elements">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-elements"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-elements">
                                    <i class="icon s-4 icon-layers"></i>
                                    <span>Elements</span>
                                </a>

                                <ul id="collapse-elements"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-elements"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-alerts.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Alerts</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-badges.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Badges</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-breadcrumb.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Breadcrumb</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-buttons.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Buttons</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-button-group.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Button Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-cards.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Cards</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-dropdowns.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Dropdowns</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-forms.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Forms</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-input-group.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Input Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-jumbotron.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Jumbotron</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-list-group.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>List Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navs.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Navs</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navbar.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Navbar</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-pagination.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Pagination</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-progress.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Progress</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item" role="tab" id="heading-tables">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-tables"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-tables">
                                    <i class="icon s-4 icon-table-large"></i>
                                    <span>Tables</span>
                                </a>

                                <ul id="collapse-tables"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-tables"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-tables-simple-table.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Simple Table</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-tables-data-table.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Data Table</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item" role="tab" id="heading-page-layouts">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-page-layouts"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-page-layouts">
                                    <i class="icon s-4 icon-view-quilt"></i>
                                    <span>Page Layouts</span>
                                </a>

                                <ul id="collapse-page-layouts"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-page-layouts"
                                    data-children=".nav-item">

                                    <li class="nav-item" role="tab" id="heading-carded">

                                        <a class="nav-link ripple with-arrow collapsed"
                                           data-toggle="collapse"
                                           data-target="#collapse-carded"
                                           href="#"
                                           aria-expanded="false"
                                           aria-controls="collapse-carded">

                                            <span>Carded</span>
                                        </a>

                                        <ul id="collapse-carded"
                                            class="collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-carded"
                                            data-children=".nav-item">

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-full-width.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-left-sidebar.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-carded-right-sidebar.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Right Sidebar</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item" role="tab" id="heading-simple">

                                        <a class="nav-link ripple with-arrow collapsed"
                                           data-toggle="collapse"
                                           data-target="#collapse-simple"
                                           href="#"
                                           aria-expanded="false"
                                           aria-controls="collapse-simple">

                                            <span>Simple</span>
                                        </a>

                                        <ul id="collapse-simple"
                                            class="collapse"
                                            role="tabpanel"
                                            aria-labelledby="heading-simple"
                                            data-children=".nav-item">

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-full-width.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar-inner.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Left Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-left-sidebar-floating.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Left Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Right Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar-inner.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Right Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-right-sidebar-floating.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Right Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple "
                                                   href="user-interface-page-layouts-simple-tabbed.html"
                                                   data-page-url="/apps-dashboards-project.html">

                                                    <span>Tabbed</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-page-layouts-blank.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>Blank</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-colors.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-palette"></i>
                                    <span>Colors</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>COMPONENTS</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-charts">

                                <a class="nav-link ripple with-arrow collapsed"
                                   data-toggle="collapse"
                                   data-target="#collapse-charts"
                                   href="#"
                                   aria-expanded="false"
                                   aria-controls="collapse-charts">
                                    <i class="icon s-4 icon-poll"></i>
                                    <span>Charts</span>
                                </a>

                                <ul id="collapse-charts"
                                    class="collapse"
                                    role="tabpanel"
                                    aria-labelledby="heading-charts"
                                    data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="components-charts-nvd3.html"
                                           data-page-url="/apps-dashboards-project.html">

                                            <span>nvD3</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-collapse.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-plus-box"></i>
                                    <span>Collapse</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-modal.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-window-maximize"></i>
                                    <span>Modal</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-popovers.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-tooltip-outline"></i>
                                    <span>Popovers</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-snackbar.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-page-layout-footer"></i>
                                    <span>Snackbar</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-tooltips.html"
                                   data-page-url="/apps-dashboards-project.html">
                                    <i class="icon s-4 icon-tooltip"></i>
                                    <span>Tooltips</span>
                                </a>
                            </li>-->

                        </ul>
                    </div>
                </div>
            </aside>

            <div class="content-wrapper">

                <nav id="toolbar" class="fixed-top bg-white">

                    <div class="row no-gutters align-items-center flex-nowrap">

                        <div class="col">

                            <div class="row no-gutters align-items-center flex-nowrap">

                                <button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none"
                                        data-fuse-bar-toggle="aside">
                                    <i class="icon icon-menu"></i>
                                </button>

                                <div class="toolbar-separator d-block d-lg-none"></div>

                                <div class="shortcuts-wrapper row no-gutters align-items-center px-0 px-sm-2">

                                    <div class="shortcuts row no-gutters align-items-center d-none d-md-flex">

                                        <a href="apps-chat.html" class="shortcut-button btn btn-icon mx-1">
                                            <i class="icon icon-hangouts"></i>
                                        </a>

                                        <a href="apps-contacts.html" class="shortcut-button btn btn-icon mx-1">
                                            <i class="icon icon-account-box"></i>
                                        </a>

                                        <a href="apps-mail.html" class="shortcut-button btn btn-icon mx-1">
                                            <i class="icon icon-email"></i>
                                        </a>

                                    </div>

                                    <div class="add-shortcut-menu-button dropdown px-1 px-sm-3">

                                        <div class="dropdown-toggle btn btn-icon" role="button"
                                             id="dropdownShortcutMenu"
                                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-star text-amber-600"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownShortcutMenu">

                                            <a class="dropdown-item" href="#">
                                                <div
                                                    class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                    <div class="row no-gutters align-items-center flex-nowrap">
                                                        <i class="icon icon-calendar-today"></i>
                                                        <span class="px-3">Calendar</span>
                                                    </div>
                                                    <i class="icon icon-pin s-5 ml-2"></i>
                                                </div>
                                            </a>

                                            <a class="dropdown-item" href="#">
                                                <div
                                                    class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                    <div class="row no-gutters align-items-center flex-nowrap">
                                                        <i class="icon icon-folder"></i>
                                                        <span class="px-3">File Manager</span>
                                                    </div>
                                                    <i class="icon icon-pin s-5 ml-2"></i>
                                                </div>
                                            </a>

                                            <a class="dropdown-item" href="#">
                                                <div
                                                    class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                    <div class="row no-gutters align-items-center flex-nowrap">
                                                        <i class="icon icon-checkbox-marked"></i>
                                                        <span class="px-3">To-Do</span>
                                                    </div>
                                                    <i class="icon icon-pin s-5 ml-2"></i>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="toolbar-separator"></div>

                            </div>
                        </div>

                        <div class="col-auto">

                            <div class="row no-gutters align-items-center justify-content-end">

                                <div class="user-menu-button dropdown">

                                    <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4"
                                         role="button"
                                         id="dropdownUserMenu"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="avatar-wrapper">
                                            <img class="avatar" src="../assets/images/avatars/profile.jpg">
                                            <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                                        </div>
                                        <span class="username mx-3 d-none d-md-block"><?php try{
				
				$vendor_id=$_SESSION['vendor_session'];
				
			$stmtb = $db_con->prepare("SELECT * FROM vendor WHERE vendor_id=:vendor_id");
			$stmtb->execute(array(":vendor_id"=>$vendor_id));
			$rowb = $stmtb->fetch(PDO::FETCH_ASSOC);
			$countb = $stmtb->rowCount();
			$vauth=$rowb['vendor_name'];
			echo $vauth;
			//echo $vendor_id;	
	
		
		if($vauth==""){
	 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=create">';
}
			}	
			
			catch(PDOException $e){
			echo $e->getMessage();
		}?></span>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-account"></i>
                                                <span class="px-3">My Profile</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-email"></i>
                                                <span class="px-3">Inbox</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="status text-green icon-checkbox-marked-circle"></i>
                                                <span class="px-3">Online</span>
                                            </div>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="logout">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-logout"></i>
                                                <span class="px-3">Logout</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="toolbar-separator"></div>

                                <button type="button" class="search-button btn btn-icon">
                                    <i class="icon icon-magnify"></i>
                                </button>

                                <div class="toolbar-separator"></div>

                                <div class="language-button dropdown">

                                    <div
                                        class="dropdown-toggle ripple row align-items-center justify-content-center no-gutters px-0 px-sm-4"
                                        role="button"
                                        id="dropdownLanguageMenu"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="row no-gutters align-items-center">
                                            <img class="flag mr-2" src="../assets/images/flags/us.png">
                                            <span class="d-none d-md-block">EN</span>
                                        </div>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguageMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <img class="flag" src="../assets/images/flags/us.png">
                                                <span class="px-3">English</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <img class="flag" src="../assets/images/flags/es.png">
                                                <span class="px-3">Spanish</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <img class="flag" src="../assets/images/flags/tr.png">
                                                <span class="px-3">Turkish</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="toolbar-separator"></div>

                                <button type="button" class="quick-panel-button btn btn-icon"
                                        data-fuse-bar-toggle="quick-panel-sidebar">
                                    <i class="icon icon-format-list-bulleted"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                </nav>
