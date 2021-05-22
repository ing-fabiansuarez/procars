<?= $this->extend('structure/main') ?>

<?= $this->section('title') ?>PROCARS<?= $this->endSection() ?>

<?= $this->section('css') ?>
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
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(<?= base_url() ?>/public/img/slide/slide-2.jpg)">
                <div class="container">
                    <h2>Bienvenido a</h2>
                    <img class="img-fluid" src="<?= base_url() ?>/public/img/corporative/logo.png">
                    <p><br>En PROCARS trabajamos para ser el mejor centro de mantenimiento automotriz del nororiente colombiano.</p>
                    <a href="#about" class="btn-get-started scrollto">QUIENES SOMOS</a>
                    <div class="d-block d-sm-block d-md-none"><br></div>
                    <a href="https://youtu.be/Asvhvr-Ihp8" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="icofont-play-alt-2"></i> Ver Video </a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(<?= base_url() ?>/public/img/slide/slide-1.jpg)">
                <div class="container">
                    <h2>Nuestros servicios</h2>
                    <img class="img-portada" src="<?= base_url() ?>/public/img/corporative/portada.jpg">
                    <p><br>Contamos con el mejor equipo, especializado para brindarte ayuda, recueda estamos para servirte!!!</p>
                    <a href="#services" class="btn-get-started scrollto">NUESTROS SERVICIOS</a>
                    <div class="d-block d-sm-block d-md-none"><br></div>
                    <a href="https://youtu.be/Asvhvr-Ihp8" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="icofont-play-alt-2"></i> Ver Video </a>
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
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#services">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="icofont-wrench"></i></div>
                            <h4 class="title">Mecanica Automotriz</h4>
                            <p class="description">Verificamos el correcto funcionamiento de las partes que integran su vehículo para poder hacer un diagnóstico, dar mantenimiento y reparar las posibles fallas.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#services">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="icofont-car"></i></div>
                            <h4 class="title">Electrónica automotriz</h4>
                            <p class="description">Reparamos problemas de encendido, radio, computadoras, telemática, sistemas de entretenimiento en tu automóvil.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#services">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="icofont-racings-wheel"></i></div>
                            <h4 class="title">Catálogo de productos</h4>
                            <p class="description">Trabajamos con las mejores marcas del mercado.</p>
                        </div>
                    </a>
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
                </section>

            </div>
            <!--
				<div class="row">
					<img class="mx-auto d-block" src="<?= base_url() ?>/public/img/corporative/organigrama.png">
				</div> -->

        </div>
    </section><!-- End About Us Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="icofont-wrench"></i></div>
                    <h4 class="title">Mecanica Automotriz</h4>
                    <ul>
                        <li>Diagnostico automotriz.</li>
                        <li>Sincronización y reparación de motores.</li>
                        <li>Mantenimiento preventivo por kilometraje.</li>
                        <li>Reparación y revisión de cajas.</li>
                        <li>Revisión de frenos y suspensión.</li>
                        <li>Servicio de desvare.</li>
                        <li>Entre otros.</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="icofont-car"></i></div>
                    <h4 class="title">Electrónica automotriz</h4>
                    <ul>
                        <li>Diagnóstico del sistema eléctrico de encendido.</li>
                        <li>Reparación del sistema electrónico de encendido.</li>
                        <li>Revisión y reparación del sistema de carga.</li>
                        <li>Revisión y reparación del sistema de arranque.</li>
                        <li>Reparación de alternadores.</li>
                        <li>Reparación de motores de arranque.</li>
                        <li>Revisión y reparación del sistema de luces.</li>
                        <li>Instalación de alarmas.</li>
                        <li>Entre otros.</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="icofont-racings-wheel"></i></div>
                    <h4 class="title">Catálogo de productos</h4>
                    <ul>
                        <li>Llantas.</li>
                        <li>Baterías.</li>
                        <li>Lubricantes.</li>
                        <li>Repuestos.</li>
                        <li>Accesorios.</li>
                        <li>SOAT</li>
                        <li>Entre otros.</li>
                    </ul>
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
<?= $this->endSection() ?>

<?= $this->section('js') ?>
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
<?= $this->endSection() ?>