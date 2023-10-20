<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | C.A.M.E.</title>
        <!-- para el ico de inicio -->
        <link rel="shortcut icon" type="image/png" href="../assets/img/logoCAME5.png" />
        <link href="../assets/css/stylesLogin.css" rel="stylesheet" />
        
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <script src="../assets/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div class="logo-identificador">
            <img src="../assets/img/LOGOCAME7.png">
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header" style="background: #1c2b4b;"><h3 class="text-center font-weight-light my-4" style="color: #fff;">Iniciar Sessión</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Ingrese usuario" />
                                                <label for="inputEmail"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder=" Ingrese contraseña" />
                                                <label for="inputPassword"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Contraseña</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label"  for="inputRememberPassword">Recordar contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center mt-4 mb-0">
                                                <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                                <a class="btn btn-primary" style="background-color: #1c2b4b;" href="">Login</a>&nbsp;
                                                <!-- <a class="btn btn-primary" style="background-color: #1c2b4b;" href="#home">Salir</a> -->
                                                <!-- <a href="menuprincipaldatosninio.php"><button type="button" class="btn btn-primary">Regresar</button></a> -->
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
               <!--NAVBAR SECTION END-->
  
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;&nbsp;<a href="https://softcodi.com/" target="_blank" >SOFTCODI</a>&nbsp;<?php echo date("Y") ?></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../assets/js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/scripts.js"></script>
    </body>
</html>
