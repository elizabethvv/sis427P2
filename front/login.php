<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>INMOSUCRE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">INMOSUCRE</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a href="index.php"
                            class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Inicio</a>
                    </li>

                    <li class="nav-item mx-0 mx-lg-1"><a href="login.php"
                            class="nav-link py-3 px-0 px-lg-3 rounded ">Iniciar Sesión</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section mt-5" id="contact">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Iniciar Sesión</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">


                    <form>
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail2">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail2"
                                placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword2">Contraseña</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword2"
                                placeholder="Contraseña">
                        </div>

                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        <a class="btn btn-info" data-toggle="modal" data-target="#modal-registro"
                            role="button">Registrarse</a>

                    </form>
                </div>

            </div>


        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Ubicación</h4>
                    <p class="lead mb-0">
                        Nataniel Aguirre N° 28
                        <br />
                        Telefono 61903706
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Acerca de la Plataforma</h4>
                    <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->

            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © 2021</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top position-fixed">
        <a class="js-scroll-trigger d-lg-none d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-registro" tabindex="-1" aria-labelledby="modal-registroLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="modal-registroLabel">Registrarse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-registro" method="POST" name="sentMessage" novalidate="novalidate">


                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Nombre</label>
                                <input class="form-control" id="nombre" type="text" placeholder="Nombre"
                                    required="required"
                                    data-validation-required-message="Por favor introduce tu Nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Apellido</label>
                                <input class="form-control" id="apellido" type="text" placeholder="Apellido"
                                    required="required"
                                    data-validation-required-message="Por favor introduce tu Apellido" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Correo Electrónico</label>
                                <input class="form-control" id="email" type="email" placeholder="Correo Electónico"
                                    required="required"
                                    data-validation-required-message="Por favor introduce tu correo electrónico" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Contraseña</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Contraseña"
                                    required="required"
                                    data-validation-required-message="Por favor introduce Contraseña" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Repetir Contraseña</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Contraseña"
                                    required="required"
                                    data-validation-required-message="Por favor introduce Contraseña" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>


                        <br />
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton"
                                type="submit" onclick="verificar_datos()">Registrarse</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>