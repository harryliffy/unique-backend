<?php 
session_start();
include('header.php');
include('dbconfig.php');
?>
                   
                    <div class="x-content-tabs">
                        <ul>
                            <li><a href="#main-tab" class="icon active"><span class="fa fa-desktop"></span></a></li>
                            <!--li><a href="#second-tab"><span class="fa fa-life-ring"></span><span>Second tab</span></a></li-->
                            <!--li><a href="#third-tab"><span class="fa fa-microphone"></span><span>Third tab</span></a></li-->                            
                            <li><a href="#new-tab" class="icon"><span class="fa fa-plus"></span></a></li>
                        </ul>
                    </div>
                    <div class="x-content">
                        <div id="main-tab">
                            <div class="x-content-title">
                                <h1>Events</h1>
                                <div class="pull-right">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->


  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<!--script type="text/javascript" src="event.js"></script-->
<script type="text/javascript" src="events.js"></script>

<div class="container">
  
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-calendar"></span> Add New School Event</h4>
        </div>
        <div class="modal-body">
        <form class="form-signin form-horizontal" method="post" id="login-form">
    
    <div class="form-group">
<div class="col-md-12">
<div id="error">
<!-- error will be shown here ! -->
</div>
</div></div>
<!--div class="form-group">
<div class="col-md-12">
<input type="email" class="form-control" required placeholder="Email address" name="user_auth_email" id="user_email" />
<span id="check-e"></span>
</div>
</div>

<div class="form-group">
<div class="col-md-12">
<input type="password"  class="form-control"  placeholder="Password" name="user_auth_password" id="password" required />
</div>
</div-->
<br>

 
 <div class="form-group">
<div class="col-md-12">
<div id="error">
<!-- error will be shown here ! -->
</div>
</div></div>
<div class="form-group">
<div class="col-md-12">
<input type="text" class="form-control"  placeholder="Event Title" name="event_title" id="event_title" />
<span id="check-e"></span>
</div>
</div>
<br>
<div class="form-group">
<div class="col-md-12">
<input type="text"  class="form-control"  placeholder="Location" name="event_location" id="event_location"  />
</div>
</div>
<br>
<div class="form-group">
<div class="col-md-12">
<input type="date"  class="form-control"  placeholder="Event Date" name="event_date" id="event_date"  />
</div>

</div>
<br>
<div class="form-group">
<div class="col-md-12">
<textarea col="4" class="form-control"  placeholder="Event Description" name="event_description" id="event_description" ></textarea>
</div>
</div>
<br>




<div class="form-group">
<div class="col-md-6">
<button type="submit" class=" btn btn-info btn-block" name="btn-login" id="btn-login">
<span class="glyphicon glyphicon-log-in"></span> &nbsp; Publish Event
</button> 
</div>  
</div>
<br>
</form>

    <script type="text/javascript" src="https://spakul.com/app/vendor/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://spakul.com/app/vendor/js/jquery.form.min.js"></script>

