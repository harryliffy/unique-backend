<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Mail</title>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","php.php?q="+str,true);
  xmlhttp.send();
}
</script>
  <!-- STYLESHEETS -->
  <style type="text/css">
    [fuse-cloak], .fuse-cloak {
      display: none !important;
    }
  </style>

  <!-- Icons.css -->
  <link type="text/css" rel="stylesheet" href="../assets/icons/fuse-icon-font/style.css">
  <!-- Icons.css -->
  <link type="text/css" rel="stylesheet" href="../assets/icons/fuse-icon-font/style.css">

  <!-- Animate.css -->
  <link type="text/css" rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">

  <!-- PNotify -->
  <link type="text/css" rel="stylesheet" href="../assets/vendor/pnotify/pnotify.custom.min.css">

  <!-- Nvd3 - D3 Charts -->
  <link type="text/css" rel="stylesheet" href="../assets/vendor/nvd3/build/nv.d3.min.css" />

  <!-- Perfect Scrollbar -->
  <link type="text/css" rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

  <!-- Fuse Html -->
  <link type="text/css" rel="stylesheet" href="../assets/vendor/fuse-html/fuse-html.min.css" />

  <!-- Main CSS -->
  <link type="text/css" rel="stylesheet" href="../assets/css/main.css">
  <!-- / STYLESHEETS -->

  <!-- JAVASCRIPT -->

  <!-- jQuery -->
  <script type="text/javascript" src="../assets/vendor/jquery/dist/jquery.min.js"></script>

  <!-- Mobile Detect -->
  <script type="text/javascript" src="../assets/vendor/mobile-detect/mobile-detect.min.js"></script>

  <!-- Perfect Scrollbar -->
  <script type="text/javascript" src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

  <!-- Popper.js -->
  <script type="text/javascript" src="../assets/vendor/popper.js/index.js"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- Nvd3 - D3 Charts -->
  <script type="text/javascript" src="../assets/vendor/d3/d3.min.js"></script>
  <script type="text/javascript" src="../assets/vendor/nvd3/build/nv.d3.min.js"></script>

  <!-- Data tables -->
  <script type="text/javascript" src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="../assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>

  <!-- PNotify -->
  <script type="text/javascript" src="../assets/vendor/pnotify/pnotify.custom.min.js"></script>

  <!-- Fuse Html -->
  <script type="text/javascript" src="../assets/vendor/fuse-html/fuse-html.min.js"></script>

  <!-- Main JS -->
  <script type="text/javascript" src="../assets/js/main.js"></script>

  <!-- / JAVASCRIPT -->
</head>
<?php
include_once("header.php");
?>
      <div class="content">
        <div id="mail" class="page-layout carded left-sidebar">

          <div class="top-bg bg-primary"></div>

          <div class="page-content-wrapper">

            <aside class="page-sidebar" data-fuse-bar="mail-sidebar" data-fuse-bar-media-step="md">
              <!-- HEADER -->
              <div class="header d-flex flex-column justify-content-between p-6 bg-primary text-auto">

                <div class="logo d-flex align-items-center pt-7">
                  <i class="icon-email mr-4"></i>
                  <span class="logo-text h4">Mailbox</span>
                </div>

                <div class="account">
                  <div class="title"><h2><?php
			
			try{
				
				$vendor_id=$_SESSION['vendor_session'];
				
			$stmta = $db_con->prepare("SELECT * FROM vendor WHERE vendor_id=:vendor_id");
			$stmta->execute(array(":vendor_id"=>$vendor_id));
			$rowa = $stmta->fetch(PDO::FETCH_ASSOC);
			$counta = $stmta->rowCount();
			echo $rowa['vendor_name'];
		//$ty= $row['profilepix'];
			}
			
			catch(PDOException $e){
			echo $e->getMessage();
		}
	
			
			?></h2></div>
                </div>

              </div>
              <!-- / HEADER -->

              <div>

                <div class="p-6">
                  <button type="button" class="btn btn-primary btn-block">COMPOSE</button>
                </div>

                <ul class="nav flex-column">

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-inbox"></i>
                      <span>Inbox</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-send"></i>
                      <span>Sent</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-email-open"></i>
                      <span>Drafts</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-delete"></i>
                      <span>Trash</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-alert-octagon"></i>
                      <span>Spam</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-star"></i>
                      <span>Starred</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-label"></i>
                      <span>Important</span>
                    </a>
                  </li>

                  <li class="subheader">
                    Labels
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-label"></i>
                      <span>Notes</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-label"></i>
                      <span>Paypal</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-label"></i>
                      <span>Invoices</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link ripple" href="#">
                      <i class="icon s-4 icon-label"></i>
                      <span>Amazon</span>
                    </a>
                  </li>

                </ul>
              </div>
            </aside>

            <!-- CONTENT -->
            <div class="page-content">
              <!-- HEADER -->
              <div class="header d-flex flex-column justify-content-center bg-primary text-auto">

                <div class="search-bar row align-items-center no-gutters bg-white text-auto">

                  <button type="button" class="sidebar-toggle-button btn btn-icon d-block d-lg-none" data-fuse-bar-toggle="mail-sidebar">
                                            <i class="icon icon-menu"></i>
                                        </button>

                  <i class="icon-magnify s-6 mx-4"></i>

                  <input class="search-bar-input col" type="text" placeholder="Search for an e-mail or contact">

                </div>
              </div>
              <!-- / HEADER -->

              <div class="page-content-card">

                <!-- CONTENT TOOLBAR -->
                <div class="toolbar row no-gutters align-items-center p-4 p-sm-6">

                  <div class="col">

                    <div class="row no-gutters align-items-center">

                      <div class="col-auto">

                        <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"/>
                                                        <span class="custom-control-indicator"></span>
                                                    </label>

                      </div>

                      <div class="action-buttons col">

                        <div class="row no-gutters align-items-center flex-nowrap d-none d-xl-flex">

                          <div class="divider-vertical"></div>

                          <button type="button" class="btn btn-icon" aria-label="archive">
                                                            <i class="icon icon-archive"></i>
                                                        </button>

                          <button type="button" class="btn btn-icon" aria-label="spam">
                                                            <i class="icon icon-alert-octagon"></i>
                                                        </button>

                          <button type="button" class="btn btn-icon" aria-label="delete">
                                                            <i class="icon icon-delete"></i>
                                                        </button>

                          <div class="divider-vertical"></div>

                          <button type="button" class="btn btn-icon" aria-label="move to">
                                                            <i class="icon icon-folder"></i>
                                                        </button>

                          <button type="button" class="btn btn-icon" aria-label="labels">
                                                            <i class="icon icon-label"></i>
                                                        </button>

                          <button type="button" class="btn btn-icon" aria-label="move to">
                                                            <i class="icon icon-folder"></i>
                                                        </button>

                          <div class="divider-vertical"></div>

                          <button type="button" class="btn btn-icon" aria-label="more">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">

                    <div class="row no-gutters align-items-center">

                      <span class="page-info px-2 d-none d-sm-block">1 - 100 of 980</span>

                      <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-chevron-left"></i>
                                                </button>

                      <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-chevron-right"></i>
                                                </button>

                      <button type="button" class="btn btn-icon">
                                                    <i class="icon icon-settings"></i>
                                                </button>

                    </div>
                  </div>
                </div>
                <!-- / CONTENT TOOLBAR -->
				
