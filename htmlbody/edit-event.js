$(document).ready(function (e) {
  $("#form").on('submit',(function(e) {
   e.preventDefault();
   $.ajax({
          url: "edit-event-process.php",
    type: "POST",
    data:  new FormData(this),
    contentType: false,
          cache: false,
    processData:false,
    beforeSend : function()
    {
  
     //$("#preview").fadeOut();\
     $("#err").fadeOut();
    },
    success: function(data)
       {
     if(data=='invalid file')
     {
      // invalid file format.
      $("#err").html("Invalid File !").fadeIn();
     }
     else
     {
      // view uploaded file.
      $('#button').html('<img src="btn-ajax-loader.gif" /> &nbsp; Saving ...');
      //setTimeout(' window.location.href = "#"; ',3000);
      $("#preview").html(data).fadeIn();
      $("#form")[0].reset(); 
      $('#button').html('<span class="glyphicon glyphicon-file"></span> &nbsp; File upload successful &nbsp; <span class="text-success"><i class="glyphicon glyphicon-check"></i></span>');
      $("#form").hide(); 
     }
       },
      error: function(e) 
       {
     $("#err").html(e).fadeIn();
       }          
     });
  }));
 });
 
  //file type validation
  $("#uploadImage").change(function() {
     var file = this.files[0];
     var imagefile = file.type;
     var match= ["image/jpeg","image/png","image/jpg"];
     if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
         alert('Please select a valid image file (JPEG/JPG/PNG).');
         $("#file").val('');
         return false;
     }
 });
 