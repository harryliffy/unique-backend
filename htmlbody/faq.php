<?php
require_once('classes/core.php');
require_once('layout/header.php');
$activePage=new PageTracker();
$activePage->NavTracker('faq');
$activePage->NavTracker('pagesParent');
$user=new user();

?>     
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">FAQ</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Frequently Asked Questions</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-8">
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">General Questions</h3>
                                </div>
                                <div class="panel-body faq">
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>How to aliquam at ipsum sapien?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec adipiscing vehicula tortor dapibus adipiscing.</p>
                                            <p>Nullam quis quam massa. Donec vitae metus tortor. Vestibulum vel diam orci. Etiam sollicitudin venenatis justo ut posuere. Etiam facilisis est ut ligula ornare accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nunc pellentesque sagittis pulvinar?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Donec libero nisl, hendrerit vel tempus at?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Vestibulum vel diam orci?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec adipiscing vehicula tortor dapibus adipiscing.</p>
                                            <p>Nullam quis quam massa. Donec vitae metus tortor. Vestibulum vel diam orci. Etiam sollicitudin venenatis justo ut posuere. Etiam facilisis est ut ligula ornare accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nam id turpis sapien?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nulla ullamcorper, ex in ultrices fringilla?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">Payment</h3>
                                </div>
                                <div class="panel-body faq">
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Cras at turpis vestibulum mauris gravida commodo?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Maecenas risus sapien, sollicitudin quis nisl vehicula, sagittis venenatis elit. Cras at turpis vestibulum mauris gravida commodo. Fusce tellus metus, eleifend vel ultrices quis, fermentum ut justo. Ut hendrerit ante sed rutrum sagittis. Nam ac nulla posuere, mattis risus nec, sagittis purus. Praesent in justo rhoncus, molestie velit laoreet, viverra sem.</p>
                                            <p>Sed sit amet lacus sem. Sed vel fermentum mi, sit amet hendrerit purus. Duis nec posuere dolor. Fusce sed faucibus turpis, a cursus nunc.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nunc pellentesque sagittis pulvinar?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Donec libero nisl, hendrerit vel tempus at?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Vestibulum vel diam orci?</div>
                                        <div class="faq-text">
                                            <h5>Aliquam at ipsum sapien</h5>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec adipiscing vehicula tortor dapibus adipiscing.</p>
                                            <p>Nullam quis quam massa. Donec vitae metus tortor. Vestibulum vel diam orci. Etiam sollicitudin venenatis justo ut posuere. Etiam facilisis est ut ligula ornare accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nam id turpis sapien?</div>
                                        <div class="faq-text">
                                            <h5>Pellentesque sagittis pulvinar</h5>
                                            <p>Nunc pellentesque sagittis pulvinar. Donec et bibendum dolor. Praesent commodo facilisis dui, vitae euismod ipsum aliquam gravida. Nulla aliquet fringilla velit sit amet dignissim. Sed justo ex, mattis sed venenatis sit amet, varius at urna. Donec erat nunc, tempus id tortor vel, consequat pulvinar nisl. Donec sed felis in erat malesuada tincidunt pulvinar in lorem.</p>
                                            <p>Etiam rutrum, leo ut molestie hendrerit, quam elit semper nunc, eget ullamcorper sem ligula a nisl. Phasellus aliquam efficitur elit sed ullamcorper. Quisque porttitor ac turpis quis sodales.</p>
                                            <h5>Hendrerit luctus</h5>
                                            <p>Nulla dapibus turpis ornare est hendrerit luctus. Nam id turpis sapien. Quisque non fermentum nisl. In sagittis nibh non dolor condimentum sodales.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="faq-item">
                                        <div class="faq-title"><span class="fa fa-angle-down"></span>Nulla ullamcorper, ex in ultrices fringilla?</div>
                                        <div class="faq-text">
                                            <h5>Cras ac odio faucibus tortor pretium</h5>
                                            <p>Cras ac odio faucibus tortor pretium tristique in id nisl. Donec libero nisl, hendrerit vel tempus at, posuere vel urna. Nam sed consectetur lectus. Sed sit amet risus dolor. Duis accumsan lorem ac quam egestas pretium.</p>
                                            <p>Curabitur finibus nisl ac aliquet mattis. Aliquam convallis bibendum lorem sed lobortis. Cras aliquam urna sed luctus tincidunt.</p>
                                            <h5>Nulla ullamcorper</h5>
                                            <p>In diam turpis, tristique nec cursus in, blandit vel elit. Nulla ullamcorper, ex in ultrices fringilla, nisi sapien hendrerit dolor, in suscipit mauris turpis id erat.</p>
                                            <p>Nunc facilisis odio vitae eros rutrum, eget rutrum nulla rhoncus. Etiam laoreet pretium ex ut gravida. In venenatis turpis sit amet volutpat bibendum.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>                        
                        <div class="col-md-4">
                            
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h3>Search</h3>
                                    <form id="faqForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="faqSearchKeyword" placeholder="Search..."/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" id="faqSearch">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="push-up-10"><strong>Search Result:</strong> <span id="faqSearchResult">Please fill keyword field</span></div>
                                    <div class="push-up-10">
                                        <button class="btn btn-primary" id="faqRemoveHighlights">Remove Highlights</button>
                                        <div class="pull-right">
                                            <button class="btn btn-default" id="faqOpenAll"><span class="fa fa-angle-down"></span> Open All</button>
                                            <button class="btn btn-default" id="faqCloseAll"><span class="fa fa-angle-up"></span> Close All</button>
                                        </div>                                       
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h3>Contact</h3>
                                    <p>Feel free to contact us for any issues you might have with our products.</p>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control" placeholder="youremail@domain.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="email" class="form-control" placeholder="Message subject">
                                    </div>                                
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                                    </div>                                
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default"><span class="fa fa-paperclip"></span> Add attachment</button>
                                    <button class="btn btn-success pull-right"><span class="fa fa-envelope-o"></span> Send</button>
                                </div>
                            </div>
                            
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
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/highlight/jquery.highlight-4.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript" src="js/faq.js"></script>
        <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->         
    </body>

<!-- Mirrored from aqvatarius.com/themes/atlant/html/pages-faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 16:14:53 GMT -->
</html>






