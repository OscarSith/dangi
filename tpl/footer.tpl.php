		<!-- Footer Section Start -->
		<section class="footer-bg clear animation" data-animation="animation-fade-in-up" id="footer">
			<div class="rows">
				<div class="col-sm-5 ndft-no-padding footerbg-left">
					<div class="footer-left">
						<div class="col-sm-12 fotter-nopadd">
							<div class="ft_left">
								<h1 class="texth1">HOLA</h1>
								<h3 class="head_ft">NOS ENCANTARÍA INTERACTUAR <br/>CON USTED.</h3>
								<div class="ftsocial">
									<ul class="social_sharenadea">
										<li>
											<a href="https://www.facebook.com/dangipublicidad/" target="blank">
												<i class="fa fa-facebook fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#" target="blank">
												<i class="fa fa-twitter fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-skype fa-2x"></i>
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/user/dangiapublicidad" target="_blank">
												<i class="fa fa-youtube fa-2x"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-7 ndft-no-padding footerbg-right">
					<div class="footer-right">
						<div class="col-sm-6 col-sm-offset-6 fotter-nopadd2">
							<div class="nadea_ContInro">
								<h3 class="fthead">Información de contacto</h3>
								<ul class="address">
									<li>
										<div class="pull-left">
											<div class="ftIcon icon-pin-add">
												<i class="ndlocationIcon ndftIcon"></i>
											</div>
										</div>
										<p>Dirección<br>Calle Monte Cedro Mz. M Lt. 10 - SURCO.</p>
									</li>
									<li>
										<div class="pull-left">
											<div class="ftIcon icon-phone-add">
												<i class="ndphoneeIcon ndftIcon"></i>
											</div>
										</div>
										<p>999 119 350<br/>959 135 937</p>
									</li>
									<li>
										<div class="pull-left">
											<div class="ftIcon icon-from">
												<i class="ndformIcon ndftIcon"></i>
											</div>
										</div>
										<p>Email:<a class="mail-box" href="mailto:#"> info@agenciadangi.com</a></p>
									</li>
								</ul>
							</div>
						</div><!-- 6Col end-->
					</div><!-- .test row end -->
				</div><!-- col 7 end -->
			</div><!-- rows end -->

			<!-- Footer Bottom Start-->
			<div class="footer-bottom clear">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<ul class="footer-nav pull-left">
								<li><a href="index.html">Home</a></li>
								<li><a href="aboutus.html">Nosotros</a></li>
								<li><a href="#">Servicios</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div><!-- col 6 end -->
						<div class="col-sm-6">
							<p class="copywrite pull-right">&copy; 2015 Agencia Dangi - Construido con pasión.</p>
						</div><!-- col 6 end -->
					</div><!-- row end -->
				</div><!-- container end -->
			</div><!-- Footer Bottom End -->
		</section><!-- footer section end  -->

		<div class="go-up"><img src="images/back-top.png" alt="Back-To-Top"/></div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<?php if ($path != 'aboutus.php'): ?>
			<script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
			<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
			<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script>
			<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
			<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<?php endif ?>

		<?php if ($path == 'contact.php'): ?>
			<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
			<script type="text/javascript" src="js/gmaps.js"></script>
		<?php endif ?>
		<script type="text/javascript">
			var tpj=jQuery;
			tpj.noConflict();
			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				var $banner = tpj('.banner');
				if ($banner.length) {
					$banner.revolution({
						dottedOverlay:"none",
						delay:9000,
						startwidth:1500,
						startheight:700,
						hideThumbs:200,

						thumbWidth:120,
						thumbHeight:50,
						thumbAmount:5,

						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"preview3",


						navigationHAlign:"center",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"off",						// Enable Swipe Function : on/off
						onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off
						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
						shadow:0,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
						fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
					});
				}
			});
		</script>
		<?php if ($path == 'contact.php'): ?>
			<script type="text/javascript">
				var map;

				map = new window.GMaps({
					div: '#contactMap',
					lat: -12.1368316,
					lng: -76.984311,
					scrollwheel: false,
					zoomControl: false,
					disableDoubleClickZoom: false,
					disableDefaultUI: true,
					zoom: 17,
				});

				var styles = [
					{
						stylers: [
							{ hue: "#00ffe6" },
							{ saturation: -100 }
						]
					}
				];

				map.addStyle({
					styledMapName:"Styled Map",
					styles: styles,
					mapTypeId: "map_style"
				});

				map.setStyle("map_style");
				map.addMarker({
					lat: -12.1368316,
					lng: -76.984311,
					icon: 'images/mapmarker.png',
					title: '',
					infoWindow: {
						content: ''
					}
				});
			</script>
		<?php endif ?>
		<script type="text/javascript" src="js/ms-drop-down.js"></script>
		<!--<script type="text/javascript" src="js/easy-tabs.js"></script>-->
		<script type="text/javascript" src="js/main.js" ></script>
    </body>
</html>