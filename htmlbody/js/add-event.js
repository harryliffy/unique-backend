
$(document).ready(function(e){
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'function/events_process.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
				$('#fupForm').css("opacity",".5");
				$('#submitBtn').html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; please wait ...');
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg == 'ok'){
					$('#submitBtn').html('<img src="btn-ajax-loader.gif" /> &nbsp; Saving ...');
						
                    $('#fupForm')[0].reset();
                    $('.statusMsg').html('<span class="alert alert-success"><span class="mute fa fa-info"></span> Event added successfully.</span>');
                    setTimeout(' window.location.href = ""; ',3000);
                }else{
                    $('.statusMsg').html('<span class="alert alert-danger" > Some problem occurred, please try again.</span>');
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
    
    //file type validation
    $("#file").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            return false;
        }
    });
});
