<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	//header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<script type="text/javascript">
 window.onscroll = function(ev) {
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
     console.log("bottom");
     document.getElementById("loadMore1").click();
  }
};
</script>
  <?php
  include_once("header.php");
  
  ?>


<script type="text/javascript" src="test/dummy.js1"></script>

  <!--link rel="stylesheet" type="text/css" href="test/style.css1"-->
  
  <link rel="stylesheet" type="text/css" href="test/result-light.css1">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js1"></script>
    
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css1">
    
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js1"></script>
    
  

  <style type="text/css">
    p {
    margin: 0 0 10px;
    font-family: 'Roboto', sans-serif;
}
p, pre {
    margin: 0 0 1em 0;
}
a, a:link, a:focus, a:active, a:visited {
    outline: 0;
}
a, a:link, a:focus, a:active, a:visited {
    outline: 0;
}
img {
    border: 0;
    -ms-interpolation-mode: bicubic;
}
.interior.container .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.blogBox {
    margin-bottom: 30px;
    box-sizing: border-box;
}
.blogBox .item {
    /* background: #f4f4f4; */
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
    /* height: 100%; */
}
.blogBox .item:hover {
    background: #e8e8e8;
    cursor: pointer;
}
.blogBox .item img {
    width: 100%;
}
.blogBox .item p {
    /* padding-bottom: 40px;*/
}
.blogBox .item .blogTxt {
    padding: 25px;
}
.blogBox .item h2 {
    margin: 15px 0;
    font-family: 'Roboto', sans-serif;
}
.blogBox .item .blogCategory a {
    padding: 5px 10px 2px;
    border: 1px solid #616161;
    color: #616161;
    text-transform: uppercase;
    font-size: 14px;
    font-family: 'Roboto', sans-serif;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}
.blogBox .item .blogCategory a:hover {
    background: #616161;
    color: #fff;
    text-decoration: none;
}

#loadMore {
    padding-bottom: 30px;
    padding-top: 30px;
    text-align: center;
    width: 100%;
}
#loadMore a {
    background: #042a63;
    border-radius: 3px;
    color: white;
    display: inline-block;
    padding: 10px 30px;
    transition: all 0.25s ease-out;
    -webkit-font-smoothing: antialiased;
}
#loadMore a:hover {
    background-color: #021737;
}

@media screen and (min-width: 1200px) {
	.blogBox .featured h2 {
		font-size: 42px;
	}
}
@media screen and (min-width: 991px) {
	.blogBox .featured h2 {
		font-size: 30px;
		font-style: italic;
	}	
	.blogBox .featured .blogTxt {
		max-width: 50%;
		width: 100%;
		padding: 50px;
		float: left;
		background: inherit;
		min-height: 378px;
	}
	.blogBox .featured img {
		max-width: 50%;
		width: 100%;
		float: left;
		min-height: 378px;
	}
}
@media screen and (min-width: 768px) {
	.blogBox .item img {
		height: 152px;
	}
}
  </style>

  <title>Adding a Load More Button</title>

  
    





<script type="text/javascript">//<![CDATA[
window.onload=function(){
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
  
   //$(window).scroll(function() {   
  // if($(window).scrollTop() + $(window).height() == $(document).height()) {
      // alert("bottom!");
      
         //  $("#loadMore1").html('<img src="btn-ajax-loader.gif" /> &nbsp; loading more ...'); 
        
      
     // $("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Saving ...');
    //   document.getElementById("loadMore1").click();
     // documnet.getElementById('loadMore').click() ;
  // }
//});
}//]]> 

