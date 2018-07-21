
<?php include('html/dbconfig.php');

include('header.php');
?>
<!-- active page tracker  -->
<script>
var element = document.getElementById("eventsnav");
element.classList.add("active");
</script>
<!-- active page tracker  -->

		<section class="events-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Upcoming Events</h2>
					</div>
				</div>
			</div>
		</section>
		
		<section class="events-search-filter">
			<div class="container">
				<div class="row">
					<div class="section-content clearfix">
						<div class="col-sm-6 col-md-3">
							<label>Keyword</label>
							<input type="text" placeholder="Type event keyword here"/>
						</div>
						<div class="col-sm-6 col-md-3">
							<label>Date</label>
							<input type="text" class="datepicker" >
						</div>
						<div class="col-sm-6 col-md-3">
							<label>Event Categories</label>
							<select class="selectpicker dropdown">
								<option>Select Categories</option>
								<option>Academics</option>
								<option>Sports</option>
								<option>Music</option>
								<option>Research</option>
							</select>
						</div>
						<div class="col-sm-6 col-md-3">
							<label></label>
							<input class="hvr-push" type="submit" value="Search Event"/>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="events-list">
			<div class="container">
				<div class="row">

<?php
try { // wonder magic data read formdabase table
    $stmt = $db_con->query("SELECT *  FROM sch_events ORDER BY event_date ");  // query to select all
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //looop fetching the records avialable
	echo'	<div class="col-xs-6 col-lg-3">
		<div class="events-item">
			<div class="events-item-img">
				<a href="#">
					<img src="html/uploads/'.$row['event_image'].'" alt="image">
				</a>
			</div>
			<div class="events-item-info">
				<h3><a href="events-single">'.$row['event_name'].'</a></h3>
				<ul class="event-meta">
					<li>
						<i class="fa fa-calendar" aria-hidden="true"></i>
						April 03, 2018
					</li>
					<li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						Unique blossoms schools
					</li>
				</ul>
				<p>'.$row['event_description'].'</p>
			</div>
			<div class="events-item-link">
				<a href="events-single" class="hvr-push">Learn More</a>
			</div>
		</div>
	</div>';
	}}
	catch(PDOException $exception)
{
	echo $exception->getMessage();
}
?>
				
					
					<!--div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-2.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Prefects Badge/Oath Taking Ceremony</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										April 27, 2018
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Auditorium
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-3.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">The world Book day celebration</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										April 30, 2018
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-2.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Teachers Appreciation Day</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										May 02, 2018
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Parking Hall
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					
										
					
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-5.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">UBS week</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										May 07  11, 2018
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Basket Stadium
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-6.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Early Years Week</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										May 21, 2018
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Multipurpose
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
				
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-7.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Cultural Day </a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										May 25, 2018
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div-->
						<!--
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-8.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">English Free Class Speaking and Reading</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 25, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 2nd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					
					
	
					
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-1.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">UBS Library Research with Sarah Moya</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 16, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 3rd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-2.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Workshop Viola with Mrs. Angelina</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 15, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 3rd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					
						
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-3.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Yoga Training with Mrs. Emily Foster</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 20, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-4.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Cheerleaders Auditions UBS with NFL</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 12, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Parking Hall
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-5.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Basketball Competition UBS vs Kuliah</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 22, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Basket Stadium
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-6.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Web Design Workshop with Simon Sinek</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 23, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Multipurpose
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<!--
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-7.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">Biologycal Research Harvard University</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 24, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 5th Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
								<a href="events-single">
									<img src="images/events-item-img-8.jpg" alt="image">
								</a>
							</div>
							<div class="events-item-info">
								<h3><a href="events-single">English Free Class Speaking and Reading</a></h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										August 25, 2016
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										UBS Building 2nd Floor
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
							</div>
							<div class="events-item-link">
								<a href="events-single" class="hvr-push">Learn More</a>
							</div>
						</div>
					</div>-->	
				</div>
				<a href="#" class="events-load-more">
					<span>Load More <i class="fa fa-angle-down" aria-hidden="true"></i></span>
				</a>
			</div>
		</section>
		
		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="newsletter-content">
						<div class="col-md-6">
							<h2><strong>Get The Latest News From UBS!</strong> Join our newsletter now</h2>
						</div>
						<div class="col-md-6">
							<input type="email" placeholder="Enter your e-mail address">
							<input class="hvr-push" type="submit" value="Subscribe">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php 
		include('footer.php');
		
		?>