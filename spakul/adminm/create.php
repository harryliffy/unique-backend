<?php
session_start();

if(!isset($_SESSION['vendor_session']))
{
	header("Location:login");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../spakul.png" type="image/x-icon"><!-- Favicon-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vendor information</title>
<head>
 <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        

        <!-- STYLESHEETS -->
        <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>
		<link rel="icon" href="../spakul.png" type="image/x-icon"><!-- Favicon-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vendor Registration</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="vprofile.js"></script>
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

        <!-- jQuery -- >
        <script type="text/javascript" src="../assets/vendor/jquery/dist/jquery.min.js"></script>

        <!-- Mobile Detect -->
        <script type="text/javascript" src="../assets/vendor/mobile-detect/mobile-detect.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script type="text/javascript"
                src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

        <!-- Popper.js -->
        <script type="text/javascript" src="../assets/vendor/popper.js/index.js"></script>

        <!-- Bootstrap -- >
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


<head>

       
                <div class="content">
                    <div class="doc forms-doc page-layout simple full-width">

                        <!-- HEADER -->
                        <div class="page-header bg-primary text-auto p-6"><h2 class="doc-title" id="content">Creating Spakul vendor</h2><small></small>
                        </div>
                        <!-- / HEADER -->

                        <div class="page-content row p-6">

               
    <div class="col-12">
                                <div class="example">
                                    <div class="description">
                                        <div class="description-text">
										<h5>Create vendor information</h5>
                                            <p>provide information to continue</p>
                                        </div>
                                        <div class="toggle-source-preview">
                                            <!--i class="icon icon-code-tags"></i>
                                            <i class="icon icon-eye-outline"></i-->
                                        </div>
										     <a href="logout" ><i class="icon icon-eye-outline"></i> </a>
                                    </div>
                                    <div class="source-preview-wrapper">
                                        <div class="preview">
                                            <div class="preview-elements">
                                                <div class="container">
                                                 <form class="form-signin" method="post" id="acc-form">
	       <div id="error">
        <!-- error will be shown here ! -->
        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4"
                                                                       class="col-form-label">Vendor name</label>
                                                                <input type="text" class="form-control"
                                                                       name="vendorname" id="vendorname" placeholder="Vendor name"/>
                                                            </div>
                                                         
<input type="hidden" class="form-control" value="<?php echo $_SESSION['vendor_session'];    ?>"
                                                                       name="venid" id="venid" required placeholder=""/>
  


														 <div class="form-group col-md-6">
                                                                <label for="inputCity"
                                                                       class="col-form-label">Phone</label>
                                                                <input type="text" class="form-control" id="bphone"  name="bphone"  required placeholder="Business phone"/>
                                                            </div>
															
															
                                                        </div>
														
														
														<div class="form-group">
                                                            <label for="inputAddress"
                                                                   class="col-form-label">Category</label>
                                                          <div class="preview">
                                            <div class="preview-elements">
                                                <select class="custom-select"  name="vendorcat" id="vendorcat" required>
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                                        </div>
														
														
														
														
                                                        <div class="form-group">
                                                            <label for="inputAddress"
                                                                   class="col-form-label">Address</label>
                                                            <input type="text" class="form-control" name="tag" id="tag" required
                                                                   placeholder="Business Address"/>
                                                        </div>
														
														
														
							
                                                        <div class="row">
                                                            
															
															
															<div class="form-group col-md-12">
                                                        <textarea class="form-control" name="desc" id="desc"
                                                                  rows="3"></textarea>
                                                        <label for="exampleTextarea">Write Description</label>
                                                   <br/><br/><br/>	 </div>
													
													
															
															
                                                        

														<div class="description-text">
										<h5>Contact Information</h5>
                                            <p>Contact person detail/information.</p>
                                        </div>
                                                        </div>
														
														<div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4"
                                                                       class="col-form-label">Contact person</label>
                                                                <input type="text" class="form-control"
                                                                       name="cname" id="cname" required placeholder="contact person"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4" class="col-form-label">Email</label>
                                                                <input type="Email" class="form-control"
                                                                       name="cemail" id="cemail"
                                                                       placeholder="Email"/>
                                                            </div>
															<div class="form-group col-md-6">
                                                                <label for="inputCity"
                                                                       class="col-form-label">Mobile Phone</label>
                                                                <input type="text" class="form-control" name="cphone" id="cphone"  required placeholder="Mobile phone"/>
                                                            </div>
															  <div class="form-group col-md-12">
                                                            <label for="inputAddress"
                                                                   class="col-form-label">Contact Address</label>
                                                            <input type="text" class="form-control" name="caddress"  id="caddress"
                                                                   placeholder="Contact Address"/>
                                                        </div>

														
														<div class="form-group">
                                                            <label for="inputAddress"
                                                                   class="col-form-label">Age</label>
                                                          <div class="preview">
                                            <div class="preview-elements">
                                                <select class="custom-select" name="cage" id="cage">
                                                    <option selected="">select age</option>
                                                    <option value="1">18</option>
                                                    <option value="2">19</option>
                                                    <option value="3">20</option>
                                                </select>
                                            </div>
                                        </div>
                                                        </div>
														
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox"/>
                                                                    <span class="checkbox-icon"></span>
                                                                    <span>Check me out</span>
                                                                </label>
                                                            </div>
															
                                                        </div>
														 <div class="form-group">
                                                        <button type="submit" class="submit-button btn btn-block btn-primary my-4 mx-auto" name="btn-login" id="btn-login"><span class="glyphicon glyphicon-log-in"></span> &nbsp; Finish</button>
														</div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- @formatter:off -- >
                <div class="source"><pre><code>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;form&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputEmail4"</span> <span class="na">class=</span><span class="s">"col-form-label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
                                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputEmail4"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">/&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputPassword4"</span> <span class="na">class=</span><span class="s">"col-form-label"</span><span class="nt">&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
                                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputPassword4"</span>
                                       <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">/&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputAddress"</span> <span class="na">class=</span><span class="s">"col-form-label"</span><span class="nt">&gt;</span>Address<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputAddress"</span>
                                   <span class="na">placeholder=</span><span class="s">"1234 Main St"</span><span class="nt">/&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputAddress2"</span> <span class="na">class=</span><span class="s">"col-form-label"</span><span class="nt">&gt;</span>Address 2<span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputAddress2"</span>
                                   <span class="na">placeholder=</span><span class="s">"Apartment, studio, or floor"</span><span class="nt">/&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-6"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputCity"</span> <span class="na">class=</span><span class="s">"col-form-label"</span><span class="nt">&gt;</span>City<span class="nt">&lt;/label&gt;</span>
                                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputCity"</span><span class="nt">/&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-4"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputState"</span> <span class="na">class=</span><span class="s">"col-form-label"</span><span class="nt">&gt;</span>State<span class="nt">&lt;/label&gt;</span>
                                <span class="nt">&lt;select</span> <span class="na">id=</span><span class="s">"inputState"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>Choose<span class="nt">&lt;/select&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group col-md-2"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"inputZip"</span> <span class="na">class=</span><span class="s">"col-form-label"</span><span class="nt">&gt;</span>Zip<span class="nt">&lt;/label&gt;</span>
                                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputZip"</span><span class="nt">/&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-check"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"form-check-label"</span><span class="nt">&gt;</span>
                                    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-check-input"</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">/&gt;</span>
                                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"checkbox-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
                                    <span class="nt">&lt;span&gt;</span>Check me out<span class="nt">&lt;/span&gt;</span>
                                <span class="nt">&lt;/label&gt;</span>
                            <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
                    <span class="nt">&lt;/form&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                </code></pre></div>
                <!-- @formatter:on --></div>
                                </div>
                            </div>
							
                            <!-- USING THE GRID COMPLEX -- >

  
				
                            <div class="col-12 col-md-6">

                                <div class="example">

                                    <div class="description">

                                        <div class="description-text">
                                            <h5>Select Menu</h5>
                                        </div>

                                        <div class="toggle-source-preview">
                                            <i class="icon icon-code-tags"></i>
                                            <i class="icon icon-eye-outline"></i>
                                        </div>

                                    </div>

                                    <div class="source-preview-wrapper">
                                        <div class="preview">
                                            <div class="preview-elements">
                                                <select class="custom-select">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- @formatter:off -- >
                <div class="source"><pre><code>
                <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">selected=</span><span class="s">""</span><span class="nt">&gt;</span>Open this select menu<span class="nt">&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"1"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"2"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"3"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/option&gt;</span>
                <span class="nt">&lt;/select&gt;</span>
                </code></pre></div>
                <!-- @formatter:on -- ></div>

                                </div>

                            </div>
						
                            <!-- / SELECT MENU -->

                            <!-- FILE BROWSER -- >
                            <div class="col-12 col-md-6">

                                <div class="example">

                                    <div class="description">

                                        <div class="description-text">
                                            <h5>File Browser</h5>
                                        </div>

                                        <div class="toggle-source-preview">
                                            <i class="icon icon-code-tags"></i>
                                            <i class="icon icon-eye-outline"></i>
                                        </div>

                                    </div>

                                    <div class="source-preview-wrapper">
                                        <div class="preview">
                                            <div class="preview-elements">
                                                <label class="custom-file">
                                                    <input type="file" id="file" class="custom-file-input"/>
                                                    <span class="custom-file-control"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- @formatter:off -- >
                <div class="source"><pre><code>
                <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"custom-file"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"custom-file-input"</span><span class="nt">/&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-file-control"</span><span class="nt">&gt;&lt;/span&gt;</span>
                <span class="nt">&lt;/label&gt;</span>
                </code></pre></div>
                <!-- @formatter:on -- ></div>

                                </div>

                            </div>
                            <!-- / FILE BROWSER -->
                        </div>
                    </div>
                </div>

            </div>

            <div class="quick-panel-sidebar" fuse-cloak data-fuse-bar="quick-panel-sidebar"
                 data-fuse-bar-position="right">
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


</html>