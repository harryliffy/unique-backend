<!--

	Connect With Me...

	@author  : Pradeep khodke
    Blog     : http://www.codingcage.com
    Tutorial : http://www.codingcage.com/2016/08/delete-rows-from-mysql-with-bootstrap.html
    facebook : https://facebook.com/CodingCage
    twitter  : https://twitter.com/CodingCage
    twitter  : https://twitter.com/PradeepKhodke

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete MySQL Rows with BootStrap Confirm Modal</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

    <div class="container">
    	
        <div class="page-header">
        <h1><a target="_blank" href="http://www.codingcage.com/2016/08/delete-rows-from-mysql-with-bootstrap.html">Delete MySQL Rows with BootStrap Confirm Modal</a></h1>
        </div>
        
        <table class="table table-bordered table-condensed table-hover table-striped">
        
        	<tr>
            	<th>#ID</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>
            
            
            <?php
			require_once 'dbconfig.php';
			$query = "SELECT product_id, product_name FROM tbl_products";
			$stmt = $DBcon->prepare( $query );
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
			?>
            
        
        </table>
    
    </div>

<script src="jquery-1.12-0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="bootbox.min.js"></script>

<script>
	$(document).ready(function(){
		
		$('.delete_product').click(function(e){
			
			e.preventDefault();
			
			var pid = $(this).attr('data-id');
			var parent = $(this).parent("td").parent("tr");
			
			bootbox.dialog({
			  message: "Are you sure you want to Delete ?",
			  title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			  buttons: {
				success: {
				  label: "No",
				  className: "btn-success",
				  callback: function() {
					 $('.bootbox').modal('hide');
				  }
				},
				danger: {
				  label: "Delete!",
				  className: "btn-danger",
				  callback: function() {
					  
					  /*
					  
					  using $.ajax();
					  
					  $.ajax({
						  
						  type: 'POST',
						  url: 'delete.php',
						  data: 'delete='+pid
						  
					  })
					  .done(function(response){
						  
						  bootbox.alert(response);
						  parent.fadeOut('slow');
						  
					  })
					  .fail(function(){
						  
						  bootbox.alert('Something Went Wrog ....');
						  						  
					  })
					  */
					  
					  
					  $.post('delete.php', { 'delete':pid })
					  .done(function(response){
						  bootbox.alert(response);
						  parent.fadeOut('slow');
					  })
					  .fail(function(){
						  bootbox.alert('Something Went Wrog ....');
					  })
					  					  
				  }
				}
			  }
			});
			
			
		});
		
	});
</script>
</body>
</html>