/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#acc-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			Lname: {
            required: true,
            email: false
            },
	   },
       messages:
	   {
            password:{
                      required: "please enter your password"
                     },
            Lname: "please enter your Full name",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#acc-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'acc_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Saving ...');
			},
			success :  function(response)
			   {						
					if(response=="Account created successfully"){
									
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Saving ...');
						setTimeout(' window.location.href = "account"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-success fade in"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Account created');
											//setTimeout(' window.location.href = "login.php"; ',3000);
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});