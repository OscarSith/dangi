<?php
$path = $_SERVER['PHP_SELF'];
$path = array_pop(explode('/', $path));
$classHeader = 'headerStyle';
if ($path == 'index.php') {
	$classHeader = 'headerStyle1';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Agencia Digital Dangi</title>
<meta name="description" content="Agencia Digital de creacion de paginas web y marketing digital, Entre los principales servicios que ofrecemos esta la creacion de paginas web, diseño de sitios web para comercio electronico, desarollo de videos corporativos, SEO (posicionamiento web en buscadores), Analitica Web, SEM (Google adwords), CRO(Optimizacion del ratio de conversion), estrategias publicitarias y Planning">
<meta name="keywords" content="Agencia Digital Dangi, Agencia Digital, desarrollo de paginas web, diseño de paginas web, creacion videos corporativos, videos institucionales, Social media, campañas digitales">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main-style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/css3-animations.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/responsive.css">
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css"/>
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css"/>

<?php if ($path == 'index.php' || $path == 'blog.php'): ?>
	<!-- Revolution slider css -->
	<link rel="stylesheet" href="rs-plugin/css/settings.css"/>
	<link rel="stylesheet" href="rs-plugin/css/revolution.css"/>

	<!-- Owl Carousel css -->
	<link href="js/lib/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="js/lib/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="js/lib/owl-carousel/owl.transitions.css" rel="stylesheet">
<?php endif ?>

<!-- font icon css style-->
<link rel="stylesheet" href="font/css/font-awesome.css">
<link rel="stylesheet" href="font/icons/iconstyle.css">

<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-114x114.png">

</head>
<body id="top" class="ndhome">
	<header class="header <?php echo $classHeader ?>" id="header">
		<div class="ndheader" id="ndheader">
			<div class="sticky scrollHeaderWrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="logo pull-left">
								<!-- <a class="navbar-brand" href="index.html">
									Nade<span class="font-color">a.</span>
								</a> -->
								<a href="index.php" id="logo"><img src="images/logo-dangi.png" alt="Logo" /></a>
							</div>
							<nav class="mainMenu mainNav pull-right" id="mainNav">
								<ul class="navTabs">
									<li><a href="index.php" class="active">Home</a></li>
									<li>
										<a href="#">La Agencia</a>
										<ul class="dropDown sub-menu">
											<li><a href="aboutus.php">Nosotros</a></li>
											<li><a href="portfolio-single2.php">Campañas sociales</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Servicios</a>
										<ul class="dropDown sub-menu">
											<li><a href="planning-dangi.php">Planning</a></li>
											<li><a href="disenioweb-dangi.php">Desarrollo Web</a></li>
											<li><a href="herramientas-digitales-dangi.php">Herramientas Digitales</a></li>
											<li><a href="socialmedia-dangi.php">Social Media</a></li>
											<li><a href="#">Diseño Publicitario</a></li>
											<li><a href="audiovisuales-dangi.php">Audiovisuales</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Portafolio</a>
										<ul class="dropDown sub-menu">
											<li><a href="#">Planning</a></li>
											<li><a href="#">Desarrollo Web</a></li>
											<li><a href="#">Herramientas Digitales</a></li>
											<li><a href="#">Social Media</a></li>
											<li><a href="#">Diseño Publicitario</a></li>
											<li><a href="#">Audiovisuales</a></li>
										</ul>
									</li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contáctenos</a></li>
								</ul>
							</nav>

							<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
							<div class="clearfix"></div>
							<div class="responsiveMainNav"></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>