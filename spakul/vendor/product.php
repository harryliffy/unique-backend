<?php
session_start();

?>


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Morris Chart Css-->
<link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!-- Colorpicker Css -->
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
<!-- Dropzone Css -->
<link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
<!-- Multi Select Css -->
<link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">
<!-- Bootstrap Spinner Css -->
<link href="assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
<!-- Bootstrap Tagsinput Css -->
<link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<!-- noUISlider Css -->
<link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

<link href="assets/css/main.css" rel="stylesheet">
<!-- Custom Css -->

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="product.js"></script>


<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/login.css" rel="stylesheet">

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader --> 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="#" class="mfb-component__button--main g-bg-cyan">
      <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i>
      <i class="mfb-component__main-icon--active zmdi zmdi-close"></i>
    </a>
    <ul class="mfb-component__list">
      <li>
        <a href="mail-inbox.html" data-mfb-label="Inbox" class="mfb-component__button--child bg-blue">
          <i class="zmdi zmdi-email mfb-component__child-icon"></i>
        </a>
      </li>
      <li>
        <a href="chat.html" data-mfb-label="Chat App" class="mfb-component__button--child bg-orange">
          <i class="zmdi zmdi-comments mfb-component__child-icon"></i>
        </a>
      </li>

      <li>
        <a href="blog.html" data-mfb-label="Blogger" class="mfb-component__button--child bg-purple">
          <i class="zmdi zmdi-blogger mfb-component__child-icon"></i>
        </a>
      </li>
    </ul>
  </li>
</ul>
<!-- #Float icon -->
<!-- Morphing Search  -->
<div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Search..." class="form-control morphsearch-input" />
            <button class="morphsearch-submit" type="submit">Search</button>
        </div>
    </form>
    <div class="morphsearch-content">
        <div class="dummy-column">
            <h2>People</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="http://twitter.com/rachsmithtweets"> <img class="round" src="assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="http://www.twitter.com/peterfinlan"> <img class="round" src="assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="http://www.twitter.com/pcridesagain"> <img class="round" src="assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="https://twitter.com/twholman"> <img class="round" src="assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a> <a class="dummy-media-object" href="https://twitter.com/shaund0na"> <img class="round" src="assets/images/random-avatar2.jpg" alt=""/>
            <h3>Shaun Dona</h3>
            </a> </div>
        <div class="dummy-column">
            <h2>Popular</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="http://twitter.com/rachsmithtweets"> <img class="round" src="assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="http://www.twitter.com/peterfinlan"> <img class="round" src="assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="http://www.twitter.com/pcridesagain"> <img class="round" src="assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="https://twitter.com/twholman"> <img class="round" src="assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a> <a class="dummy-media-object" href="https://twitter.com/shaund0na"> <img class="round" src="assets/images/random-avatar2.jpg" alt=""/>
            <h3>Shaun Dona</h3>
            </a> </div>
        <div class="dummy-column">
            <h2>Recent</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="assets/images/random-avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="http://twitter.com/rachsmithtweets"> <img class="round" src="assets/images/random-avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="http://www.twitter.com/peterfinlan"> <img class="round" src="assets/images/random-avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="http://www.twitter.com/pcridesagain"> <img class="round" src="assets/images/random-avatar6.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="https://twitter.com/twholman"> <img class="round" src="assets/images/random-avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a> <a class="dummy-media-object" href="https://twitter.com/shaund0na"> <img class="round" src="assets/images/random-avatar2.jpg" alt=""/>
            <h3>Shaun Dona</h3>
            </a> </div>
    </div>
    <!-- /morphsearch-content --> 
    <span class="morphsearch-close"></span> </div>
