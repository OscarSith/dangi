<?php include 'tpl/header.tpl.php'; ?>
	<!-- Nadea PageTitle Section Start -->
	<section id="page-title" class="clear skype-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="page-title">
						<h1>Contacto</h1>
					</div>
				</div><!-- col 6-->
				<div class="col-sm-8">
					<div class="ndbreadcrumb"> </div>
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
						<div class="ndheight"></div>
                        <div class="row">
                          <div class="col-sm-8">
                            <div class="sectionsbd contact-f animation" data-animation="animation-fade-in-left">
                              <h2>Envíanos un mensaje</h2>
                            </div>
                          </div>
                        </div>
                        <h2>&nbsp;</h2>
						<div id="message"></div>
						<form method="post" action="php/contact.php" name="cform" id="cform">
							<div class="row-fulid-con">
								<div class="col-sm-4">
									<input type="text" name="name" id="name" maxlength="80" placeholder="Nombres">
								</div>
								<div class="col-sm-4">
									 <input type="text" name="email" id="email" maxlength="80" placeholder="Email">
								</div>
								<div class="col-sm-4">
									 <input type="text" name="subject" id="subject" maxlength="80" placeholder="Empresa">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="text-area">
										<textarea name="massage" id="massage" rows="5" placeholder="Mensaje"></textarea>
										<input class="pull-left submitBnt" type="submit" id="submit" name="submit" value="Enviar">
									</div>
								</div>
							</div>
							<div id="simple-msg"></div> <!-- data submit status -->
						</form> <!-- Form-section End -->
				  </div>
				</div>
				<div class="col-sm-4">
					<div class="sidecontarinfo animation" data-animation="animation-fade-in-right">
						<h2>Información de Contacto</h2>
						<ul class="address">
							<li>
								<div class="pull-left icon-pin-addcon">
									<i class="icon_pin_alt"></i>
								</div>
								<p>Dirección
Calle Monte Cedro Mz. M Lt. 10 - SURCO.</p>
							</li>
							<li>
								<div class="pull-left icon-pin-addcon">
									<i class="icon_mobile"></i>
								</div>
								<p>999119350<br/>
							    959135937</p>
							</li>
							<li>
								<div class="pull-left icon-pin-addcon">
									<i class="icon_mail_alt"></i>
								</div>
								<p><a class="mail-box" href="mailto:#">Email: info@agenciadangi.com</a></p>
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
	</section>
	<!-- AboutTempleat Section End -->

	<!-- Nadea Recent Work Start -->
	<section class="ndreccont clear animation" data-animation="animation-fade-in-up" id="ndrecentworks"><!-- container end -->
	</section>
	<!--Recent Work End -->


	<!-- Newslater Section Start -->
	<section class="clear skype-bg" id="ndnewslater" ><!-- container end -->
	</section>
	<!-- Newslater Section End -->

	<!-- OurClient Section Start -->
	<?php include 'tpl/footer.tpl.php'; ?>