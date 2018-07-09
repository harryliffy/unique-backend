<!--

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add ddata pdo Rows with BootStrap Confirm Modal</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<script src="jquery-1.12-0.min.js"></script>

</head>
<body>

    <div class="container">
    	
        <div class="page-header">
        <h1><a target="_blank" href="https://www.codingcage.com/2016/08/delete-rows-from-mysql-with-bootstrap.html">Add pdo Rows with BootStrap Confirm Modal</a></h1>
        </div>
        
<form action="" method="post" name="create-form" id="create-form">
<div class="error" class="text-black"></div>
<div class="container">
<div class="row">
<input type="text" name="productname" id="productname">
<input type="button" value="submit" id="btn-save" name="btn-save" >

</div>
</div>

</form>






        <!--table class="table table-bordered table-condensed table-hover table-striped">
        
        	<tr>
            	<th>#ID</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>

            
            <?php
		/*	require_once 'dbconfig.php';
			$query = "SELECT product_id, product_name FROM tbl_products";
			$stmt = $db_con->prepare( $query );
			$stmt->execute();
			while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
				extract($row);
				?>
                <tr>
                <td><?php echo $product_id; ?></td>
                <td><?php echo $product_name; ?></td>
                <td>
                <a class="delete_product" data-id="<?php echo $product_id; ?>" href="javascript:void(0)">
                <i class="glyphicon glyphicon-trash"></i>
                </a></td>
                </tr>
                <?php
			}
			*/?>
            
        
        </table-->
    
    </div>
<script src="js/bootstrap.min.js"></script>
<script src="bootbox.min.js"></script>

<script>
	$('document').ready(function()
{ 
     /* validation */
	 $("#create-form").validate({
      rules:
	  {
		
			productname: {
            required: true,
            email: false
            },
	   },
       messages:
	   {
                   productname: "please enter your product name",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#create-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'create-process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-save").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Saving ...');
			},
			success :  function(response)
			   {						
					if(response=="added"){
									
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Saving ...');
						setTimeout(' window.location.href = "account"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-success fade in"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Product created');
											//setTimeout(' window.location.href = "login.php"; ',3000);
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});
</script>
</body>
</html>