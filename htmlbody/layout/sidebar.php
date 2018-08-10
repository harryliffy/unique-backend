<?php
require_once('classes/core.php');
$profile=new user();
//$profile->

?>
 
 <!-- START PAGE SIDEBAR -->
  <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index-2.html">ATLANT</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/no-image.jpg  " alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php 
                        echo $_SESSION['loggedFullname']; ?></div>
                                <div class="profile-data-title"><?php echo $_SESSION['userStatus']; ?></div>
                            </div>
                            <div class="profile-controls">
                                <a href="profile" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="messages" class="profile-control-right active"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li id="dashboardParent" class="xn-openable ">
                        <a href="#"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
                        <ul>
                            <li  id="dashboard" class=""><a href="index"><span class="xn-text"><span class="fa fa-home"></span> Dashboard</span></a></li>
        
                        </ul>
                    </li>                    
                    <li id="pagesParent" class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                        <ul>
                        <li id="home"><a href="#"><span class="fa fa-home"></span> HomePage</a></li>
                            <li id="gallery"><a href="gallery"><span class="fa fa-image"></span> Gallery</a></li>
                            
                            <li id="events" ><a href="events"><span class="fa fa-user"></span> Events</a></li>
                            <li id="addressbook" ><a href="address-book"><span class="fa fa-users"></span> Address Book</a></li>
                            
                            <li id="faq" ><a href="faq"><span class="fa fa-question-circle"></span> FAQ</a></li>
                            <!--li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li-->
                                                        
                        </ul>
                    </li>
                    <li id="contactParent" class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Contact us</span></a>
                        <ul>
                            <li><a href=""><span class="fa fa-image"></span> Subscribers</a></li>
                            <li id="contact" ><a href="messages"><span class="fa fa-image"></span> Mails</a></li>    
                            <li><a href=""> <span class="fa fa-image"></span> sent</a></li>
                            
                        </ul>
                    </li>
                    <!--li class="xn-title">Components</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>                            
                            <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>                            
                            <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                            <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                            <li><a href="ui-nestable.html"><span class="fa fa-sitemap"></span> Nestable List</a></li>
                            <li><a href="ui-autocomplete.html"><span class="fa fa-search-plus"></span> Autocomplete</a></li>
                            <li><a href="ui-slide-menu.html"><span class="fa fa-angle-right"></span> Slide Menu</a></li>
                        </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li class="xn-openable">
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>                                
                                <ul>
                                    <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                    <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul> 
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                            <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="charts-morris.html">Morris</a></li>
                            <li><a href="charts-nvd3.html">NVD3</a></li>
                            <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                            <li><a href="charts-other.html">Other</a></li>
                        </ul>
                    </li-->                    
                    <li id="settings">
                        <a href="settings"><span class="fa fa-cogs"></span> <span class="xn-text">Settings</span></a>
                    </li> 
                    <li id="profile">
                        <a href="profile"><span class="fa fa-user"></span> <span class="xn-text">Profile</span></a>
                    </li>                    
                    <li class="xn-openable" id="documentation" >
                        <a href=""><span class="fa fa-sitemap"></span> <span class="xn-text">Documentation</span></a>
                        <ul>                            
                            <li class="">
                             <li class="">   <a href="documentation"><span class="fa fa-star"></span> Get Started</a>
                             </li>
                                    <li class="">
                                        <a href="documentation"><span class="fa fa-folder-open"></span> About</a>
                                    
                                    </li>
                                    <li class="">
                                        <a href="documentation"><span class="fa fa-info"></span> Help</a>
                                    
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->