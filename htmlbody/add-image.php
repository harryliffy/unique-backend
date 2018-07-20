<?php
require_once('classes/core.php');
require_once('layout/header.php');
$activePage=new PageTracker();
$activePage->NavTracker('gallery');
$activePage->NavTracker('pagesParent');

?>     
<!doctype html>
<html>
<head lang="en">
 <meta charset="utf-8">
 <title>Easy Ajax Image Upload with jQuery and PHP - codingcage.com</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
 <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
 <script type="text/javascript" src="add-image.js"></script>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
</head>
<body>
     <!-- START BREADCRUMB -->
     <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                     <li><a href="#">Form Layout</a></li>
                    <li class="active">One Column</li>
                </ul>
                <!-- END BREADCRUMB -->
                
<div class="container">

 <!--form id="form" action="testupload.php" method="post" enctype="multipart/form-data">
  <input id="uploadImage" type="file" accept="image/*" name="image" />
  <button class="button button-default" id="button" type="submit" ><i class="glyphicon glyphicon-save"></i>Upload</button>
  <!--input  value="Upload"- ->
 <div id="err"></div></form-->

   
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                        <!--p  class="statusMsg"></p-->
                        
                        <div id="preview"></div>

</div></div>



                            <form enctype="multipart/form-data" id="imageform" action="testupload.php" method="post" class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span><i class="fa fa-image"></i></span><strong>   New</strong> Image</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body"><div id="err"></div>
                                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur.</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">image description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="imagedesc" id="imagedesc" type="text" class="form-control"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Category</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="imagecat" id="imagecat" class="form-control select">
                                                <option>Clasroom</option>
                                                <option>Facility</option>
                                                <option>Activities</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Date</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input name="date" id="date" type="text" class="form-control datepicker" value="">                                            
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    
                                 
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Image</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" id="uploadImage"  accept="image/*" name="image" title="Browse file"/>
                                            <span class="help-block">Input type file</span>
                                        </div>
                                    </div>
                                                                                                                
                                            
                                            

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button type="submit" name="button" id="button" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-save"></span>  Submit</button>

                                    
                                </div>
                            </div>
                            </form>
                            
                        </div>
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
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
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
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <!--script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script-->
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE - ->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <!-- END TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
 <p><a href="http://www.codingcage.com" target="_blank">www.codingcage.com</a></p>
</div>
</body>
</html>