</script>

  <!-- end nav --> 
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">


      <div class="interior container clearfix">
   <div class="row"> 
      <div class="col-xs-12 col-sm-6 col-md-12 blogBox">
         <div class="item featured">
         <article class="blog_entry">
                  <header class="blog_entry-header">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html">Spakul Blog</a> </h2>
                    </div>
                    <!--blog_entry-header-inner--> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img5" src="images/blog-img5.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
                    <div class="entry-content">
                      <p>Fusce ac pharetra urna. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
                    </div>
                   
                  </div>
                
                </article>
         </div>
      </div>
      <div id="loadMore" style="">
            <div class="block block-tags">
              <div class="block-title"> Popular Tags</div>
              <div class="block-content">
                <div class="tags-list"> <a href="#">Clutches</a>  <a href="#">Clutches</a>  <a href="#">Clutches</a> <a href="#">Bag</a> <a href="#">Laptop bags</a> <a href="#">Luggage</a> <a href="#">Backpacks</a> <a href="#">Piper Bag</a> </div>
                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
              </div>
            </div>
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" >
         <div class="item">
         <article class="blog_entry">
         <header class="blog_entry-header">
           <div class="blog_entry-header-inner">
             <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html">Lorem ipsum dolor sit amet, consectetur</a> </h2>
           </div>
           <!--blog_entry-header-inner--> 
         </header>
         <div class="entry-content">
           <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img5" src="images/blog-img5.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
           <div class="entry-content">
             <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan. Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
           </div>
           <p> <a class="btn" href="blog_single_post.html">Read More</a> </p>
         </div>
       
       </article> 
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" >
         <div class="item">
         <article class="blog_entry">
         <header class="blog_entry-header">
           <div class="blog_entry-header-inner">
             <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html">Lorem ipsum dolor sit amet, consectetur</a> </h2>
           </div>
           <!--blog_entry-header-inner--> 
         </header>
         <div class="entry-content">
           <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img5" src="images/blog-img5.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
           <div class="entry-content">
             <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
    
             <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
           </div>
           <p> <a class="btn" href="blog_single_post.html">Read More</a> </p>
         </div>
       
       </article>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" >
         <div class="item">
         <article class="blog_entry">
         <header class="blog_entry-header">
           <div class="blog_entry-header-inner">
             <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html">Lorem ipsum dolor sit amet, consectetur</a> </h2>
           </div>
           <!--blog_entry-header-inner--> 
         </header>
         <div class="entry-content">
           <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img5" src="images/blog-img5.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
           <div class="entry-content">
             <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
        <p> n et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
           </div>
           <p> <a class="btn" href="blog_single_post.html">Read More</a> </p>
         </div>
       
       </article>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
         <div class="item">
         <article class="blog_entry">
         <header class="blog_entry-header">
           <div class="blog_entry-header-inner">
             <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html"></a> </h2>
           </div>
           <!--blog_entry-header-inner--> 
         </header>
         <div class="entry-content">
           <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img5" src="images/blog-img5.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
           <div class="entry-content">
             <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
          
             <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
           </div>
           <p> <a class="btn" href="blog_single_post.html">Read More</a> </p>
         </div>
       
       </article>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
         <div class="item">
            <img src="https://www.solodev.com/assets/fancy/travel8.jpg">
            <div class="blogTxt">
               <div class="blogCategory">
                  <a href="/">Growth Hacking</a>
               </div>
               <h2>
                  Pro brute causae aliquip ad
               </h2>
               <p class="post_intro hidden-xs">
                  No ipsum invidunt eos, ei ius dicit platonem perpetua. Mea te feugait ocurreret aliquando, ei i...
               </p>
            </div>
         </div>
      </div>   <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
         <div class="item">
            <img src="https://www.solodev.com/assets/fancy/travel8.jpg">
            <div class="blogTxt">
               <div class="blogCategory">
                  <a href="/">Growth Hacking</a>
               </div>
               <h2>
                  Pro brute causae aliquip ad
               </h2>
               <p class="post_intro hidden-xs">
                  No ipsum invidunt eos, ei ius dicit platonem perpetua. Mea te feugait ocurreret aliquando, ei i...
               </p>
            </div>
         </div>
      </div>   <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
         <div class="item">
            <img src="https://www.solodev.com/assets/fancy/travel8.jpg">
            <div class="blogTxt">
               <div class="blogCategory">
                  <a href="/">Growth Hacking</a>
               </div>
               <h2>
                  Pro brute causae aliquip ad
               </h2>
               <p class="post_intro hidden-xs">
                  No ipsum invidunt eos, ei ius dicit platonem perpetua. Mea te feugait ocurreret aliquando, ei i...
               </p>
            </div>
         </div>
      </div>   <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
         <div class="item">
            <img src="https://www.solodev.com/assets/fancy/travel8.jpg">
            <div class="blogTxt">
               <div class="blogCategory">
                  <a href="/">Growth Hacking</a>
               </div>
               <h2>
                  Pro brute causae aliquip ad
               </h2>
               <p class="post_intro hidden-xs">
                  No ipsum invidunt eos, ei ius dicit platonem perpetua. Mea te feugait ocurreret aliquando, ei i...
               </p>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
         <div class="item">
            <img src="https://www.solodev.com/assets/fancy/travel2.jpg">
            <div class="blogTxt">
               <div class="blogCategory">
                  <a href="/">Content Marketing</a>
               </div>
               <h2>
                  Lorem ipsum dolor sit amet, consect adipiscing elit
               </h2>
               <p class="post_intro hidden-xs">
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ...
               </p>
            </div>
         </div>
      </div>
      <div id="loadMore" style="">
         <a id="loadMore1" href="#">Load More</a>
      </div>
   </div>
</div>











