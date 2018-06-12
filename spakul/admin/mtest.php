<?php 
session_start();
?>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","php.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
    $(function() {
	<!--$.datepicker.setDefaults($.datepicker.regional['fi']);-->
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
	  regional: "fi",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });  </script>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->


    <!-- Section: Blog -->
    <section>
      		                            	<?php
											//		echo 'hbfsdfvh';
													
						try{
				include_once("dbconfig.php");
				$_SESSION['vendor_session']="zainazeezinfo@zainazeez.com";
				$vendor_id=$_SESSION['vendor_session'];							

$mail = $db_con->prepare("SELECT * FROM quote WHERE vendor=:vendor_id ORDER BY date DESC");
			$mail->execute(array(":vendor_id"=>$vendor_id));
		//$stmtv->execute();
			//$stmtv->fetchAll();
			while($rmail = $mail->fetch(PDO::FETCH_ASSOC)){
			//	echo $vendor_id;
			$countv = $mail->rowCount();
			if ($rowv < 0 )
			 {	echo 'no user';	 echo $countv; 
		 }		
		 else{						
			echo $rmail['date'];	echo '<br>';	
			$q=$rmail["refid"];
			echo '<a href="" onclick="showUser(this.value)">';echo $rmail['uname'];echo'</a>';

echo $q;	echo '<br>';			
		 }
						}}		 
													
		catch(PDOException $e){
			echo $e->getMessage();
		}											
													
													
													
				?>
							
							
<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script--> 
				<div id="txtHint"><b></b></div> <!-------Display classromm query from ajax php.php page--------->
							
                    </div>			
         