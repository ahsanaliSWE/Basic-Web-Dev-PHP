<?php 
	require_once('require/database_connection.php');
	include('require/header.php'); 

?>

			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">
						<div class="row gtr-150">
							<div class="col-8 col-12-narrower">

							<article id="content">
									<header>
										<h2>Feel the Beat</h2>
										<p>Dive into the rhythm of The Chainsmokers' world.</p>
									</header>
									<a href="#" class="image featured"><img src="images/banner12.jpg" alt="Chainsmokers Vibes" style="border-radius: 10px; box-shadow: 0 4px 20px;" /></a>
									<p>Ut sed tortor luctus, gravida nibh eget, volutpat odio. Proin rhoncus, sapien mollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum condimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus ante non est. Nullam vitae feugiat libero, eu consequat sem.</p>
									<p>Proin tincidunt neque eros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et turpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius. Praesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
									<p>Mauris eleifend eleifend felis aliquet ornare. Vestibulum porta velit at elementum gravida nibh eget, volutpat odio. Proin rhoncus, sapien mollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum condimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus ante non est.</p>
									<p>Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque eros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et turpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius. Praesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
							</article>
							</div>

							<div class="col-4 col-12-narrower">
								<section>
									<header>
										<h3>Upcoming Tour</h3>
									</header>
									<p>Join The Chainsmokers for their upcoming performances worldwide! Feel the music, vibe with the crowd, and dance through the night.</p>
									<ul >
										<li>March 2025 - New York City</li>
										<li>April 2025 - Los Angeles</li>
										<li>May 2025 - Miami</li>
										<li>June 2025 - Chicago</li>
									</ul>
								</section>
								<section>
									<header>
										<h3><b>Select Date</b> for Upcoming Events!</h3>
									</header>	
									<div id="calendar" style="padding: 20px; margin: auto;"></div>
									<script>
										const calendar = new dhx.Calendar("calendar", {
											timePicker: true,
											value: new Date(),
											css: "dhx_widget--bordered"
										});
									</script>
								</section>
							</div>
							
						<div class="row features">
							<header>
								<h2>The Chainsmokers Originals</h2>
								<p>Discover the beats that defined a generation — emotional lyrics, addictive drops, and unforgettable vibes.</p>
							</header>
							<section class="col-4 col-12-narrower feature">
								<div class="image-wrapper first">
									<a href="#" class="image featured"><img src="images/cover1.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
							<section class="col-4 col-12-narrower feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/cover2.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
							<section class="col-4 col-12-narrower feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/cover3.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
						</div>
						

					</div>
				</div>
			</div>

			

<?php include('require/footer.php'); ?>