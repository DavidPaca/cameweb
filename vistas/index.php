<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>C.A.M.E.</title>
    <!-- para el ico de inicio -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logoCAME5.png" />
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?php echo base_url; ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Materialize css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?php echo base_url; ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>assets/css/styleCarousel.css" rel="stylesheet" />
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logoCAME5.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">INICIO</a></li>
                    <li><a href="#features-sec">A CERCA DE</a></li>
                    <li><a href="#faculty-sec">EQUIPO RESPONSABLE</a></li>
                    <li><a href="#services-sec">SERVICIOS</a></li>
                    <li><a href="#contacto-sec">CONTACTOS</a></li>
                    <!-- <li><a href="#course-sec">EVENTOS</a></li>
                    <li><a href="#contact-sec">GALERÍA</a></li> -->
                    <!-- <li><a href="vistas/ingreso.php">INGRESO</a></li> -->
                </ul>
            </div>

        </div>
    </div>
    <!--NAVBAR SECTION END-->
    <div id="home">
        <div class="container">
            <?php include "vistasGenerales/carousel.php"; ?>
        </div>
    </div>


    <!-- <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>THE UNIQUE METHOD</h1>
                                    <a href="#features-sec" class="btn btn-info btn-lg">
                                        GET AWESOME
                                    </a>
                                    <a href="#features-sec" class="btn btn-success btn-lg">
                                        FEATURE LIST
                                    </a>
                                </li>
                            
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>UNMATCHED APPROACH</h1>
                                    <a href="#features-sec" class="btn btn-primary btn-lg">
                                        GET AWESOME
                                    </a>
                                    <a href="#features-sec" class="btn btn-danger btn-lg">
                                        FEATURE LIST
                                    </a>
                                </li>
                            
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>AWESOME FACULTY PANEL</h1>
                                    <a href="#features-sec" class="btn btn-default btn-lg">
                                        GET AWESOME
                                    </a>
                                    <a href="#features-sec" class="btn btn-info btn-lg">
                                        FEATURE LIST
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->

    <!--HOME SECTION END-->
    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">

                <div class="col-lg-12  col-md-12 col-sm-12">

                    <h2 data-scroll-reveal="enter from the bottom after 0.1s" style="color: #1a50e5; padding-top: 0px;"><i class="fa fa-university"></i> BIENVENIDO AL CENTRO DE APOYO ESCOLAR <i class="fa fa-book"></i><br><br>
                        <div style="font-size: 2.5rem;"> C.A.M.E.</div>
                    </h2>
                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <!-- <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2"> -->
            <div>
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line"> QUIENES SOMOS </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s" style="text-align: justify;">
                    Somos una Institución Académica en crecimiento, que presta servicios de tareas dirigidas y nivelación de conocimientos en las asignaturas principales que son: matemática, lengua y literatura, ciencias naturales y estudios sociales.
                    <br><br>
                    C.A.M.E., fue constituida en la ciudad de Riobamba el 5 de Abril del 2022 por la Eco. Carla Pamela Quishpe Gualán con la finalidad de brindar apoyo escolar a estudiantes de básica elemental (segundo, tercer y cuarto grado de primaria), básica media (quinto, sexto, séptimo grado de primaria), básica superior ( octavo, noveno y décimo grado) y bachillerato
                </p>
            </div>

        </div>
        <!--/.HEADER LINE END-->


        <div class="row">


            <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center><i class="fa fa-comments-o fa-4x icon-round-border"></i></center>
                    <center>
                        <h3>MISIÓN</h3>
                    </center>
                    <!-- <hr />
                    <hr /> -->
                    <p>
                        Brindar servicios de apoyo escolar y nivelación de conocimientos académicos que satisfagan las necesidades academicas y adquieran seguridad al momento de poner en prática los conocimientos en cada una de sus instituciones educativas.

                    </p>
                    <!-- <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a> -->
                </div>
            </div>
            <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <center><i class="fa fa-eye fa-4x icon-round-border"></i></center>
                    <center>
                        <h3>VISIÓN</h3>
                    </center>

                    <p>
                        Convertirnos en una Institución Académica líder, que sea capaz de expandirse en distintas ciudades del país, para yudar a muchos estudiantes en su rendimiento académico, en cada una de sus instituciones educativas.

                    </p>
                    <!-- <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a> -->
                </div>
            </div>
            <!-- <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <i class="fa fa-magic fa-4x icon-round-border"></i>
                    <h3>ONE TO ONE STUDY</h3>
                    <hr />
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                    </p>
                    <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a>
                </div>
            </div> -->


        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="faculty-sec">
        <div class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">EQUIPO RESPONSABLE </h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        El equipo responsable de trabajo esta constituido por las siguientes personas a cargo:
                    </p>
                </div>

            </div>
            <!--/.HEADER LINE END-->

            <div class="row">


                <div class="col-lg-6  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                    <div class="faculty-div">
                        <img src="assets/img/equipo/eq1.png" class="img-rounded" />
                        <h3>CARLA QUISHPE </h3>
                        <hr />
                        <h4>Economista </h4>
                        <p style="text-align: justify;">
                            Durante el tiempo de mi profesión me he desenvuelto en varias actividades educativas: docente de primaria y segundaría, apoyo de proyectos de investigación, asesoría de tesis, tareas dirigidas,y acompañamiento escolar. también he realizado actividades contables y administrativas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="faculty-div">
                        <img src="assets/img/equipo/eq4.png" class="img-rounded" />
                        <h3>DAVID PACA</h3>
                        <hr />
                        <h4>Ingeniero en Sistemas y Computación </h4>
                        <p style="text-align: justify;">
                            Soy desarrollador de software autodidacta con cuatro años de experiencia, a la vez tengo el conocimiento de reparación y mantenimiento de computadoras de escritorio y laptops. Busco nuevos desafíos para aplicar mis conocimientos.
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                    <div class="faculty-div">
                        <img src="assets/img/equipo/3.jpg" class="img-rounded" />
                        <h3>RUBY DECORSA</h3>
                        <hr />
                        <h4>Management <br /> Department</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo .

                        </p>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- EQUIPO SECTION END-->

    <!-- EQUIPO EVENTOS-->
    <!-- <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">EVENTOS </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">

                </p>
            </div>
        </div>
        <div class="row set-row-pad"> -->
            <?php // include "vistasGenerales/eventos.php"; ?>
        <!-- </div>
    </div> -->
    <!-- COURSES EVENTOS END-->


    <!-- COURSES GALERIA-->
    <!-- <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">GALERÍA </h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo.
                        </p>
                    </div>

                </div>
               
                <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- COURSES GALERIA FIN-->
    <div id="contacto-sec" class="container set-pad">
        <div class="overlay">
            <div class="row text-center">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CONTACTOS </h1>
                <div class="row set-row-pad">
                    <div class="col-md-8">
                        <div class="map">
                            <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7513757126558!2d-78.52714418989117!3d-0.3319093996634301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d5a2548ebfd141%3A0x9bd61650ecc36d6e!2sBarrio%20Divino%20Ni%C3%B1o!5e0!3m2!1ses!2sec!4v1697711584641!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <h4>Información</h4>
                        <br>
                        <ul>
                            <li><i class="fa fa-map-marker fa-2x" style=" color:#ea4335;"></i> Quito - Barrio Divino Niño</li>
                            <li></i> Manzana 23 A - Bloque 1</li>
                            <li></i> Sector sur mas arriba del barrio Caupicho</li>
                            <li><i class="fa fa-phone fa-2x" style=" color:#1c2b4b;"></i> 0983033547 - 0984111628</li>
                            <br><br>
                            <li></i> QUITO - ECUADOR</li>
                           
                            <!-- <li><a href="#"> <img src="assets/img/Social/facebook.png" alt="" /> </a></li>
                            <li><a href="#"> <img src="assets/img/Social/facebook.png" alt="" /> </a></li> -->
                        </ul>
                        <section class="iconsMap" id="iconsMap">
                            <div>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT SECTION END-->
    <div id="footer">
        &copy <?php echo date("Y")?> | All Rights Reserved | <a href="https://softcodi.com/"  style="color: #fff" target="_blank">Design by : SOFTCODI</a>
    </div>
    <!-- FOOTER SECTION END-->

    <!--  Jquery Core Script -->
    <script src="<?php echo base_url; ?>assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="<?php echo base_url; ?>assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts -->
    <script src="<?php echo base_url; ?>assets/js/jquery.flexslider.js"></script>
    <!--  Scrolling Reveal Script -->
    <script src="<?php echo base_url; ?>assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts -->
    <script src="<?php echo base_url; ?>assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts -->
    <script src="<?php echo base_url; ?>assets/js/custom.js"></script>


</body>

</html>