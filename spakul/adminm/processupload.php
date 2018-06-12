<?php
session_start();
require_once 'dbconfig.php';
$product=	 $_SESSION['product_name'] ;
  $mask=$_SESSION['vendor_session'];
  $uploaddir=$mask.'/'.$product.'/' ;
  

  	$price= trim($_POST['price']);
  
  
if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'C:/wamp/www/spakul/admin/data/'.$uploaddir ; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die();
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["FileInput"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	switch(strtolower($_FILES['FileInput']['type']))
		{
			//allowed file types
            case 'image/png': 
			case 'image/gif': 
			case 'image/jpeg': 
			case 'image/pjpeg':
			case 'text/plain':
			case 'text/html': //html file
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			case 'application/vnd.ms-excel':
			case 'video/mp4':
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['FileInput']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$Random_Number      = rand(0, 9999999999); //Random number to be added to name.
	$NewFileName 		= $Random_Number.$File_Ext; //new file name
	
	
	
	
	mkdir("data/$mask/$product");  // create vendor product folder

	if(move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory.$NewFileName ))
	   {
		   $pic= $NewFileName; 
	
	$desc= $_SESSION['product_desc'] ;
	$ttag= $_SESSION['product_tag'] ; 
	   $vendorid= $_SESSION['vendor_session'];
	   //$price= $_SESSION['product_price'] ;
	   $itemcode="23erty4";
	   $quantity=$_SESSION['product_qty'] ;
	   if ( $quantity > 1 ) {
	   $status="1";
	   }
	   else {
		$status="0";   
		   
	   }
	   $description= $desc;
	   $image=$pic ;
	  $category= $_SESSION['product_category'] ;
	   
		    
		 /* echo $product;
		  echo $price; */
		  
		  // save products and upload product image
		  
		  //echo $uploaddir;
  

	
		   $sql = "INSERT INTO product (vendor_id, prod_name, price, itemcode,avial,description,img,category)  
 VALUES ('$vendorid','$product', '$price', '$itemcode','$status','$description','$image','$category' )";
   // use exec() because no results are returned
   $db_con->exec($sql);
   
   // displays added successfully infotab
   echo '
   
								<div style="margin:auto;  position: inherit;" class="popover bs-popover-top bs-popover-top-docs">
                                                    <div class="arrow"></div>
                                                    <h3 class="popover-title">'.$product. ' added succesfully </h3><a href="products" ><i class="icon icon-alert-eye text-muted f-14" ></i> </a>
													                                               <div class="popover-content">
                                                      
															
															<table class="table">
                                                    <thead>
                                                        <tr>
														<img src="data/'.$uploaddir.'/'.$pic.'" style="max-width:100%; border-radius:4px; " />
                                                            <th></th>
                                                            <th></th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Name</th>
                                                            <td>'.$product.'</td>
                                                                                                                    </tr>
                                                        <tr>
                                                            <th scope="row">Description</th>
                                                            <td>'.$description.'</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Category</th>
                                                            <td>'.$category.'</td>
                                                            
                                                        </tr>
                                                    <tr>
                                                            <th scope="row">Price</th>
                                                            <td>'.$price.'</td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
  
															';
															    echo '
																<br/>'; // display  successfully uploaded images
		   
		   echo '<br/><small id="output" class="form-text text-muted"> <i class="icon-checkbox-marked-circle text-success" ></i>  Product added successfully!! &nbsp;<b>Do you want to add another product ?<b/><a href="addproduct" >Yes</a>&nbsp; &nbsp; <a href="products" >No</a></small>';
	     
                                                 echo'   </div>
                                                </div>
												</div>';
		
		 	   
	}else{
		die('error uploading File!');
	}
	
}
else
{
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}