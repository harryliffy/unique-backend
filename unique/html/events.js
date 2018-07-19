	/*
	Author: Harry Lifford
	URL: https://www.harrylifford.com/
	*/

	$('document').ready(function()
	{ 
		/* validation */
		$("#login-form").validate({
		rules:
		{
				password: {
				required: true,
				},
				user_email: {
				required: true,
				email: true
				},
		},
		messages:
		{
				password:{
						required: "please enter your password"
						},
				user_email: "please enter your email address",
		},
		submitHandler: submitForm	
		});  
		/* validation */
		
		/* login submit */
		function submitForm()
		{		
				var data = $("#login-form").serialize();
					
				$.ajax({
					
				type : 'POST',
				url  : 'events_process.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(response)
				{						
						if(response=="ok"){
										
							$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Publishing ...');
							setTimeout(' window.location.href = "events"; ',3000);
							document.getElementById("closebtnx").click();
					
							
						}
						else{
										
							$("#error").fadeIn(1000, function(){						
					$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
					setTimeout(' window.location.href = "#"; ',2000);
												$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Add');
										});
						}
				}
				});
					return false;
			}
		/* login submit */
	});