<?php
include('header.php');
?>
<!-- active page tracker  -->
<script>
var element = document.getElementById("contactnav");
element.classList.add("active");
</script>
<!-- active page tracker  -->
		<section class="contact-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Get in Touch with Us</h2>
						<p>Enquires, Complaints, Support care,  <br> Technical support</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="contact-form">
			<div class="container">
				<div class="section-content clearfix">
					<h3>Send us a Message</h3>
					<form>
						<div class="row">
							<div class="form-group col-sm-6">
								<label>Full Name</label>
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="form-group col-sm-6">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<label>Phone Number</label>
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="form-group col-sm-6">
								<label>Name of Organization (Optional)</label>
								<input type="email" class="form-control" placeholder="">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-12">
								<label>Message</label>
								<textarea></textarea>
							</div>
						</div>
						<input class="hvr-push" type="submit" value="Send">
					</form>
				</div>
			</div>
		</section>
		
		<section class="contact-information">
			<div class="container">
				<div class="section-content">
					<h3>Contact Information</h3>
					<ul>
						<li> 
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							 2251, Tangayika Street, off IBB Boulevard, behind Indian High Commission, Maitama, Abuja
						</li>
						<li> 
							<i class="fa fa-phone" aria-hidden="true"></i>
							<a href="tel:2347033958687">+234 703 395 8687</a> 
						</li>
						<li> 
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<a href="mailto:admin@sekolah.sch">admin@ubsabuja.com</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<?php include('footer.php'); ?>