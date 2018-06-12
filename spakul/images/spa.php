<!DOCTYPE html>
<html>
<head>


</head>
<body>

<?php


	$db_host = "server105.web-hosting.com";
	$db_name = "harrpybz_spakul";
	$db_user = "harrpybz_spakul";
	$db_pass = "(0)(0)sAreVery%al";
    try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
$q = $_GET['q'];
$ma = $db_con->prepare("SELECT DISTINCT FROM quote WHERE refid=:ref");
			$ma->execute(array(":ref"=>$q));

echo "<div>";

while($mai = $ma->fetch(PDO::FETCH_ASSOC)){	
	
	echo '   ';
				  

            echo'  
				
			<div class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 unread">


                    <div class="info col px-4">

                      <div class="subject">
                        Commits that need to be pushed lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </div>

                 



                          <div class="labels">

                            <div class="label badge badge-default" style="background-color:#607D8B;">
                              paypal
                            </div>

                        

                      </div>
 <div class="actions row no-gutters pull-right">

                        <button type="button" class="btn btn-icon">

                                                        <i class="icon-star-outline"></i>

                                                    </button>

                        <button type="button" class="btn btn-icon">

                                                        <i class="icon-label"></i>

                                                    </button>

                      </div>
                    </div>
					
					  </div>
                                           <div class="py-4 row no-gutters align-items-center justify-content-between">
<img class="avatar mr-2" alt="Alice Freeman" src="../assets/images/avatars/alice.jpg" />
                                                            <div class="col">

                                                                <div class="h6">'; echo $mai['uname'] ; echo'</div>

                                                                <div>
                                                                    <span class="text-muted">to me</span>



                                                                </div>
                                                                    <span></span>';?>
																		   <script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "show";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "hide";
	}
} 
</script>
<a id="displayText" href="javascript:toggle();">show details</a>
<div id="toggleText" style="display: none"><h1>peek-a-boo</h1></div>
																	
																	
                                                           <?php echo'</div>
                                              <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>
					  

 

					  
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lorem diam, pulvinar id nisl non, ultrices maximus nibh. Suspendisse ut justo velit. Nullam ac ultrices risus, quis auctor orci. Vestibulum volutpat nisi et neque porta ullamcorper. Maecenas porttitor porta erat ac suscipit. Sed cursus leo ut elementum fringilla. Maecenas semper viverra erat, vel ullamcorper dui efficitur in. Vestibulum placerat imperdiet tellus, et tincidunt eros posuere eget. Proin sit amet facilisis libero. Nulla eget est ut erat aliquet rhoncus. Quisque ac urna vitae dui hendrerit sollicitudin vel id sem. </p>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lorem diam, pulvinar id nisl non, ultrices maximus nibh. Suspendisse ut justo velit. Nullam ac ultrices risus, quis auctor orci. Vestibulum volutpat nisi et neque porta ullamcorper. Maecenas porttitor porta erat ac suscipit. Sed cursus leo ut elementum fringilla. Maecenas semper viverra erat, vel ullamcorper dui efficitur in. Vestibulum placerat imperdiet tellus, et tincidunt eros posuere eget. Proin sit amet facilisis libero. Nulla eget est ut erat aliquet rhoncus. Quisque ac urna vitae dui hendrerit sollicitudin vel id sem. </p>
					  
					  <h4><a class="" href="#">Type: '; echo $mai['itemcode'] ; echo'</a></h4>
                  <h4><a class="" href="#">Name: '; echo $mai['uname'] ; echo'</a></h4>
				   ';
				  
				  
				  				

}

echo '</div>';

	
//mysqli_close($con);
?>
	
</body>

</html>