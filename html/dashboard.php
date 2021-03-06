<?php 
include('classes/core.php');
include('header.php');

$user=new user();
$activePage= new PageTracker();
    $activePage->NavTracker('dashboard');

?>
                   
                    <div class="x-content-tabs">
                        <ul>
                            <li><a href="#main-tab" class="icon active"><span class="fa fa-desktop"></span></a></li>
                            <li><a href="#second-tab"><span class="fa fa-life-ring"></span><span>Second tab</span></a></li>
                            <!--li><a href="#third-tab"><span class="fa fa-microphone"></span><span>Third tab</span></a></li-->                            
                            <li><a href="#new-tab" class="icon"><span class="fa fa-plus"></span></a></li>
                        </ul>
                    </div>
                    <div class="x-content">
                        <div id="main-tab">
                            <div class="x-content-title">
                                <h1>Dashboard </h1>
                                <div class="pull-right">
                                    <button class="btn btn-danger"><span class="fa fa-plus"></span> Export</button>
                                </div>
                            </div>
                            <div class="row stacked">
                                <div class="col-md-10">
                                    <div class="x-chart-widget">
                                        <div class="x-chart-widget-head">
                                            <div class="x-chart-widget-title">
                                                <h3>Website Activity</h3>
                                                <p>Account Type: <span>School</span> <?php  //echo $_SESSION['loggedName']; ?></p>
                                            </div>
                                            <div class="pull-right">
                                                <!--button class="btn btn-default">EXPORT</button-->
                                                <button class="btn btn-default">TODAY:<?php echo Date('d M Y'); ?></button>
                                            </div>
                                        </div>
                                        <div class="x-chart-widget-content">
                                            <div class="x-chart-widget-content-head">
                                                <h4>SUMMARY</h4>
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                        <button class="btn btn-default">DAY</button>
                                                        <button class="btn btn-primary">WEEK</button>
                                                        <button class="btn btn-default">MONTH</button>
                                                        <button class="btn btn-default">YEAR</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="x-chart-widget-informer">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="x-chart-widget-informer-item">
                                                                    <div class="count">223<span>34% <i class="fa fa-arrow-up"></i></span></div>
                                                                    <div class="title">Views of your profile</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="x-chart-widget-informer-item">
                                                                    <div class="count">190<span>17% <i class="fa fa-arrow-up"></i></span></div>
                                                                    <div class="title">Views of your works</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="x-chart-widget-informer-item">
                                                                    <div class="count">223<span class="negative">22% <i class="fa fa-arrow-down"></i></span></div>
                                                                    <div class="title">Likes</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="x-chart-widget-informer-item last">
                                                                    <div class="count">160<span>3% <i class="fa fa-arrow-up"></i></span></div>
                                                                    <div class="title">Comments</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="x-chart-holder">
                                                <div id="x-dashboard-line" style="height: 400px;"></div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    
                                    <div class="x-widget-timeline">
                                        <div class="x-widget-timelime-head">
                                            <h3>NOTIFICATIONS</h3>
                                            <div class="pull-right"><a href="#">Settings <span class="fa fa-cog"></span></a></div>                                            
                                        </div>
                                        <div class="x-widget-timeline-content">

                                           <?php $user->accessLog(); ?>
                                           
                                            <!--div class="item item-blue">
                                            
                                                <a href="#">Maria Jackson</a> Sent you a <strong>message</strong>
                                                <span>3 minutes ago</span>
                                            </div>
                                            <div class="item item-green">
                                                <a href="#">Brian Dawson</a> Invited you to <strong>Linkedin</strong>
                                                <span>16.09.2017 1:27 pm</span>
                                            </div>
                                            <div class="item item-green">
                                                <a href="#">Hannah Jensen</a> Invited you to like her on <strong>facebook</strong>
                                                <span>16.09.2017 1:13 pm</span>
                                            </div>
                                            <div class="item item-red">
                                                <a href="#">Nancy Watson</a> You got 3 new <strong>notifications</strong>
                                                <span>16.09.2017 11:41 am</span>
                                            </div>
                                            <div class="item item-red">
                                                <a href="#">Nancy Watson</a> You got 1 requests to <strong>add friends</strong>
                                                <span>16.09.2017 11:23 am</span>
                                            </div>
                                            <div class="item item-greay">
                                                <a href="#">Hannah Jensen</a> Invited you to like her on <strong>facebook</strong>
                                                <span>16.09.2017 10:26 am</span>
                                            </div>
                                            <div class="item item-blue">
                                                <a href="#">Douglas Cook</a> Sent you a <strong>message</strong>
                                                <span>16.09.2017 09:15 am</span>
                                            </div-->                                            
                                            <button class="btn btn-default btn-block">Load more...</button>
                                        </div>                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="x-content-inner">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="x-block">
                                            <div class="x-block-head">
                                                <h3>COMMENTS</h3>
                                                <div class="pull-right">                                                    
                                                    <button class="btn btn-default">ACTIONS <span class="fa fa-angle-down" style="margin-left: 20px;"></span></button>
                                                </div>                                            
                                            </div>
                                            <div class="x-block-content">                                                                                                
                                                <table class="table x-table">
                                                    <tr>
                                                        <th><label class="check"><input type="checkbox" name="checkall" class="icheckbox"></label></th>
                                                        <th width="30%">AUTHOR</th>
                                                        <th width="40%">COMMENT</th>
                                                        <th width="30%">THEME</th>                                                    
                                                    </tr>
                                                    <tr>
                                                        <td><label class="check"><input type="checkbox" class="icheckbox"></label></td>
                                                        <td>
                                                            <a href="#" class="x-user">
                                                                <img src="assets/images/users/user2.jpg">
                                                                <span>Roger Parker</span>
                                                            </a>
                                                            <span>16.09.2017 1:15 pm</span>
                                                        </td>
                                                        <td>Nice job with maecenas mi lorem, placerat eget dolor id, porta iaculis tortor. Nam suscipit tempus nisi, sed condimentum arcu. Vivamus elementum quam ut mattis porttitor.</td>
                                                        <td>New design layout for ATLANT admin template</td>
                                                    </tr>
                                                    <tr>
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
                                                    </tr>
                                                    <tr>
                                                        <td><label class="check"><input type="checkbox" class="icheckbox"></label></td>
                                                        <td>
                                                            <a href="#" class="x-user">
                                                                <img src="assets/images/users/user5.jpg">
                                                                <span>Brian Dawson</span>
                                                            </a>
                                                            <span>16.09.2017 1:15 pm</span>
                                                        </td>
                                                        <td>I’ve chacked this template and maecenas mi lorem, placerat eget dolor id, porta iaculis tortor. Nam suscipit tempus nisi, sed condimentum arcu. Vivamus elementum quam ut mattis porttitor.</td>
                                                        <td>New design layout for ATLANT admin template</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="check"><input type="checkbox" class="icheckbox"></label></td>
                                                        <td>
                                                            <a href="#" class="x-user">
                                                                <img src="assets/images/users/user2.jpg">
                                                                <span>Roger Parker</span>
                                                            </a>
                                                            <span>16.09.2017 1:15 pm</span>
                                                        </td>
                                                        <td>I’ve chacked this template and maecenas mi lorem, placerat eget dolor id, porta iaculis tortor. Nam suscipit tempus nisi, sed condimentum arcu. Vivamus elementum quam ut mattis porttitor.</td>
                                                        <td>New design layout for ATLANT admin template</td>
                                                    </tr>
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
                                    <div class="col-md-6">
                                        
                                        <div class="x-block">
                                            <div class="x-block-head">
                                                <h3>TO DO LIST</h3>
                                                <div class="pull-right">                                                    
                                                    <button class="btn btn-default">ACTIONS <span class="fa fa-angle-down" style="margin-left: 20px;"></span></button>
                                                </div>                                            
                                            </div>
                                            <div class="x-block-content x-todo">
                                                <div class="x-todo-header">
                                                    <label class="check"><input type="checkbox" class="icheckbox"></label>
                                                    <h3>7 NEW TASKS FOR TODAY</h3>
                                                    <button class="btn btn-default pull-right">TODAY: 14 SEP. 2017 <span class="fa fa-angle-down"></span></button>
                                                </div>
                                                <div class="x-todo-content scroll" style="height: 550px;">
                                                    <div class="item">
                                                        <div class="head">
                                                            <div class="pull-left"><span class="status status-high"></span> Priority: High</div>
                                                            <div class="pull-left">Project: ATLANT Template</div>
                                                            <div class="pull-right"><span class="fa fa-clock-o"></span> added few minutes ago</div>
                                                        </div>
                                                        <div class="title">
                                                            <label class="check"><input type="checkbox" class="icheckbox"></label>
                                                            <h4>MAKE NEW ATLANT DASHBOARD</h4>
                                                        </div>
                                                        <div class="content">
                                                            Donec porta suscipit odio et luctus. Mauris vel velit dignissim, lobortis mauris non, ultricies sapien
                                                        </div>
                                                    </div>                                                
                                                    <div class="item">
                                                        <div class="head">
                                                            <div class="pull-left"><span class="status status-low"></span> Priority: Low</div>
                                                            <div class="pull-left">Project: New awesome projec</div>
                                                            <div class="pull-right"><span class="fa fa-clock-o"></span> added 15 minutes ago</div>
                                                        </div>
                                                        <div class="title">
                                                            <label class="check"><input type="checkbox" class="icheckbox"></label>
                                                            <h4>CALL MARTIN PHILLIPS ABOUT NEW PROJECT </h4>
                                                        </div>
                                                        <div class="content">
                                                            Fusce eu nunc nisl. Duis tincidunt dui lectus. Suspendisse urna dolor, venenatis eu bibendum ut, placerat id sem. Nulla iaculis augue in nulla rutrum
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="head">
                                                            <div class="pull-left"><span class="status status-low"></span> Priority: Low</div>
                                                            <div class="pull-left">Project: Imaginary Shop</div>
                                                            <div class="pull-right"><span class="fa fa-clock-o"></span> added 3 hours ago</div>
                                                        </div>
                                                        <div class="title">
                                                            <label class="check"><input type="checkbox" class="icheckbox"></label>
                                                            <h4>PRINT THE INOVOISES FOR BRIAN DAWSON</h4>
                                                        </div>
                                                        <div class="content">
                                                            Donec porta suscipit odio et luctus. Mauris vel velit dignissim, lobortis mauris non, ultricies sapien
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="head">
                                                            <div class="pull-left"><span class="status status-medium"></span> Priority: Medium</div>
                                                            <div class="pull-left">Project: Landing page for Themeforest</div>
                                                            <div class="pull-right"><span class="fa fa-clock-o"></span> added 7 hours ago</div>
                                                        </div>
                                                        <div class="title">
                                                            <label class="check"><input type="checkbox" class="icheckbox"></label>
                                                            <h4>NEW ATLANT DASHBOARD</h4>
                                                        </div>
                                                        <div class="content">
                                                            Donec porta suscipit odio et luctus. Mauris vel velit dignissim, lobortis mauris non, ultricies sapien
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="head">
                                                            <div class="pull-left"><span class="status status-low"></span> Priority: Medium</div>
                                                            <div class="pull-left">Project: Shop for Themeforest</div>
                                                            <div class="pull-right"><span class="fa fa-clock-o"></span> added 8 hours ago</div>
                                                        </div>
                                                        <div class="title">
                                                            <label class="check"><input type="checkbox" class="icheckbox"></label>
                                                            <h4>OS-COMMERCE SHOP TEMPLATE</h4>
                                                        </div>
                                                        <div class="content">
                                                            Donec porta suscipit odio et luctus. Mauris vel velit dignissim, lobortis mauris non, ultricies sapien
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="x-todo-footer">
                                                    <div class="pull-right">
                                                        <a href="#"><span class="fa fa-plus"></span> Add new task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="second-tab"></div>
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
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

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






