<?php include 'tpl/header.tpl.php'; ?>
	<!-- Nadea PageTitle Section Start -->
	<section id="page-title" class="clear skype-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="page-title">
						<h1>Contact</h1>
					</div>
				</div><!-- col 6-->
				<div class="col-sm-8">
					<div class="ndbreadcrumb">
						<ul class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="active">Contact</li>
						</ul>
					</div>
				</div><!-- col 6-->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</section>
	<!-- Nadea PageTitle Section End -->

	<!-- GoogleMap Section Start -->
	<section class="mapArea contactpagemap">
		<div id="contactMap" class="contact-map"></div>
	</section>
	<!-- GoogleMap Section End -->

	<section class="ndcontactfm">
		<div class="container">
			<div class="ndheight"></div>
			<div class="row">
				<div class="col-sm-8">
					<div class="sectionsbd contact-f animation" data-animation="animation-fade-in-left">
						<h2>Send Us a Massage</h2>
						<div id="message"></div>
						<form method="post" action="php/contact.php" name="cform" id="cform">
							<div class="row-fulid-con">
								<div class="col-sm-4">
									<input type="text" name="name" id="name" maxlength="80" placeholder="Your Name">
								</div>
								<div class="col-sm-4">
									 <input type="text" name="email" id="email" maxlength="80" placeholder="Your Email">
								</div>
								<div class="col-sm-4">
									 <input type="text" name="subject" id="subject" maxlength="80" placeholder="Your Subject">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="text-area">
										<textarea name="massage" id="massage" rows="5" placeholder="Your Massage"></textarea>
										<input class="pull-left submitBnt" type="submit" id="submit" name="submit" value="Send">
									</div>
								</div>
							</div>
							<div id="simple-msg"></div> <!-- data submit status -->
						</form> <!-- Form-section End -->
					</div>
				</div>
				<div class="col-sm-4">
					<div class="sidecontarinfo animation" data-animation="animation-fade-in-right">
						<h2>Contact Info</h2>
						<ul class="address">
							<li>
								<div class="pull-left icon-pin-addcon">
									<i class="icon_pin_alt"></i>
								</div>
								<p>Corporation, Inc.<br/>123 Aolsom Ave, Suite 600, New York</p>
							</li>
							<li>
								<div class="pull-left icon-pin-addcon">
									<i class="icon_mobile"></i>
								</div>
								<p>(123) 456-7890<br/>(123) 0987-654</p>
							</li>
							<li>
								<div class="pull-left icon-pin-addcon">
									<i class="icon_mail_alt"></i>
								</div>
								<p><a class="mail-box" href="mailto:#"> email@gmail.com</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div><!-- .row end-->
			<div class="ndheight"></div>
		</div><!-- .container end-->
	</section>
	<!-- Contact section End -->

	<!-- AboutTempleat Section Start -->
	<section id="ndboutcon" class="cnabgray-bg clear">
		<div class="ndheight"></div>
		<div class="container">
			<div class="row">
				 <!-- Reviews Section -->
				<div class="col-sm-6">
					<div class="ndcontactab">
						<div class="nd-abtitletemp animation" data-animation="animation-fade-in-left">
							<h2>ABOUT US</h2>
							<p>Nadea is a cross browser compatible, retina ready, responsive  template with touch support that features a clean design that is multipurpose template which is suitable for a wide variety of websites.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nisi metus, euismod in ornare eu, pretium at orci faucibusculis.
							</p>
							<div class="ndabreadmr">
								<a class="readMore button-ab" href="aboutus.html" target="blank">Read More</a>
							</div>
						</div>
					</div>
				</div><!-- /.col-sm-6 -->

				<div class="col-sm-6">
					<div class="abcomImg animation" data-animation="animation-fade-in-right">
						<img src="images/gray-pc.png" class="img-responsive" alt="Ab Cp"/>
					</div>
				</div><!-- /.col-sm-6 -->

			</div>
		</div>
		<div class="ndheight"></div>
	</section>
	<!-- AboutTempleat Section End -->

	<!-- Nadea Recent Work Start -->
	<div class="ndheight"></div>
	<section class="ndreccont clear animation" data-animation="animation-fade-in-up" id="ndrecentworks">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="heading">
						<h2 class="ndnwdrak">Recent Works</h2>
					</div>
				</div>
			</div>
			<div class="row-fulid clear">
				<ul class="portfolioContainer isotope ndrecentwork" id="owl-ndab-recentwork">
					<li class="web col-sm-3">
						<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/1.jpg" title="Project Title2" class="zoom lb lb_warsaw1 image-responsive">	<i class="icon_search"></i> </a> <span class="border-right"> </span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"> </i> </a></span> </span> <img src="images/projects/thumb-images/1.jpg" alt="" > </div>
					</li><!-- item 1-->

					<li class="web photo col-sm-3">
						<div class="portfolio4col">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/2.jpg" title="Project Title2" class="zoom lb lb_warsaw1 image-responsive"><i class="icon_search"></i></a> <span class="border-right"></span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"></i> </a> </span> </span> <img src="images/projects/thumb-images/2.jpg" alt="" > </div>
						</div>
					</li><!-- item 2-->

					<li class="photo col-sm-3">
						<div class="portfolio4col">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/3.jpg" title="Project Title3" class="zoom lb lb_warsaw1 image-responsive"><i class="icon_search"></i></a> <span class="border-right"></span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"></i> </a> </span> </span> <img src="images/projects/thumb-images/3.jpg" alt="" > </div>
						</div>
					</li><!-- item 3-->

					<li class="design col-sm-3">
						<div class="portfolio4col">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/4.jpg" title="Project Title4" class="zoom lb lb_warsaw1 image-responsive"><i class="icon_search"></i></a> <span class="border-right"></span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"></i> </a> </span> </span> <img src="images/projects/thumb-images/4.jpg" alt="" > </div>
						</div>
					</li><!-- item 4-->

					<li class="web col-sm-3">
						<div class="portfolio4col">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/5.jpg" title="Project Title5" class="zoom lb lb_warsaw1 image-responsive"><i class="icon_search"></i></a> <span class="border-right"></span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"></i> </a> </span> </span> <img src="images/projects/thumb-images/5.jpg" alt="" > </div>
						</div>
					</li><!-- item 5-->

					<li class="web design photo col-sm-3">
						<div class="portfolio4col">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/6.jpg" title="Project Title6" class="zoom lb lb_warsaw1 image-responsive"><i class="icon_search"></i></a> <span class="border-right"></span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"></i> </a> </span> </span> <img src="images/projects/thumb-images/6.jpg" alt="" > </div>
						</div>
					</li><!-- item 6-->

					<li class="photo web col-sm-3">
						<div class="portfolio4col">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/7.jpg" title="Project Title7" class="zoom lb lb_warsaw1 image-responsive"><i class="icon_search"></i></a> <span class="border-right"></span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"></i> </a> </span> </span> <img src="images/projects/thumb-images/7.jpg" alt="" > </div>
						</div>
					</li><!-- item 7-->

					<li class="web design photo col-sm-3">
						<div class="portfolio4col">
							<div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a href="images/projects/big-images/8.jpg" title="Project Title8" class="zoom lb lb_warsaw1 image-responsive"><i class="icon_search"></i></a> <span class="border-right"></span> <a href="#" title="Project Link" target="_blank" class="linKed"> <i class="icon_link"></i> </a> </span> </span> <img src="images/projects/thumb-images/8.jpg" alt="" > </div>
						</div>
					</li><!-- item 8-->
				</ul><!-- ul end-->
			</div>
		</div><!-- container end -->
	</section>
	<div class="ndheight"></div>
	<!--Recent Work End -->


	<!-- Newslater Section Start -->
	<section class="clear skype-bg" id="ndnewslater" >
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="massage heading animation" data-animation="animation-fade-in-up">
						<div class="ndfactns">
							<i class="newswhIcon ndnewswhIcon"></i>
						</div>
						<h2>Newsleter</h2>
					</div>
				</div><!-- row end -->
				<div class="animation" data-animation="animation-fade-in-right">
					<div class="col-sm-offset-4 col-sm-4">
						<div class="Sine-Up">
							<form action="#" method="post" class="subscribe-form">
							  <input type="email" name="email" class="subscribe-input" placeholder="Your Email Here">
							  <button type="submit" class="subscribe-submit">Sing Up</button>
							</form>
						</div>
					</div><!-- col 4 end -->
				</div><!-- animation end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section>
	<!-- Newslater Section End -->

	<!-- OurClient Section Start -->
	<div class="clear white-bg animation" data-animation="animation-fade-in-up" id="ndOurClient2">
		<div class="container">
			<div class="row row-dd">
				<div id="owl-OurClient">
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo1.png" alt="Owl Image">
						</a>
					</div><!-- Client 1-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo2.png" alt="Owl Image">
						</a>
					</div><!-- Client 2-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo3.png" alt="Owl Image">
						</a>
					</div><!-- Client 3-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo4.png" alt="Owl Image">
						</a>
					</div><!-- Client 4-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo5.png" alt="Owl Image">
						</a>
					</div><!-- Client 5-->

					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo1.png" alt="Owl Image">
						</a>
					</div><!-- Client 1-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo2.png" alt="Owl Image">
						</a>
					</div><!-- Client 2-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo3.png" alt="Owl Image">
						</a>
					</div><!-- Client 3-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo4.png" alt="Owl Image">
						</a>
					</div><!-- Client 4-->
					<div class="item owl-clientimg">
						<a class="singleClient" href="#" title="client">
							<img src="images/client/logo5.png" alt="Owl Image">
						</a>
					</div><!-- Client 5-->

				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
<?php include 'tpl/footer.tpl.php'; ?>