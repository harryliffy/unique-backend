<?php
require_once('classes/core.php');


// session_start();
/*
if(!isset($_SESSION['authentication_session']))
{
	header("Location: index");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['authentication_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
*/
?>
<!DOCTYPE html>
<html lang="en">
    

<head>        
        <!-- META SECTION -->
        <title>UBS - Responsive Admin </title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                           
    </head>
    <body class="x-dashboard">
        <!-- START PAGE CONTAINER -->
        <div class="page-container">            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="x-hnavigation">
                        <div class="x-hnavigation-logo">
                            <a href="index">UBS Admin</a>
                        </div>
                        <ul>
                            <li id="dashboard" class="">
                                <a href="dashboard">Home</a>
                            </li>
                            <li id="events" class="xn-openable">
                                <a href="#">Pages</a>
                                <ul>
                                <li><a href="events"><span class="fa fa-calendar"></span> Add events</a></li>
                                     <li><a href="#"><span class="fa fa-recycle"></span> Subscribers</a></li>
                                    
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#">Gallery</a>
                                <ul>
                                    <li><a href="#"><span class="fa fa-cube"></span> In tincidunt libero</a></li>
                                    <li><a href="#"><span class="fa fa-life-ring"></span> Praesent tortor</a></li>
                                 
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#">Notification</a>
                                <ul>
                                    <li><a href="#"><span class="fa fa-cube"></span> Contact</a></li>
                                    <li><a href="#"><span class="fa fa-life-ring"></span> Overview</a></li>
                       
                                </ul>
                            </li>
                            <li class="">
                                <a href="#">Help</a>
                            </li>             
                        </ul>
                        
                        <div class="x-features">
                            <div class="x-features-nav-open">
                                <span class="fa fa-bars"></span>
                            </div>
                            <div class="pull-right">
                                <div class="x-features-search">
                                    <input type="text" name="search">
                                    <input type="submit">
                                </div>
                                <div class="x-features-profile">
                                    <img src="assets/images/users/avatar.png">
                                    <ul class="xn-drop-left animated zoomIn">
                                    <li><a href=""><span class="fa fa-user"> </span>  <?php echo $row['user_name']; ?></a></li>
                                        <li><a href="pages-lock-screen.html"><span class="fa fa-gear"></span> Settings</a></li>
                                        <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                    </div>