<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="container-fluid">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index-2.html">Swift - Admin</a> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i> <span class="label-count">7</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green"><i class="zmdi zmdi-account-add"></i></div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-cyan"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-orange"><i class="zmdi zmdi-edit"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue-grey"><i class="zmdi zmdi-comment-alt-text"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green"><i class="zmdi zmdi-refresh-alt"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"><i class="zmdi zmdi-settings"></i></div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <!-- #END# Notifications --> 
            <!-- Tasks -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i><span class="label-count">9</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks">
                            <li> <a href="javascript:void(0);">
                                <h4> Footer display issue <small>32%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Make new buttons <small>45%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Create new dashboard <small>54%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Solve transition issue <small>65%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> </div>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <h4> Answer GitHub questions <small>92%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%"> </div>
                                </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
                </ul>
            </li>
            <!-- #END# Tasks -->
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">            
           <div class="admin-image">
                <img src="assets/images/random-avatar7.jpg" alt="">
           </div>
           <div class="admin-action-info">
                <span>Welcome</span>
                <h3>John Smith</h3>
                <ul>
                     <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a data-placement="bottom" title="Full Screen" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                </ul>
           </div>
           <div class="quick-stats">
                <h5>Today Report</h5>
                <ul>
                     <li><span>456<i>Sales</i></span></li>
                     <li><span>2,345<i>Order</i></span></li>
                     <li><span>$120<i>Revenue</i></span></li>
                </ul>
           </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="index-2.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span> </a> </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-email"></i><span>Mail Box</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="mail-inbox.html">Inbox</a></li>
                        
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="basic.html">Cards Basic</a></li>
                        <li> <a href="colored.html">Cards Colored</a></li>
                        <li> <a href="no-header.html">Cards No Header</a></li>
                        <li> <a href="infobox-1.html">Info box-1</a></li>
                        <li> <a href="infobox-2.html">Info box-2</a></li>
                        <li> <a href="infobox-3.html">Info box-3</a></li>
                        <li> <a href="infobox-4.html">Info box-4</a></li>
                        <li> <a href="infobox-5.html">Info box-5</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                    <ul class="ml-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li> <a href="helper-classes.html">Helper Classes</a></li>
                        <li> <a href="alerts.html">Alerts</a> </li>
                        <li> <a href="animations.html">Animations</a></li>
                        <li> <a href="badges.html">Badges</a></li>
                        <li> <a href="breadcrumbs.html">Breadcrumbs</a></li>
                        <li> <a href="buttons.html">Buttons</a> </li>
                        <li> <a href="collapse.html">Collapse</a> </li>
                        <li> <a href="colors.html">Colors</a> </li>
                        <li> <a href="dialogs.html">Dialogs</a> </li>
                        <li> <a href="icons.html">Icons</a> </li>
                        <li> <a href="labels.html">Labels</a> </li>
                        <li> <a href="list-group.html">List Group</a> </li>
                        <li> <a href="media-object.html">Media Object</a> </li>
                        <li> <a href="modals.html">Modals</a> </li>
                        <li> <a href="notifications.html">Notifications</a> </li>
                        <li> <a href="pagination.html">Pagination</a> </li>
                        <li> <a href="preloaders.html">Preloaders</a> </li>
                        <li> <a href="progressbars.html">Progress Bars</a> </li>
                        <li> <a href="range-sliders.html">Range Sliders</a> </li>
                        <li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                        <li> <a href="tabs.html">Tabs</a> </li>
                        <li> <a href="thumbnails.html">Thumbnails</a> </li>
                        <li> <a href="tooltips-popovers.html">Tooltips & Popovers</a> </li>
                        <li> <a href="waves.html">Waves</a> </li>
                    </ul>
                </li>
                <li  class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="basic-form-elements.html">Basic Form Elements</a> </li>
                        <li class="active"> <a href="advanced-form-elements.html">Advanced Form Elements</a> </li>
                        <li> <a href="form-examples.html">Form Examples</a> </li>
                        <li> <a href="form-validation.html">Form Validation</a> </li>
                        <li> <a href="form-wizard.html">Form Wizard</a> </li>
                        <li> <a href="editors.html">Editors</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="normal-tables.html">Normal Tables</a> </li>
                        <li> <a href="jquery-datatable.html">Jquery Datatables</a> </li>
                        <li> <a href="editable-table.html">Editable Tables</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-image"></i><span>Medias</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="image-gallery.html">Image Gallery</a> </li>
                        <li> <a href="carousel.html">Carousel</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="morris.html">Morris</a> </li>
                        <li> <a href="flot.html">Flot</a> </li>
                        <li> <a href="chartjs.html">ChartJS</a> </li>
                        <li> <a href="sparkline.html">Sparkline</a> </li>
                        <li> <a href="jquery-knob.html">Jquery Knob</a> </li>
                    </ul>
                </li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blogger</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="blog.html">Blog List</a></li>
                        <li> <a href="blog-details.html">Blog Single</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="sign-in.html">Sign In</a> </li>
                        <li> <a href="sign-up.html">Sign Up</a> </li>
                        <li> <a href="forgot-password.html">Forgot Password</a> </li>
                        <li> <a href="404.html">Page 404</a> </li>
                        <li> <a href="500.html">Page 500</a> </li>
                        <li> <a href="page-offline.html">Page Offline</a> </li>
                        <li> <a href="locked.html">Locked Screen</a> </li>
                        <li> <a href="blank.html">Blank Page</a> </li>
                        <li> <a href="calendar.html">Calendar</a> </li>
                        <li> <a href="timeline.html"> Timeline</a></li>
                        <li> <a href="chat.html"> Chat</a></li>
                        <li> <a href="invoices.html"> Invoices</a></li>
                        <li> <a href="search-results.html"> Search Results</a></li>
                        <li> <a href="landing-page.html"> Landing Page</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="google.html">Google Map</a> </li>
                        <li> <a href="yandex.html">YandexMap</a> </li>
                        <li> <a href="jvectormap.html">jVectorMap</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-trending-down"></i><span>Multi Level Menu</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="javascript:void(0);"> <span>Menu Item</span> </a> </li>
                        <li> <a href="javascript:void(0);"> <span>Menu Item - 2</span> </a> </li>
                        <li> <a href="javascript:void(0);" class="menu-toggle"> <span>Level - 2</span> </a>
                            <ul class="ml-menu">
                                <li> <a href="javascript:void(0);"> <span>Menu Item</span> </a> </li>
                                <li> <a href="javascript:void(0);" class="menu-toggle"> <span>Level - 3</span> </a>
                                    <ul class="ml-menu">
                                        <li> <a href="javascript:void(0);"> <span>Level - 4</span> </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a href="changelogs.html"><i class="zmdi zmdi-time-restore"></i><span>Changelogs</span> </a> </li>
                <li class="header">LABELS</li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li>
            </ul>
        </div>
        <!-- #Menu --> 
        <!-- Footer -->
        <div class="legal">
            <div class="copyright"> &copy; 2017 <a href="javascript:void(0);">Swift - Material Admin</a>. </div>
            <div class="version"> <b>Version: </b> 1.0.0 </div>
        </div>
        <!-- #Footer --> 
    </aside>
    <!-- #END# Left Sidebar --> 
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Skins</a></li>
            <li role="presentation"><a href="#chat" data-toggle="tab">Chat</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">Setting</a></li>            
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Recent</h6>
                    <ul>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar5.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Contacts</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a class="pull-left" role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar5.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a class="pull-left " role="button" tabindex="0"> <img class="media-object " src="assets/images/random-avatar6.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li> <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                        <li> <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar --> 
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ADVANCED FORM ELEMENTS</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <!-- Color Pickers -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> COLOR PICKERS <small>Taken from <a href="https://github.com/mjolnic/bootstrap-colorpicker/" target="_blank">github.com/mjolnic/bootstrap-colorpicker</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
					
					
								
	
 <div class="button-demo js-modal-buttons">
					 <a href="product"><button type="button" data-color="red" class="btn bg-red waves-effect">+ Add more</button></a>
					</div>
						
					<div class="signin-form">

	<div class="container">
     

        
      <form class="form-signin" method="post" id="acc-form">
	   
	           <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
	   
			<fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="productname" id="productname" required>
                                        <label class="form-label">Vendor Name*</label>
                                    </div>
                                </div>
								
								     <!--  <div class="form-group form-float">
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
                                </div>
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
                            </fieldset> -->
                            </fieldset>
	   <div class="form-group">
                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
            </div>
            <div class="text-center">
			 <button type="submit" class="btn btn-raised g-bg-cyan waves-effect" onmouseleave="reset();" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> Create an Account
			</button>
			
               <!-- <a href="#" class="btn btn-default button create-account" >SIGN UP</a>-->
            </div>
            <div class="m-t-10 m-b--5 align-center">
                <a href="index">You already have a membership?</a>
            </div>
	   
      
        <!--h2 class="form-signin-heading">Log In to WebApp.</h2><hr /-->
        