<style>
.scrollbar
{
	margin-left: 30px;
	float: left;
	height: 300px;
	width: 65px;
	background: #c1c1c1;
	overflow-y: scroll;
	margin-bottom: 25px;
}

.force-overflow
{
	min-height: 450px;
}



/*
 *  STYLE 1
 */

#style-1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius:7px;
	background-color: f5f5f5; /* color of scroll track */
}

#style-1::-webkit-scrollbar
{
	width: 7px;
	background-color: #c1c1c1;
}

#style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(117,117,117,0.1);
	background-color:#111;
}

</style>
	
	
	
                <div class="thread-list col-md-6 pull-right " id="style-1" style="height:636px !important; overflow-y:auto !important;" >
			<!--sscanf  -->
 <div id="txtHint"><b></b></div>						
 </div>
 
 <div class="thread-list col-md-6" id="style-1" style="height:636px !important; overflow-y:auto !important;">
  <?php
						include('dbconfig.php');							
						try{
				//include_once("dbconfig.php");
				//$_SESSION['vendor_session']="zainazeezinfo@zainazeez.com";
				$vendor_id=$_SESSION['vendor_session'];							

$mail = $db_con->prepare("SELECT * FROM quote WHERE vendor=:vendor_id ORDER BY date DESC");
			$mail->execute(array(":vendor_id"=>$vendor_id));
		//echo'<select name="users" onchange="showUser(this.value)" class="form-control" >';
			while($rmail = $mail->fetch(PDO::FETCH_ASSOC)){	
									
			//echo $rmail['date'];	echo '<br>';	
			$q=$rmail["refid"];
			
			
	echo '<br>';


echo '
       <div class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 unread">
	   
				            <label class="col-auto custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"/>
                                                <span class="custom-control-indicator"></span>
                                            </label>

                    <div class="info col px-4">

                      <div class="name row no-gutters align-items-center">

                        <img class="avatar mr-2" alt="Alice Freeman" src="../assets/images/avatars/alice.jpg" />

                        <span class="">';echo $rmail["uname"]; echo'</span>
<input type="radio" onclick="showUser(this.value)" class="" name="users" value="';echo $rmail["refid"]; echo'" checked="" />
                        <i class="icon-paperclip has-attachment s-4"></i>

                      </div>

                      <div class="subject">
                        Commits that need to be pushed lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </div>

                      <div class="message">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lorem diam,...

                          <div class="labels">

                            <div class="label badge badge-default" style="background-color:#607D8B;">
                              paypal
                            </div>

                          </div>

                      </div>

                    </div>

                    <div class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

                      <div class="time mb-2">';
					  $time=$rmail["date"];
					  $str=substr($time, 0, strrpos($time, ' '));
					  echo $str;
					  //echo date('d m y',$str);
					  //$newformat = date('y d F ',$str);
					  /*echo $newformat;*/ echo'</div>

                      <div class="actions row no-gutters">

                        <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                        <button type="button" class="btn btn-icon">

                                                        <i class="icon-label"></i>

                                                    </button>

                      </div>
                    </div>
                  </div>';

						}
		//	echo'</select>';
					echo $q;						}		 
													
		catch(PDOException $e){
			echo $e->getMessage();
		}											
				?>						
 </div>
             <!-- / CONTENT -->

          </div>
        </div>
      </div>

    </div>

    <div class="quick-panel-sidebar" fuse-cloak data-fuse-bar="quick-panel-sidebar" data-fuse-bar-position="right">
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

<!-- Mirrored from fuse-bootstrap4-material.withinpixels.com/vertical-layout-below-toolbar-left-navigation/apps-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 09:20:24 GMT -->

</html>