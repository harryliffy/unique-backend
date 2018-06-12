

$('document').ready(function()
{ 
     /* validation */
	 $("#product-form").validate({
      rules:
	  {
			prodname: {
			required: true,
			},	
			proddesc: {
			required: true,
			},
				
			prodcat: {
			required: true,
			},				
			prodtag: {
			required: true,
			},
			
	   },
       messages:
	   {
            prodname:{
                      required: "Please enter name of product/service"
                     },
            Lname: "please enter your Full name",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#product-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'product_process.php',
			data : data,
			beforeSend: function()
			{	
			
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Please wait ...');
			},
			success :  function(response)
			   {						
					if(response=="Registration successful"){
								document.getElementById("product-images-tab").click();	
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Creating account ...');
						// setTimeout(' window.location.href = "create1"; ',1000);
						//document.getElementById("product-images-tab").click();	
						$("#btn-login").html('<span class="glyphicon glyphicon-check"></span> &nbsp; 1 of 2 complted');
						document.getElementById("btn-login").enabled = false;
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger fade in"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
											//setTimeout(' window.location.href = "account.php"; ',1000);
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});