

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
			url  : 'prof_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Please wait ...');
			},
			success :  function(response)
			   {						
					if(response=="Profile created"){
									
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Creating account ...');
						setTimeout(' window.location.href = "index"; ',1000);
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