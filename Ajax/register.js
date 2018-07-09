/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			useremail: {
            required: true,
            
            },
            fullname: {
                required: true,
                
                },
	   },
       messages:
	   {
            password:{
                      required: "Password cannot be empty"
                     },
            user_email: "please enter your email address",
             fullname: "please enter your fullname ",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* register submit */
	   function submitForm()
	   {		
			var data = $("#register-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'function/register.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; please wait ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-register").html('<img src="btn-ajax-loader.gif" /> &nbsp; Creating ...');
						setTimeout(' window.location.href = "home.php"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; create');
									});
					}
			  }
			});
				return false;
		}
	   /* register submit */
});