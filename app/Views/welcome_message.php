<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>PROCARS - Pamplona</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url() ?>/public/img/favicon.png" rel="icon">
	<link href="<?= base_url() ?>/public/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() ?>/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/public/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/public/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/public/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/public/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url() ?>/public/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url() ?>/public/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Medicio - v2.1.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
		<div class="container d-flex align-items-center justify-content-between">
			<div class="d-flex align-items-center">
				<i class="icofont-clock-time"></i> <?= date("F j, Y, g:i a") ?>
			</div>
			<div class="d-flex align-items-center">
				<a href="https://api.whatsapp.com/send?phone=573118672380&text=Quiero%20saber%20m%C3%A1s...">
					<i class="icofont-brand-whatsapp"></i> 311 8672 380
				</a>
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<a href="<?= base_url() ?>" class="logo mr-auto"><img src="<?= base_url() ?>/public/img/corporative/logo.png" alt=""></a>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="<?= base_url() ?>">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#departments">Departments</a></li>
					<li><a href="#doctors">Doctors</a></li>
					<!-- <li class="drop-down"><a href="">Drop Down</a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
					<li><a href="#contact">Contact</a></li>

				</ul>
			</nav><!-- .nav-menu -->

			<a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Contactanos</a>

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(<?= base_url() ?>/public/img/slide/slide-2.webp)">
					<div class="container">
						<h2>Bienvenido a</h2>
						<img class="img-fluid" src="<?= base_url() ?>/public/img/corporative/logo.png">
						<p><br>En PROCARS trabajamos para ser el mejor centro de mantenimiento automotriz del nororiente colombiano.</p>

						<a href="#about" class="btn-get-started scrollto">QUIENES SOMOS</a>
						<a href="https://www.youtube.com/watch?v=BIrhmzL_bdA" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="icofont-play-alt-2"></i> Ver Video </a>





					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(<?= base_url() ?>/public/img/slide/slide-1.jpg)">
					<div class="container">
						<h2>Nuestros servicios</h2>

						<img class="img-portada" src="<?= base_url() ?>/public/img/corporative/portada.jpg">
						<p><br>Contamos con el mejor equipo, especializado para brindarte ayuda, recueda estamos para servirte!!!</p>
						
							<a href="#services" class="btn-get-started scrollto">NUESTROS SERVICIOS</a>
							<a href="https://www.youtube.com/watch?v=BIrhmzL_bdA" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="icofont-play-alt-2"></i> Ver Video </a>
					

					</div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(<?= base_url() ?>/public/img/slide/slide-3.jpg)">
					<div class="container">
						<h2>Sequi ea ut et est quaerat</h2>
						<p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
						<a href="#about" class="btn-get-started scrollto">Read More</a>
						<a href="https://www.youtube.com/watch?v=BIrhmzL_bdA" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="icofont-play-alt-2"></i> Ver Video </a>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Featured Services Section ======= -->
		<section id="featured-services" class="featured-services">
			<div class="container" data-aos="fade-up">

				<div class="row">
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
							<div class="icon"><i class="icofont-heart-beat"></i></div>
							<h4 class="title"><a href="">Lorem Ipsum</a></h4>
							<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
							<div class="icon"><i class="icofont-drug"></i></div>
							<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
							<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
							<div class="icon"><i class="icofont-thermometer-alt"></i></div>
							<h4 class="title"><a href="">Magni Dolores</a></h4>
							<p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
							<div class="icon"><i class="icofont-dna-alt-1"></i></div>
							<h4 class="title"><a href="">Nemo Enim</a></h4>
							<p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Featured Services Section -->

		<!-- ======= Cta Section ======= -->
		<section id="cta" class="cta">
			<div class="container" data-aos="zoom-in">

				<div class="text-center">
					<h3>Mecánica automotriz? Electrónica automotriz? Necesitas ayuda?</h3>
					<p>Te brindamos toda la ayuda que necesites!!</p>
					<a class="cta-btn scrollto" href="#services">Nuestros Servicios</a>
				</div>

			</div>
		</section><!-- End Cta Section -->

		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Nosotros</h2>
					<p>En PROCARS trabajamos para ser el mejor centro de mantenimiento automotriz del nororiente colombiano. Nuestro propósito es garantizar calidad, eficiencia y cumplimiento a nuestros clientes por medio de la implementación de tecnología de punta, talento humano calificado y la mejor política de atención. Estamos ubicados en Pamplona Norte de Santander y próximamente en otras ciudades.</p>
				</div>

				<div class="row">
					<!-- ======= Featured Services Section ======= -->
					<section id="featured-services" class="featured-services">
						<div class="container" data-aos="fade-up">

							<div class="row">
								<div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
									<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
										<div class="icon"><i class="icofont-heart-beat"></i></div>
										<h4 class="title"><a href="">Misión</a></h4>
										<p class="description">Ofrecer el mejor centro de mantenimiento automotriz en Pamplona. Trabajamos con entusiasmo para que nuestros clientes tengan en sus vehículos una experiencia de transporte cómoda, segura y confiable. </p>
									</div>
								</div>

								<div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
									<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
										<div class="icon"><i class="icofont-badge"></i></div>
										<h4 class="title"><a href="">Visión</a></h4>
										<p class="description">Para el año 2025, seremos el principal proveedor de soluciones para el sector automotriz en el Nororiente colombiano.</p>
									</div>
								</div>



							</div>

						</div>
					</section><!-- End Featured Services Section -->

				</div>

			</div>
		</section><!-- End About Us Section -->
		<!-- ======= Services Section ======= -->
		<section id="services" class="services services">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Services</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon"><i class="icofont-heart-beat"></i></div>
						<h4 class="title"><a href="">Lorem Ipsum</a></h4>
						<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon"><i class="icofont-drug"></i></div>
						<h4 class="title"><a href="">Dolor Sitema</a></h4>
						<p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon"><i class="icofont-dna-alt-2"></i></div>
						<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
						<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon"><i class="icofont-heartbeat"></i></div>
						<h4 class="title"><a href="">Magni Dolores</a></h4>
						<p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon"><i class="icofont-disabled"></i></div>
						<h4 class="title"><a href="">Nemo Enim</a></h4>
						<p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon"><i class="icofont-autism"></i></div>
						<h4 class="title"><a href="">Eiusmod Tempor</a></h4>
						<p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
					</div>
				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Gallery Section ======= -->
		<section id="gallery" class="gallery">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Gallery</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
					<a href="<?= base_url() ?>/public/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-1.jpg" alt=""></a>
					<a href="<?= base_url() ?>/public/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-2.jpg" alt=""></a>
					<a href="<?= base_url() ?>/public/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-3.jpg" alt=""></a>
					<a href="<?= base_url() ?>/public/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-4.jpg" alt=""></a>
					<a href="<?= base_url() ?>/public/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-5.jpg" alt=""></a>
					<a href="<?= base_url() ?>/public/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-6.jpg" alt=""></a>
					<a href="<?= base_url() ?>/public/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-7.jpg" alt=""></a>
					<a href="<?= base_url() ?>/public/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url() ?>/public/img/gallery/gallery-8.jpg" alt=""></a>
				</div>

			</div>
		</section><!-- End Gallery Section -->

		<!-- ======= Counts Section ======= -->
		<section id="counts" class="counts">
			<div class="container" data-aos="fade-up">

				<div class="row no-gutters">

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-doctor-alt"></i>
							<span data-toggle="counter-up">85</span>
							<p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
							<a href="#">Find out more &raquo;</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-patient-bed"></i>
							<span data-toggle="counter-up">18</span>
							<p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
							<a href="#">Find out more &raquo;</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-laboratory"></i>
							<span data-toggle="counter-up">8</span>
							<p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
							<a href="#">Find out more &raquo;</a>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-award"></i>
							<span data-toggle="counter-up">150</span>
							<p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
							<a href="#">Find out more &raquo;</a>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Counts Section -->

		<!-- ======= Features Section ======= -->
		<section id="features" class="features">
			<div class="container" data-aos="fade-up">

				<div class="row">
					<div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
						<div class="icon-box mt-5 mt-lg-0">
							<i class="bx bx-receipt"></i>
							<h4>Est labore ad</h4>
							<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
						</div>
						<div class="icon-box mt-5">
							<i class="bx bx-cube-alt"></i>
							<h4>Harum esse qui</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
						</div>
						<div class="icon-box mt-5">
							<i class="bx bx-images"></i>
							<h4>Aut occaecati</h4>
							<p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
						</div>
						<div class="icon-box mt-5">
							<i class="bx bx-shield"></i>
							<h4>Beatae veritatis</h4>
							<p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
						</div>
					</div>
					<div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>
				</div>

			</div>
		</section><!-- End Features Section -->


		<!-- ======= Appointment Section ======= -->
		<section id="appointment" class="appointment section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Make an Appointment</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
					<div class="form-row">
						<div class="col-md-4 form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4 form-group">
							<input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<select name="department" id="department" class="form-control">
								<option value="">Select Department</option>
								<option value="Department 1">Department 1</option>
								<option value="Department 2">Department 2</option>
								<option value="Department 3">Department 3</option>
							</select>
							<div class="validate"></div>
						</div>
						<div class="col-md-4 form-group">
							<select name="doctor" id="doctor" class="form-control">
								<option value="">Select Doctor</option>
								<option value="Doctor 1">Doctor 1</option>
								<option value="Doctor 2">Doctor 2</option>
								<option value="Doctor 3">Doctor 3</option>
							</select>
							<div class="validate"></div>
						</div>
					</div>

					<div class="form-group">
						<textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
						<div class="validate"></div>
					</div>
					<div class="mb-3">
						<div class="loading">Loading</div>
						<div class="error-message"></div>
						<div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
					</div>
					<div class="text-center"><button type="submit">Make an Appointment</button></div>
				</form>

			</div>
		</section><!-- End Appointment Section -->

		<!-- ======= Departments Section ======= -->
		<section id="departments" class="departments">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Departments</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-4 mb-5 mb-lg-0">
						<ul class="nav nav-tabs flex-column">
							<li class="nav-item">
								<a class="nav-link active show" data-toggle="tab" href="#tab-1">
									<h4>Cardiology</h4>
									<p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
								</a>
							</li>
							<li class="nav-item mt-2">
								<a class="nav-link" data-toggle="tab" href="#tab-2">
									<h4>Neurology</h4>
									<p>Voluptas vel esse repudiandae quo excepturi.</p>
								</a>
							</li>
							<li class="nav-item mt-2">
								<a class="nav-link" data-toggle="tab" href="#tab-3">
									<h4>Hepatology</h4>
									<p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
								</a>
							</li>
							<li class="nav-item mt-2">
								<a class="nav-link" data-toggle="tab" href="#tab-4">
									<h4>Pediatrics</h4>
									<p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-8">
						<div class="tab-content">
							<div class="tab-pane active show" id="tab-1">
								<h3>Cardiology</h3>
								<p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
								<img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
								<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
							</div>
							<div class="tab-pane" id="tab-2">
								<h3>Neurology</h3>
								<p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
								<img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
								<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
							</div>
							<div class="tab-pane" id="tab-3">
								<h3>Hepatology</h3>
								<p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
								<img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
								<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
							</div>
							<div class="tab-pane" id="tab-4">
								<h3>Pediatrics</h3>
								<p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
								<img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
								<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Departments Section -->

		<!-- ======= Testimonials Section ======= -->
		<section id="testimonials" class="testimonials">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Testimonials</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

					<div class="testimonial-item">
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
						<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
						<h3>Saul Goodman</h3>
						<h4>Ceo &amp; Founder</h4>
					</div>

					<div class="testimonial-item">
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
						<img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
						<h3>Sara Wilsson</h3>
						<h4>Designer</h4>
					</div>

					<div class="testimonial-item">
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
						<img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
						<h3>Jena Karlis</h3>
						<h4>Store Owner</h4>
					</div>

					<div class="testimonial-item">
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
						<img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
						<h3>Matt Brandon</h3>
						<h4>Freelancer</h4>
					</div>

					<div class="testimonial-item">
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
						<img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
						<h3>John Larson</h3>
						<h4>Entrepreneur</h4>
					</div>

				</div>

			</div>
		</section><!-- End Testimonials Section -->

		<!-- ======= Doctors Section ======= -->
		<section id="doctors" class="doctors section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Doctors</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
						<div class="member" data-aos="fade-up" data-aos-delay="100">
							<div class="member-img">
								<img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="icofont-twitter"></i></a>
									<a href=""><i class="icofont-facebook"></i></a>
									<a href=""><i class="icofont-instagram"></i></a>
									<a href=""><i class="icofont-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Walter White</h4>
								<span>Chief Medical Officer</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
						<div class="member" data-aos="fade-up" data-aos-delay="200">
							<div class="member-img">
								<img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="icofont-twitter"></i></a>
									<a href=""><i class="icofont-facebook"></i></a>
									<a href=""><i class="icofont-instagram"></i></a>
									<a href=""><i class="icofont-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Sarah Jhonson</h4>
								<span>Anesthesiologist</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
						<div class="member" data-aos="fade-up" data-aos-delay="300">
							<div class="member-img">
								<img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="icofont-twitter"></i></a>
									<a href=""><i class="icofont-facebook"></i></a>
									<a href=""><i class="icofont-instagram"></i></a>
									<a href=""><i class="icofont-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>William Anderson</h4>
								<span>Cardiology</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
						<div class="member" data-aos="fade-up" data-aos-delay="400">
							<div class="member-img">
								<img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
								<div class="social">
									<a href=""><i class="icofont-twitter"></i></a>
									<a href=""><i class="icofont-facebook"></i></a>
									<a href=""><i class="icofont-instagram"></i></a>
									<a href=""><i class="icofont-linkedin"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h4>Amanda Jepson</h4>
								<span>Neurosurgeon</span>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Doctors Section -->


		<!-- ======= Pricing Section ======= -->
		<section id="pricing" class="pricing">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Pricing</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-3 col-md-6">
						<div class="box" data-aos="fade-up" data-aos-delay="100">
							<h3>Free</h3>
							<h4><sup>$</sup>0<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li class="na">Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4 mt-md-0">
						<div class="box featured" data-aos="fade-up" data-aos-delay="200">
							<h3>Business</h3>
							<h4><sup>$</sup>19<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li class="na">Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="300">
							<h3>Developer</h3>
							<h4><sup>$</sup>29<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li>Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="400">
							<span class="advanced">Advanced</span>
							<h3>Ultimate</h3>
							<h4><sup>$</sup>49<span> / month</span></h4>
							<ul>
								<li>Aida dere</li>
								<li>Nec feugiat nisl</li>
								<li>Nulla at volutpat dola</li>
								<li>Pharetra massa</li>
								<li>Massa ultricies mi</li>
							</ul>
							<div class="btn-wrap">
								<a href="#" class="btn-buy">Buy Now</a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Pricing Section -->


		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container">

				<div class="section-title">
					<h2>Contáctanos</h2>
					<p>Por cualquiera de estos medios es muy fácil contactarnos.</p>
				</div>

			</div>



			<div class="container">

				<div class="row mt-5">

					<div class="col-lg-5">

						<div class="row">
							<div class="col-md-12">

								<a href="https://g.page/PRO-CARS-Norte-de-santander?share" target="_blank">
									<div class="info-box">
										<i class="bx bx-map"></i>
										<h3>Dirección</h3>
										<p>Cll 4 # 8-100 Pamplona, Norte de Santander</p>
									</div>
								</a>

							</div>
							<div class="col-md-6">
								<a href="mailto:procarspamplona@gmail.com">
									<div class="info-box mt-4">
										<i class="bx bx-envelope"></i>
										<h3>Nuestro Email</h3>
										<p>procarspamplona@gmail.com</p>
									</div>
								</a>
							</div>

							<div class="col-md-6">
								<a href="https://api.whatsapp.com/send?phone=573118672380&text=Quiero%20saber%20m%C3%A1s...">
									<div class="info-box mt-4">
										<i class="bx bx-phone-call"></i>
										<h3>WhatsApp</h3>
										<p>3118672380</p>
									</div>
								</a>
							</div>


						</div>
						<br>

					</div>

					<div class="col-lg-7">
						<div>
							<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.8026535950694!2d-72.64642628522442!3d7.37600229467765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6881d04a4956c7%3A0xa0faee94f488fb3!2sPRO%20CARS!5e0!3m2!1ses!2sco!4v1621548618400!5m2!1ses!2sco" frameborder="0" allowfullscreen></iframe>
						</div>

					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-6 barralateral">
						<div class="footer-info">
							<h3>Síguenos</h3>
							<p>

							</p>
							<div class="social-links mt-3">
								<a href="https://www.facebook.com/procarspamplona/photos" class="facebook"><i class="bx bxl-facebook"></i></a>
								<a href="https://www.instagram.com/procars_pamplona/?hl=es-la" class="instagram"><i class="bx bxl-instagram"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>



				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				<strong><span>PROCARS</span></strong>. Todos los derechos reservados.
			</div>
			<div class="credits">
				Pamplona, Norte de Santander
			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url() ?>/public/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>/public/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url() ?>/public/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url() ?>/public/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>/public/vendor/counterup/counterup.min.js"></script>
	<script src="<?= base_url() ?>/public/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>/public/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url() ?>/public/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url() ?>/public/js/main.js"></script>

</body>

</html>