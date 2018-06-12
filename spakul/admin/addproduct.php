<?php
session_start();

if(!isset($_SESSION['vendor_session']))
{
	header("Location:login");
}

?>
<?php
include('header.php');
?>
     <!--autocomplete tags-->           
				<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="addproduct.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js1"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./src/jquery.tagsinput.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery4.min.js"></script>  <!--commented-->
	<script type="text/javascript" src="./src/jquery.tagsinput.js"></script>
	<!-- To test using the original jQuery.autocomplete, uncomment the following -->
	<!--
	<script type='text/javascript' src='http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.css" />
	-->
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />		
     <!------------------save data-------------------------------------->  
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
			return false; x-zip-compressed
		}); 
		

//function after succesful file upload (when server response)
function afterSuccess()
{
	$('#submit-btn').hide(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	$('#progressbox').delay( 30000000 ).fadeOut(); //hide progress bar
  // $('#submit-btn').delay( 300000 ).fadeOut(); //hide progress bar
$('#MyUploadForm').hide(); //hide submit button
	
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
		document.getElementById("submit-btn").style.display = 'none';
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
            $('#statustxt').css('color','#fff'); //change status text to white after 50%
			//document.getElementById("submit-btn").style.display = 'none';
        }
				$('#submit-btn').show(); //show submit button if file size error occur													
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
<style>

#upload-wrapper {
	/* width: 50%;
	margin-right: auto;
	margin-left: auto; */
	margin-top: 50px;
	background: #0068b9;
	padding: 17px;
	/* border-radius: 10px; */
}
#upload-wrapper h3 {
	padding: 0px 0px 10px 0px;
	margin: 0px 0px 20px 0px;
	margin-top: -30px;
	border-bottom: 1px dotted #DDD;
}
#upload-wrapper input[type=file] {
	padding: 6px;
	background: #FFF;
	border-radius: 5px;
}
#upload-wrapper #submit-btn {
	 /* border: none;
	padding: 10px;
	background: #61BAE4;
	border-radius: 5px;
	color: #FFF; */
}
#output{
	padding: 5px;
	font-size: 12px;
}

/* prograss bar */
#progressbox {
	border: 1px solid #CAF2FF;
	padding: 1px; 
	position:relative;
	width:400px;
	border-radius: 3px;
	margin: 10px;
	display:none;
	text-align:left;
}
#progressbar {
	height:20px;
	border-radius: 3px;
	background-color: #0275d8;
	width:0.9%;
}
#statustxt {
	top:3px;
	left:50%;
	position:absolute;
	display:inline-block;
	color: #FFFFFF;
}



</style>
																					
<!---------------------------------------javascript autocomplete tagss---------------------------------------->
	<script type="text/javascript">

		function onAddTag(tag) {
			alert("Added a tag: " + tag);
		}
		function onRemoveTag(tag) {
			alert("Removed a tag: " + tag);
		}

		function onChangeTag(input,tag) {
			alert("Changed a tag: " + tag);
		}

		$(function() {

			$('#tags_1').tagsInput({width:'auto'});
			$('#tags_2').tagsInput({
				width: 'auto',
				onChange: function(elem, elem_tags)
				{
					var categorygroup = ['fashion','food','wedding'];  //category	 group
					$('.tag', elem_tags).each(function()
					{
						if($(this).text().search(new RegExp('\\b(' + categorygroup.join('|') + ')\\b')) >= 0)
							$(this).css('background-color', '#777e86');
					});
				}
			});
			$('#tags_3').tagsInput({
				width: 'auto',

				//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
				autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
			});


// Uncomment this line to see the callback functions in action
//			$('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});

// Uncomment this line to see an input with no interface for adding new tags.
//			$('input.tags').tagsInput({interactive:false});
		});

	</script>


                <div class="content">
                    <div id="e-commerce-product" class="page-layout simple tabbed">

                        <!-- HEADER -->
                        <div
                            class="page-header bg-primary text-auto row no-gutters align-items-center justify-content-between p-6">

                            <div class="row no-gutters align-items-center">

                                <a href="products" class="btn btn-icon mr-4">
                                    <i class="icon icon-arrow-left"></i>
                                </a>

                                <div class="product-image mr-4">
                                    <img src="../assets/images/ecommerce/product-image-placeholder.png">
                                </div>

                                <div>Add Product</div>
                            </div>

                            <button onclick="#" id="addnew" class="btn btn-secondary" >
                                Add new Product
                            </button>
 

                        </div>
                        <!-- / HEADER -->

                        <!-- CONTENT -->
                        <div class="page-content">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link btn active" id="basic-info-tab" data-toggle="tab"
                                       href="#basic-info-tab-pane"
                                       role="tab" aria-controls="basic-info-tab-pane" aria-expanded="true">Basic
                                        Info</a>
                                </li>

                                <li class="nav-item" >
                                    <a class="nav-link btn" id="product-images-tab" data-toggle="tab"
                                       href="#product-images-tab-pane"
                                       role="tab" aria-controls="product-images-tab-pane">Product Details</a>
                                </li>


                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="basic-info-tab-pane" role="tabpanel"
                                     aria-labelledby="basic-info-tab">

                                    <div class="card p-6">

