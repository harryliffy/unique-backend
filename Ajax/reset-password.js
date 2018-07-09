/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#reset-form").validate({
      rules:
	  {

			reset_user_email: {
            required: true,
            
            },
	   },
       messages:
	   {
          
            reset_user_email: "please enter your email address",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* reset submit */
	   function submitForm()
	   {		
			var data = $("#reset-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'function/reset.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-reset").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Checking ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-reset").html('<img src="btn-ajax-loader.gif" /> &nbsp; Sending ...');
						setTimeout(' window.location.href = "login.php"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-reset").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
									});
					}
			  }
			});
				return false;
		}
	   /* reset submit */
});