<script type="text/javascript">
$(document).ready(function() { 
	var options = { 
			target:   '#output',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			success:       afterSuccess,  // post-submit callback 
			uploadProgress: OnProgress, //upload progress callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		}); 
		

//function after succesful file upload (when server response)
function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	$('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#FileInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#FileInput')[0].files[0].size; //get file size
		var ftype = $('#FileInput')[0].files[0].type; // get file type
		

		//allow file types 
		switch(ftype)
        {
            case 'image/png': 
			case 'image/gif': 
			case 'image/jpeg': 
			case 'image/pjpeg':
			case 'text/plain':
			case 'text/html':
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			case 'application/vnd.ms-excel':
			case 'video/mp4':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 5 MB (1048576)
		if(fsize>5242880) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox').show();
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="upload-wrapper">
<div align="center">
<h3>Ajax File Uploader</h3>
<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
<input name="FileInput" id="FileInput" type="file" />
<input type="submit"  id="submit-btn" value="Upload" />
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
<div id="output"></div>

</div>
</div>     

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
                                   
                                </div>
                            </div>
                         
                            
                            <div class="x-content-inner">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="x-block">
                                            <div class="x-block-head">
                                                <!--h3>COMMENTS</h3-->
                                                <div class="pull-right">     
                                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info"><span class="fa fa-plus"></span> Add Event</button>                                               
                                                    <button class="btn btn-default">ACTIONS <span class="fa fa-angle-down" style="margin-left: 20px;"></span></button>
                                                </div>                                            
                                            </div>
                                            <div class="x-block-content">                                                                                                
                                                <table class="table x-table">
                                                    <tr>
                                                        <th><label class="check"><input type="checkbox" name="checkall" class="icheckbox"></label></th>
                                                        <th width="30%">AUTHOR</th>
                                                        <th width="40%">DESCRIPTION</th>
                                                        <th width="30%">TITLE</th>                                                    
                                                    </tr>
                                                 
                                                    <?php
                                                    try { // wonder magic data read formdabase table
    $stmt = $db_con->query("SELECT *  FROM sch_events ORDER BY event_date ASC ");  // query to select all
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo' <tr>
                                                        <td><label class="check"><input type="checkbox" class="icheckbox"></label></td>
                                                        <td>
                                                            <a href="#" class="x-user">
                                                            <img src="assets/images/users/avatar.png">
                                                                <span>UBS Admin</span>
                                                            </a>
                                                            <span>'.$row['event_date'].'</span>
                                                        </td>
                                                        <td>'.$row['event_location'].'Nice job with maecenas mi lorem, placerat eget dolor id, porta iaculis tortor. Nam suscipit tempus nisi, sed condimentum arcu. Vivamus elementum quam ut mattis porttitor.</td>
                                                        <td>'.$row['event_name'].'</td>
                                                    </tr>';
      
        //echo $row['event_location'];
        //echo $row['event_date'];
     }
     }
     catch(PDOException $e)
     {
     echo $sql . "<br>" . $e->getMessage();
     }
 //looop fetching the records avialable
        ?>
                                                   
                                                    
                                                    <!--tr>
                                                        <td><label class="check"><input type="checkbox" class="icheckbox"></label></td>
                                                        <td>
                                                            <a href="#" class="x-user">
                                                                <img src="assets/images/users/user3.jpg">
                                                                <span>Maria Jackson</span>
                                                            </a>
                                                            <span>16.09.2017 1:15 pm</span>
                                                        </td>
                                                        <td>It looks like maecenas mi lorem, placerat eget dolor id, porta iaculis tortor. Nam suscipit tempus nisi, sed condimentum arcu. Vivamus elementum quam ut mattis porttitor.</td>
                                                        <td>New design layout for ATLANT admin template</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="check"><input type="checkbox" class="icheckbox"></label></td>
                                                        <td>
                                                            <a href="#" class="x-user">
                                                                <img src="assets/images/users/user4.jpg">
                                                                <span>Douglas Cook</span>
                                                            </a>
                                                            <span>16.09.2017 1:15 pm</span>
                                                        </td>
                                                        <td>We need to add some praesent et erat ex. Maecenas mi lorem, placerat eget dolor id, porta iaculis tortor. Nam suscipit tempus nisi, sed condimentum arcu.</td>
                                                        <td>New design layout for ATLANT admin template</td>
                                                    </tr-->
                                             
                                                </table>                                                
                                            </div>
                                        </div>
                                        
                                        <ul class="pagination pagination-sm push-up-20">
                                            <li class="disabled"><a href="#">Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                            
                        </div>
                        <div id="second-tab">
                        
                        
                        
                        </div>
                        <!--div id="third-tab"></div-->
                        <div id="fourth-tab"></div>
                    </div>
                    <div class="x-content-footer">
                        Copyright © 2017 ATLANT. All rights reserved
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout" class="btn btn-success btn-lg">Yes</a>
                            <button id="closebtnx" class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -    ->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -- >

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript" src="js/demo_dashboard_x.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>


</html>