<form name="product-form" method="post" id="product-form" >
     <div id="error">
        <!-- error will be shown here ! -->
        </div>
                                            <div class="form-group">
                                                <input name="prodname" id="prodname" type="text" class="form-control"
                                                       aria-describedby="product name"/>
                                                <label>Product Name</label>
                                            </div>

                                            <div class="form-group">
                                                <textarea  name="proddesc" id="proddesc" class="form-control" aria-describedby="product description"
                                                          rows="5"></textarea>
                                                <label>Product Description</label>
                                            </div>

											    <div class="form-group">
												
																												<?php
																	try{ 
																	///get currently logged in vendors catgeory
				
				$vendor_id=$_SESSION['vendor_session'];
				
			$stmt = $db_con->prepare("SELECT * FROM vendor WHERE vendor_id=:vendor_id");
			$stmt->execute(array(":vendor_id"=>$vendor_id));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			$catgroup=$row['vendor_cat_id']; //hold vendor category
			      
			}
			//catch exception
			catch(PDOException $e){
			echo $e->getMessage();
		}
					?>
												
                                                        <label for="exampleSelect1">Product category ( <?php echo $catgroup; ?>)</label>
                                                        <select class="form-control" name="prodcat" id="prodcat" >
														
	
					<?php 
					// get vendors approved products category by category group 
	try {
		$stmtcat = $db_con->query("SELECT * FROM category WHERE cat_group='$catgroup' ");
		while($rowcat = $stmtcat->fetch(PDO::FETCH_ASSOC)){
		$catname= $rowcat['cat_name'];
		
		
		   echo' <option>'.$catname.'</option>';  //iterate category name into dropdown
		}
	}
	//catch exception
		catch(PDOException $e){
			echo $e->getMessage();
		}
		
	?>  </select>
</div>
											
                                            
                                            <!--div class="form-group">
                                                <input  name="prodtag" id="prodtag" type="text" class="form-control"
                                                       aria-describedby="product tags"/>
                                                <label>Tags</label>
                                            </div-->
	                                            <div class="form-group">
	


			<p><label>Product tags</label>
			<input  name="tags_2"  id="tags_2" type="text" class="tags form-control" value="<?php 
			// get vendors approved products category by category group 
	try {
		echo $catgroup ;
		$stmtcattag = $db_con->query("SELECT * FROM category WHERE cat_group='$catgroup' ");
		while($rowcattag = $stmtcattag->fetch(PDO::FETCH_ASSOC)){
		$catnametag= $rowcattag['cat_name'].',';

		
		   echo','.$catnametag.'';  //iterate category name into dropdown
		}
	}
	//catch exception
		catch(PDOException $e){
			echo $e->getMessage();
		} ?>" /></p>
<!--
			<p><label>Autocomplete:</label>
			<input id='tags_3' type='text' class='tags'></p>
-->
	

											</div>

											<?php
											
											echo $_SESSION['vendor_session'];
											?>
							<button id="btn-login" type="submit" class="submit-button btn btn-block btn-primary my-4 mx-auto" name="btn-login" id="btn-login"
                                        aria-label="save">
                                    <span class="glyphicon glyphicon-log-in"></span> NEXT
                                </button>
                                        <!--input type="submit" /-->
										
										</form>
                                    </div>
                                </div>
								<?php
								/*	echo $_SESSION['product_name'];
									echo $_SESSION['product_desc'];
									echo $_SESSION['product_category'];
									echo $_SESSION['product_tag']; */
                                ?>
                                
                                <div class="tab-pane fade" id="product-images-tab-pane" role="tabpanel"
                                     aria-labelledby="product-images-tab">
									 
									 	
								 
         <div class="card p-6 row" style= "" >

                               	<form class="" action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">	


                                            <div class="form-group">
                                                <input name="price" id="price" type="text" class="form-control" aria-describedby="Price"/>
                                                <label>Price</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" aria-describedby="barcode"/>
                                                <label>Barcode</label>
                                            </div>

                                            <div class="form-group">
                                                <input name="quantity" id="quantity" class="form-control" type="number" value="42"
                                                       aria-describedby="quantity"/>
                                                <label for="example-number-input">Quantity</label>
                                            </div>

                                        
										
										
										
								
                               <div class="form-group" >
                                                        <label for="exampleInputFile">Product image</label>
<input type="file" class="form-control-filez" name="FileInput" id="FileInput" aria-describedby="fileHelp"/>
<!--input type="submit" class="btn btn-primary fuse-ripple-ready"  id="submit-btn" value="Upload product image" /-->
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
                                                       </div>

													
<button type="submit"  id="submit-btn" class="submit-button btn btn-block btn-primary my-4 mx-auto" name="btn-login" id="btn-login" aria-label="save">
                                    <span class="glyphicon glyphicon-log-in"></span> Finish
                                </button>
								<div class="row" >
								<!--small id="output" class="form-text text-muted">This is some
                                                            placeholder block-level
                                                            help text for the above input. Its a bit lighter and easily
                                                            wraps to a new line.
                                                        </small-->
</div>
                                                 													

</form>
<div class="row" >
<!--div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div>	</div>  -->   
								<small id="output" class="form-text text-muted">This is some
                                                            placeholder block-level
                                                            help text for the above input. Its a bit lighter and easily
                                                            wraps to a new line.
                                                        </small>
</div>

                                       
										
											
										
                                        </div>
                                  
									
								
									
                                </div>
								<?php
?>

                            </div>
                        
                        <!-- / CONTENT -->
                    </div>

                    <script type="text/javascript" src="../assets/js/apps/e-commerce/product/product.js"></script>
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