<?php echo $_SESSION['vendor_session'];    ?>
      </form>

    </div>
    
</div>


<script>
function reset(){
alert("javascript called");
document.getElementById("productname").value="";
document.getElementById("mname").value="";
document.getElementById("lname").value="";
document.getElementById("email").value="";
)

</script>	 

					
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6"> <b>HEX CODE</b>
                                <div class="input-group colorpicker">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="#00AABB">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span> </div>
                            </div>
                            <div class="col-md-6">
							

							
							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Color Pickers --> 
        <!-- File Upload | Drag & Drop OR With Click & Choose -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> FILE UPLOAD - DRAG & DROP OR WITH CLICK & CHOOSE <small>Taken from <a href="http://www.dropzonejs.com/" target="_blank">www.dropzonejs.com</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form action="http://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                            <div class="dz-message">
                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                <h3>Drop files here or click to upload.</h3>
                                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# File Upload | Drag & Drop OR With Click & Choose --> 


 
		
		
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js -- > 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="bootstrap/js/bootstrap.min.js"></script> <!--
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js -- > 
<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js --> <!--
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js -- > 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -- > 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -- > 
<script src="assets/js/morphing.js"></script> 
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 
<script src="assets/js/pages/ui/modals.js"></script> 
<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js -->
</body>


</html>