<script>

$( document ).ready(function () {
		$(".moreBox").slice(0, 3).show();
		if ($(".blogBox:hidden").length != 0) {
			$("#loadMore").show();
		}		
		$("#loadMore").on('click', function (e) {
			e.preventDefault();
			$(".moreBox:hidden").slice(0, 6).slideDown();
			if ($(".moreBox:hidden").length == 0) {
				$("#loadMore").fadeOut('slow');
			}
		});
	});
  
   $(window).scroll(function() {   
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
      // alert("bottom!");
       document.getElementById("loadMore1").click();
     // documnet.getElementById('loadMore').click() ;
   }
});
</script>