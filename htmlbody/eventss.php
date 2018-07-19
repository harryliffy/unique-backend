

<?php
require_once('classes/core.php');
include('header.php');
$user=new user;
$activePage= new PageTracker();
    $activePage->NavTracker('events');

?>
<!--meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
        <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="validation.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <!--script type="text/javascript" src="event.js"></script-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/add-event.js"></script>
  
<script type="text/javascript" src="../spakul/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>


                   
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
        
        <p class="statusMsg"></p>
<form enctype="multipart/form-data" id="fupForm" >
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
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" class="form-control" id="file" name="file" required />
    </div>
    <!--input type="submit" name="submitBtn" id="submitBtn" class="btn btn-danger submitBtn" value="SAVE"/-->
    <button type="submit" class=" btn btn-info btn-block" name="submitBtn" id="submitBtn">
<span class="glyphicon glyphicon-log-in"></span> &nbsp; Publish Event
</button> 
</form>
<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</div>
</div>     

        </div>



<br>


    <!--script type="text/javascript" src="https://spakul.com/app/vendor/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://spakul.com/app/vendor/js/jquery.form.min.js"></script-->

        
      </div>
      
    </div>
  </div>
  
</div>
                                   
        </div>
                            </div>
                         
                            <div class="col-md-12">
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
                                                
                                            <table class="table x-table"  border="0" width="" height="" id="data">
    <thead>
    <th>action</th>
        <th>Name</th>
        <th>location</th>
        <th>Description</th>
    </thead>
        <?php 
        
        $user->viewEvent()
        ?> 
    </table>
</div>
    <script type="text/javascript">
        $('#data').DataTable({
         responsive: true
         });
       </script>


                                   
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






