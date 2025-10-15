<?php
$message_sent = false;

if(isset($_POST['fname']) && $_POST['fname'] != '')
{
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        date_default_timezone_set('America/Monterrey');
        $from = $_POST['email'];
        $subject = "Contacto ar10.com.mx, " .$_POST['fname']. " " .$_POST['lname'];
        $to = 'dev@artexa.com';
        $body="<html>
                    <body>
                        <img style=\"width:264px;height:256px;\" src=\"images/Q11.jpg?nocache=1\" align=\"center\" /><br /><br />
                        <font size=\"4\" color=\"#405498\"><strong>Datos de Contacto</strong></font><br />
                        <font color=\"#333\"><strong>Nombre:</strong> " .$_POST['fname']. " " .$_POST['lname']. "</font><br />
                        <font color=\"#333\"><strong>Correo electrónico:</strong> " .$_POST['email']. "</font><br />
                        <font color=\"#333\"><strong>Asunto:</strong> " .$_POST['subject']. "</font><br />
                        <font color=\"#333\"><strong>Mensaje:</strong><pre>" .$_POST['message']. "</pre></font><br />
                        <br /><font color=\"#333\"><strong>Los datos fueron enviados el:</strong> " .date("H:i:s / d-F-Y"). "</font><br />
                    </body>
                </html>";
        $headers = 'From: ' .$from. "\n";
        $headers .= 'MIME-Version: 1.0' ."\n";
        $headers .= 'Content-type: text/html; charset=utf-8' ."\r\n";
        //mail($to, $subject, $body, $headers);
        $message_sent = true;
    }

    
    
}/*else{
    $txterror = 'Ocurrio un error';
    unset($_POST['fname']);
    unset($_POST['lname']);
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grupo Comercial AR10 S.A. de C.V.</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <!-- Bootstrap core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Favicon-->
    <link rel="icon" type="image/png" sizes="384x384" href="ar10.png">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="dist/css/LobiBox.min.css">


    <style>
        html,
        body,
        header,
        #intro {
            height: 100%;
        }
        
        #intro {
            /*background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%283%29.jpg")no-repeat center center fixed;*/
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        .top-nav-collapse {
            background-color: #ff9800;
        }
        
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background-color: #ff9800;
            }
            .hide-on-small {
                display: none;
            }
        }
        
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background-color: #24355C;
            }
        }
        /* Extra small devices (phones, 600px and down) */
        
        @media only screen and (max-width: 600px) {
            #hide-on-tablet {
                display: none;
            }
            #show-on-tablet {
                display: block;
            }
            #gpoAr {
                margin-top: 5vh;
                font-size: 48px;
            }
        }
        /* Small devices (portrait tablets and large phones, 600px and up) */
        
        @media only screen and (min-width: 600px) {
            #hide-on-tablet {
                display: none;
            }
            #show-on-tablet {
                display: block;
            }
        }
        /* Medium devices (landscape tablets, 768px and up) */
        
        @media only screen and (min-width: 768px) {
            #hide-on-tablet {
                display: none;
            }
            #show-on-tablet {
                display: block;
            }
        }
        /* Large devices (laptops/desktops, 992px and up) */
        
        @media only screen and (min-width: 992px) {
            #hide-on-tablet {
                display: block;
            }
            #show-on-tablet {
                display: none;
            }
        }
        /* Extra large devices (large laptops and desktops, 1200px and up) */
        
        @media only screen and (min-width: 1200px) {
            #hide-on-tablet {
                display: block;
            }
            #show-on-tablet {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#"><img src="ar10.png" width="55px" height="55px" style="background-color: #fff;;border-radius: 25px;" alt="AR - 10"></a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="#intro">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#best-features">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#examples">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contácto</a>
                        </li>
                    </ul>
                    <!-- Links -->

            </div>

        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div id="intro" class="view">
            <video id="hide-on-tablet" src="./videos/finalMP4.mp4" autoplay muted loop></video>-->
            <video id="show-on-tablet" src="./videos/finalmp4-clideo.mp4" autoplay muted loop></video>
            <div class="mask rgba-black-light" style="background-color: rgba(0, 0, 0, 0.45) !important;">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 id="gpoAr" class="display-4 font-weight-bold white-text pt-5 mb-2">Grupo Comercial AR 10</h2>

                            <!-- Divider -->
                            <hr class="hr-light">
                            </h4>
                            <!--<button type="button" class="btn btn-outline-white">Read more<i class="fa fa-book ml-2"></i></button>-->
                            <div class="scroll-smoth pb-4">
                                <a class="btn btn-outline-white" href="#best-features">Leer Más <i class="fas fa-book ml-2"></i></a>
                            </div>


                        </div>
                        <div class="text-center col-md-3 col-sm-3 col-xs-3" style="display: contents;">
                            <img src="./ar10.png" class="img-fluid" alt="AR - 10" style="width: 11rem; height: 11rem;">
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">

        <div class="container">

            <!--Section: Best Features-->
            <section id="best-features" class="text-center" data-aos="fade-left">

                <!-- Heading -->
                <h1 class="mb-5 font-weight-bold">Quienes Somos</h1>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p class="h5 grey-text">Somos una empresa enfocada en el comercio exterior, principalmente en la importación y comercialización de productos.</p>
                        <p class="h5 grey-text hide-on-small">Sin importar si su empresa es grande o pequeña, entendemos sus necesidades y nos comprometemos a brindarle el mejor servicio para que sus productos lleguen a su destino lo más rápido posible.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->

            <hr class="my-5">

            <!--Section: Examples-->
            <section id="examples" class="text-center" data-aos="fade-right">

                <!-- Heading -->
                <?php echo '<h1>Here</h1>';?>
                <h1 class="mb-5 font-weight-bold">Servicios de Importación</h1>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/logistic.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Distribución y Logística</h4>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/doc2.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Consultoría y Tramites</h4>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/handshake.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Servicio Mano a Mano</h4>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/workflow.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Maniobras</h4>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/chart.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Brokeage</h4>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="img/plane.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Transferencias Internacionales</h4>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Examples-->

            <hr class="my-5">

            <!--Section: Gallery-->
            <section id="gallery">

                <!-- Heading -->
                <h1 class="mb-5 font-weight-bold text-center">Comercializadora</h1>
                <p class="mb-4 mt-4 text-center h5 grey-text">
                    En AR10 buscamos facilitar la importación de la mercancía a través de aduanas al territorio nacional y brindar asesoría para la comercialización de productos extranjeros en México
                </p>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <img class="d-block w-100 z-depth-2" src="img/truck.jpg" alt="First slide">
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="text-center pt-5 mt-5 h6">
                                        <p>"Nos enfocamos en prestar un servicio de comercio exterior con calidad, honestidad y eficiencia; comprometiendonos con nuestros clientes y buscando la plena satisfacción de sus necesidades."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <img class="d-block w-100 z-depth-2" src="img/forklift.jpg" alt="First slide">
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="text-center pt-5 mt-5 h6">
                                        <p>"A través de este esquema se hace una reducción de los controles legales para el cliente en México o en el mundo. AR10 es la entidad responsable de los asuntos de importación en relación a las regulaciones y restricciones
                                            no arancelarias e impuestos a pagar por las mercancías que se importan."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="" aria-hidden="true"><i class="fas fa-arrow-circle-left fa-2x orange-text"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="" aria-hidden="true"><i class="fas fa-arrow-circle-right fa-2x orange-text"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </section>
            <!--Section: Gallery-->

            <hr class="my-5">

            <!--Section: Contact-->
            <section id="contact" data-aos="fade-right">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Contactos</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-7 mb-5">
                        <!-- Form contact -->
                        <form class="p-5 grey-text" method="POST" name="frmcontact" id="frmcontact" action="index.php" accept-charset="UTF-8">
                            <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                                <input type="text" name="fname" id="fname" class="form-control form-control-sm">
                                <label for="fname">Nombre</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                                <input type="text" name="lname" id="lname" class="form-control form-control-sm">
                                <label for="lname">Apellido</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                                <input type="text" name="email" id="email" class="form-control form-control-sm">
                                <label for="email">Correo Electronico</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                                <input type="text" name="subject" id="subject" class="form-control form-control-sm">
                                <label for="subject">Asunto</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                                <textarea type="text" name="message" id="message" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                                <label for="message">Mensaje</label>
                            </div>
                            <div class="text-center mt-4">
                                <input type="submit" value="Enviar" class="btn btn-primary btn-md">
                            </div>
                        </form>
                        <!-- Form contact -->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5">
                        <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Dirección Oficinas Monterrey</p>
                            <p class="mb-4">Rio Magallanes 107, Colonia Central, Monterrey, Nuevo León, C.P. 64190, México</p>

                            <p class="mb-0 font-weight-bold">Telefonos</p>
                            <p class="mb-4">Directo: +52 (81) 21 84 17 99</p>
                            <p class="mb-4">Celular: +52 (81) 19 24 07 01</p>
                            <p class="mb-4">Celular: +52 (81) 10 51 64 54</p>

                            <p class="mb-0 font-weight-bold">Correo Electronico</p>
                            <p class="mb-0"><a href="#">alberto.cantu@ar10.com.mx</a></p>
                            <p class="mb-0"><a href="#">ricardo.juarez@ar10.com.mx</a></p>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Contact-->

        </div>
    </main>
    <!--Main layout-->

    <button id="back-to-top-btn"><i class="fas fa-arrow-up"></i></button>

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Copyright &copy; Comercializadora AR10 SA de CV
            <script>
                document.write(new Date().getFullYear());
            </script>
            Todos los derechos reservados
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- Start your project here-->

    <!-- SCRIPTS -->
    <script src="js/main.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 1000
        });
    </script>

    <script>
        $('.navbar a').on('click', function(e) {
            if (this.hash !== '') {
                e.preventDefault();

                const hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800);
            }
        });

        $('.scroll-smoth a').on('click', function(e) {
            if (this.hash !== '') {
                e.preventDefault();

                const hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800);
            }
        });

        // Regular map
        /**function regular_map() {
            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });
        }

        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);*/

        // Carousel options

        $('.carousel').carousel({
            interval: 3000,
        })
    </script>
    <script src="dist/js/lobibox.min.js"></script> 
    <script>

<?php
    if($message_sent)
    {
       // echo '<h1>aqui</h1>';
?>
        Lobibox.notify('success', {size: 'mini', rounded:false, position:'center top', delay: 4200, msg: 'Gracias por su interés. Nos pondremos en contacto con usted en breve.'});
<?php
    }elseif($message_sent === false && isset($_POST['fname']))
    {
        //echo '<h1>aqui abajo</h1>';
?>
        Lobibox.notify('error', {size: 'mini', rounded: false, position: 'center top', delay: 4200, msg: 'Ocurrió un problema al enviar la información. Intente de nuevo.'});
<?php
    }
?>   
    </script> 
</body>

</html>