<!--div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">


      <div class="interior container clearfix">
   <div class="row">

        <div class="col-sm-9">
        <div class="col-main">
          <div class="page-title">
            <h2>Blog</h2>
          </div>
          <div class="blog-wrapper" id="main">
            <div class="site-content" id="primary">
              <div role="main" id="content">
               

              
                <article class="blog_entry">
                  <header class="blog_entry-header">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html">Lorem ipsum dolor sit amet, consectetur</a> </h2>
                    </div>
                    <!--blog_entry-header-inner- -> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img5" src="images/blog-img5.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
                    <div class="entry-content">
                      <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                      <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                      <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi. Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam. Phasellus ut odio dui, ut fermentum neque.</p>
                    </div>
                    <p> <a class="btn" href="blog_single_post.html">Read More</a> </p>
                  </div>
                
                </article>
                <article class="blog_entry">
                  <header class="blog_entry-header">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html">Dolor lorem ipsum</a> </h2>
                    </div>
                    <!--blog_entry-header-inner- -> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img2" src="images/blog-img6.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
                    <div class="entry-content">
                      <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                      <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                    </div>
                    <p> <a class="btn" href="blog_single_post.html">Read More</a> </p>
                  </div>
               
                </article>
                <article class="blog_entry">
                  <header class="blog_entry-header">
                    <div class="blog_entry-header-inner">
                      <h2 class="blog_entry-title"> <a rel="bookmark" href="blog_single_post.html">Pellentesque posuere</a> </h2>
                    </div>
                    <!--blog_entry-header-inner- -> 
                  </header>
                  <div class="entry-content">
                    <div class="featured-thumb"><a href="blog_single_post.html"><img alt="blog-img1" src="images/blog-img7.jpg"></a></div><div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2017-08-05</span> </div>
                    <div class="entry-content">
                      <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien. Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc pretium velit sed augue luctus accumsan.</p>
                      <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec sit amet quam sem, et aliquet est.</p>
                    </div>
                    <p> <a class="btn" href="blog_single_post.html">Read More</a> </p>
                  </div>
                 
                </article>
              </div>
            </div>
            
          </div>
        </div></div>
</div></div></div></div></div -->
        <div class="col-right sidebar col-sm-3">
          <div role="complementary" class="widget_wrapper13" id="secondary">
      
     

            <!--div class="popular-posts widget widget_categories">
              <h3 class="widget-title"><span>Categories</span></h3>
              <ul>
                <li class="cat-item cat-item-19599"><a href="#">All about clothing</a></li>
                <ul>
                </ul>
                <li class="cat-item cat-item-19599"><a href="#">Fashion trends</a></li>
                <ul>
                </ul>
              </ul>
            </div-->
            <!-- Banner Ad Block -->
       
            </div>
         

            <!-- Banner Text Block -->
            <div class="text-widget widget widget__sidebar">
              <h3 class="widget-title"><span>Text Widget</span></h3>
              <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus. Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
                <br>
                Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra. Nulla neque sapien, sollicitudin non ornare quis, malesuada.</div>
            </div-->
          </div>
        </div>
      </div>
    </div>
  </div>
 

 <!-- Brand Logo -->  
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image"> </a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div style="text-align:center"> <a href="index.html"><img src="images/logo.png" alt="logo"> </a> </div>
          <address>
          <p> <i class="fa fa-map-marker"></i>Company, 12/34 theodore drive, Jabi, Abuja, Nigeria </p>
          <p><i class="fa fa-mobile"></i><span>+ (800) 0123 456 789</span> </p>
          <p> <i class="fa fa-envelope"></i><span><a href="mailto:email@domain.com">info@spakul.com</a></span></p>
          </address>
        </div>
      </div>
    </div>
    <div class="footer-inner">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12 col-md-3">
            <div class="footer-links">
              <h4>Useful links</h4>
              <ul class="links">
                <li><a href="#" title="Product Recall">Product Recall</a></li>
                <li><a href="#" title="Gift Vouchers">Gift Vouchers</a></li>
                <li><a href="#" title="Returns &amp; Exchange">Returns &amp; Exchange</a></li>
                <li><a href="#" title="Shipping Options">Shipping Options</a></li>
                <li><a href="#" title="Help &amp; FAQs">Help &amp; FAQs</a></li>
                <li><a href="#" title="Order history">Order history</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 col-md-3">
            <div class="footer-links">
              <h4>Service</h4>
              <ul class="links">
                <li><a href="account_page.html">Account</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="shopping_cart.html">Shopping Cart</a></li>
                <li><a href="#">Return Policy</a></li>
                <li><a href="#">Special</a></li>
                <li><a href="#">Lookbook</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 col-md-2">
            <div class="footer-links">
              <h4>Information</h4>
              <ul class="links">
                <li><a href="sitemap.html">Sites Map </a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Trends</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="#">My Orders</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="footer-links">
              <div class="footer-newsletter">
                <h4>Subscribe to our news</h4>
                <form id="newsletter-validate-detail" method="post" action="#">
                  <div class="newsletter-inner">
                    <p>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</p>
                    <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                    <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="social">
                <h4>Follow Us</h4>
                <ul class="inline-mode">
                  <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="icon-social-twitter icons"></i></a></li>
                  <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                  <li class="social-network rss"><a title="Connect us on rss" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
                  <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-12 coppyright">Copyright © 2017 <a href="#"> Bigstart </a>. All Rights Reserved. </div>
          <div class="col-sm-7 col-xs-12 payment-accept">
            <ul>
              <li> <a href="#"><img src="images/payment-1.png" alt="Payment Card"></a> </li>
              <li> <a href="#"><img src="images/payment-2.png" alt="Payment Card"></a> </li>
              <li> <a href="#"><img src="images/payment-3.png" alt="Payment Card"></a> </li>
              <li> <a href="#"><img src="images/payment-4.png" alt="Payment Card"></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>


<!-- End Footer --> 

<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- jtv-jtv-mobile-menu js --> 
<script type="text/javascript" src="js/jtv-mobile-menu.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="js/countdown.js"></script> 

<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script> 
</body>
</html>