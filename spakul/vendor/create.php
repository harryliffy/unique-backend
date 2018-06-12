<?php
session_start();

?>

  <?php
  include_once("header.php");
  
  ?>
  <!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!-- Wait Me Css -->
<link href="assets/plugins/waitme/waitMe.css" rel="stylesheet" />

  
<!-- Morris Chart Css-- >
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

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>CREATE ACCOUNT</h2>
            <!--<small>Taken from <a href="https://github.com/rstaib/jquery-steps" target="_blank">github.com/rstaib/jquery-steps</a> & <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>-->
			<small>Create spakul vendor account</small>
        </div>
        <!-- Basic Example | Horizontal Layout -- >
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>BASIC EXAMPLE - HORIZONTAL LAYOUT</h2>
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
                        <div id="wizard_horizontal">
                            <h2>First Step</h2>
                            <section>
                                <p>Please enter the name of your business</p>
									
									                        <h2 class="card-inside-title">Enter Name</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." required ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </section>
                            <h2>Second Step</h2>
                            <section>
                                <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                                    ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                                    tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                                    nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                                    a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                                    arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                                    velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                                    iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus. </p>
                            </section>
                            <h2>Third Step</h2>
                            <section>
                                <p> Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                                    condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                                    Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                    commodo lectus sollicitudin in auctor mauris venenatis. </p>
                            </section>
                            <h2>Forth Step</h2>
                            <section>
                                <p> Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula
                                    vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec
                                    ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                    Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                                    tortor. </p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example | Horizontal Layout --> 
        <!-- Basic Example | Vertical Layout -- >
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>BASIC EXAMPLE - VERTICAL LAYOUT</h2>
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
                        <div id="wizard_vertical">
                            <h2>First Step</h2>
                            <section>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
                                    arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
                                    dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
                                    dolor, tristique ac tempus nec, iaculis quis nisi. </p>
                            </section>
                            <h2>Second Step</h2>
                            <section>
                                <p> Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                                    ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                                    tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                                    nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                                    a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                                    arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                                    velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                                    iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus. </p>
                            </section>
                            <h2>Third Step</h2>
                            <section>
                                <p> Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                                    condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                                    Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                    Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                                    commodo lectus sollicitudin in auctor mauris venenatis. </p>
                            </section>
                            <h2>Forth Step</h2>
                            <section>
                                <p> Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula
                                    vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec
                                    ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                                    Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                                    tortor. </p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Example | Vertical Layout --> 
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>ENTER PROFILE DETAILS </h2>
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
					
					<script>
					
					function submitform()
{
    alert('form submit');
    document.forms["myform"].submit();

   
   
}
					</script>
					
                    <div class="body">
                        <form id="wizard_with_validation" method="POST">
                            <h3>Profile Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="vendorname" required>
                                        <label class="form-label">Vendor Name*</label>
                                    </div>
                                </div>
								
								   <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="vendorcat" required>
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
                                        <textarea rows="4" class="form-control no-resize" name="desc" placeholder="" required ></textarea>
                                        <label class="form-label">Write a description*</label>
                                    </div>
                                </div>


                            </fieldset>
                            <h3>Contact Information</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="cname" class="form-control" required>
                                        <label class="form-label">Contact person*</label>
                                    </div>
                                </div>
                               <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="surname" class="form-control" required>
                                        <label class="form-label">Last Name*</label>
                                    </div>
                                </div>-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="cemail" class="form-control" required>
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
                                        <textarea name="caddress" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Contact Address*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input min="18" type="number" name="cage" class="form-control" required>
                                        <label class="form-label">Age*</label>
                                    </div>
                                    <div class="help-info">The warning step will show up if age is less than 18</div>
                                </div>
                            </fieldset>
                            <h3>Terms & Conditions - Finish</h3>
                            <fieldset>
                                <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                            </fieldset>
							
                        </form>
														
        </div>
		
			 
        <!-- #END# Advanced Form Example With Validation --> 
    </div>

</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css --> 
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js --> 
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script> <!-- Sweet Alert Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/morphing.js"></script> 
<script src="assets/js/pages/forms/form-wizard.js"></script> 
</body>
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 

<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js --> 
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js --> 
<script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js --> 
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js --> 
<!--
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -- > 
<script src="assets/js/morphing.js"></script>  -->
<script src="assets/js/pages/forms/advanced-form-elements.js"></script> 



<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/js/pages/forms/basic-form-elements.js"></script> 


</html>