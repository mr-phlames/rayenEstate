<?php 
	session_start();
	require('php/contact.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rayen Real Estate</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Rayen Real Estate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<!-- Phone -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/phone-call.svg" alt=""></div>
						<span>telephone</span>
					</li>
					<!-- Address -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/placeholder.svg" alt=""></div>
						<span>address</span>
					</li>
					<!-- Email -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/envelope.svg" alt=""></div>
						<span>email@contact.com</span>
					</li>
				</ul>
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#"><img src="images/logo.png" style="width: 120px; height: 50px;"></a></div>
			<div style="flex: 1;"></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li ><a href="about.php">About us</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
			<?php 
				if (isset($_SESSION['id'])) {
					echo '<div class="ml-auto">
						<a href="profile.php" style="margin: 0px 40px; display: flex; justify-content: flex-start; align-items: center;" class="nav-profile-link-text">
							<img src="images/realtor_2.jpg" class="nav-profile-image">
							'.$_SESSION["username"].'
						</a>
					</div>';
				}  else {
					echo '
						<div class="ml-auto">
							<a href="auth/register.php" style="margin: 0px 40px;">SIGN UP</a>
						</div>
						<div class="submit ml-auto"><a href="auth/login.php">LOGIN</a></div>
					';
				}
			?>
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>
	
	</header>

	<!-- Menu -->

	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
			<nav class="menu_nav">
                <ul>
					<?php 
					echo isset($_SESSION['id']) ? '
					<li>
                        <a href="profile.php" style="margin-bottom: 50px; display: flex; justify-content: flex-end; align-items: center;">
                            <img src="images/realtor_2.jpg" class="nav-profile-image">
                            <span>'.$_SESSION["username"].'</span>
                        </a>
					</li>' : '';
					?>
                </ul>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li><a href="contact.php">Contact</a></li>
                </ul>
                <br>
                <br>
                <ul>
                    <li><a href="php/logout.php">Logout</a></li>
                </ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Contact</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h1>Get in touch</h1></div>
					</div>
				</div>
			</div>
			<div class="row contact_row">

				<!-- Contact - About -->
				<div class="col-lg-4 contact_col">
					<div class="logo"><a href="#"><img src="images/logo.png" style="width: 120px; height: 50px;"></a></div>
					<div class="contact_text">
						<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
					</div>
				</div>

				<!-- Contact - Info -->
				<div class="col-lg-4 contact_col">
					<div class="contact_info">
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/placeholder_2.svg" alt=""></div>
								</div>
								<span>address</span>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/phone-call-2.svg" alt=""></div>
								</div>
								<span>telephone</span>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/envelope-2.svg" alt=""></div>
								</div>
								<span>email@mail.com</span>
							</li>
						</ul>
					</div>
				</div>

				<!-- Contact - Image -->
				<div class="col-lg-4 contact_col">
					<div class="contact_image d-flex flex-column align-items-center justify-content-center">
						<img src="images/contact_image.jpg" alt="">
					</div>
				</div>

			</div>
			<div class="row contact_form_row">
				<div class="col">
					<div class="contact_form_container">
						<form action="contact.php" method="post" class="contact_form text-center" id="contact_form">
							<div class="row">
								<div class="col-lg-4">
									<input type="text" class="contact_input" placeholder="Your name" name="name" value="<?php echo isset($_SESSION['id']) ? $_SESSION['username'] : ($errors['name'] || $errors['email'] || $errors['title'] || $errors['body']) ? $name : '' ?>">
									<div class="contact-form-error"><?php echo $errors['name'] ?></div>
								</div>
								<div class="col-lg-4">
									<input type="email" class="contact_input" placeholder="Your e-mail" name="email" value="<?php echo isset($_SESSION['id']) ? $_SESSION['email'] : ($errors['name'] || $errors['email'] || $errors['title'] || $errors['body']) ? $email : '' ?>">
									<div class="contact-form-error"><?php echo $errors['email'] ?></div>
								</div>
								<div class="col-lg-4">
									<input type="text" class="contact_input" placeholder="Subject" name="title" value="<?php echo ($errors['name'] || $errors['email'] || $errors['title'] || $errors['body']) ? $title : '' ?>">
									<div class="contact-form-error"><?php echo $errors['title'] ?></div>
								</div>
							</div>
							<br>
							<div class="contact-form-error"><?php echo $errors['body'] ?></div>
							<textarea class="contact_textarea contact_input" placeholder="Message" name="body" value="<?php echo ($errors['name'] || $errors['email'] || $errors['title'] || $errors['body']) ? $body : '' ?>"></textarea>
							<br>
							<button class="contact_button" name="contact_btn">send message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="contact_map_container">
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map">
						map
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
	
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_about">
							<div class="footer_logo"><a href="#"><span>Rayen Estates</span></a></div>
							<div class="footer_text">
								<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum
									dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo
									cursus in.</p>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="footer_submit"><a href="#">submit listing</a></div>
						</div>
					</div>
	
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_column">
							<div class="footer_title">Information</div>
							<div class="footer_info">
								<ul>
									<!-- Phone -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/phone-call.svg" alt=""></div>
										<span>mobile</span>
									</li>
									<!-- Address -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/placeholder.svg" alt=""></div>
										<span>address</span>
									</li>
									<!-- Email -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/envelope.svg" alt=""></div>
										<span>email@contact.com</span>
									</li>
								</ul>
							</div>
							<div class="footer_links usefull_links">
								<div class="footer_title">Useful Links</div>
								<ul>
									<li><a href="#">Listings</a></li>
									<li><a href="#">Featured Properties</a></li>
									<li><a href="#">Contact Agents</a></li>
									<li><a href="#">About us</a></li>
								</ul>
							</div>
						</div>
					</div>
	
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_links">
							<div class="footer_title">Properties Types</div>
							<ul>
								<li><a href="#">Properties for rent</a></li>
								<li><a href="#">Properties for sale</a></li>
								<li><a href="#">Commercial</a></li>
								<li><a href="#">Homes</a></li>
								<li><a href="#">Villas</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Residential</a></li>
								<li><a href="#">Appartments</a></li>
								<li><a href="#">Off plan</a></li>
							</ul>
						</div>
					</div>
	
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_title">Featured Property</div>
						<div class="listing_small">
							<div class="listing_small_image">
								<div>
									<img src="images/listing_1.jpg" alt="">
								</div>
								<div
									class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="listing_small_tag tag_house"><a href="listings.php">house</a></div>
									<div class="listing_small_tag tag_sale"><a href="listings.php">for sale</a></div>
								</div>
								<div class="listing_small_price">GH¢ 562 346</div>
							</div>
							<div class="listing_small_content">
								<div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
									<img src="images/icon_1.png" alt="">
									<a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
								</div>
								<div class="listing_small_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_3.png" alt="">
											<span>2</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_4.png" alt="">
											<span>5</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_5.png" alt="">
											<span>2</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div
							class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="copyright order-md-1 order-2">
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
									href="https://Michael Darko-Duodu.com" target="_blank">Michael Darko-Duodu</a>
							</div>
							<nav class="footer_nav order-md-2 order-1 ml-md-auto">
								<ul
									class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="listings.php">Listings</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>