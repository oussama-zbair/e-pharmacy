     <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Admin dashboard</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/css/demo.css" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper">
            <!-- sidebar -->
                @include("composent.sidebar")
            <!-- end sidbar -->
            <div class="main-panel">
                <!-- Navbar -->
                    @include("composent.menu")
                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="stuff text-center">
                                <div class="container">
                                  <div class="main-title mt-5 mb-5 position-relative">
                                    <i class="fa-brands fa-3x fa-42-group mb-4" id="propos"></i>
                                    <h2> A Propos:</h2>
                                    <p class="text-black-50 text-uppercase"-> E-Pharmacie : achat de médicaments et de produits de parapharmacie sur internet</p>
                                  </div>
                                  <p class="description text-center mt-5 mb-5 text-black-50 m-auto">Votre parapharmacie et pharmacie en ligne
                                    Bienvenue sur E-Pharmacie,
                                     le premier réseau de pharmacies et parapharmacies en ligne !
                                      Commandez vos médicaments et produits de parapharmacie sur internet et faites-vous livrer à domicile par une pharmacie maroccan. </p>
                                  <div class="row align-items-center">
                                    <div class="col-lg-4  text-center text-md-start">
                                      <div class="text">
                                        <h4> NOTRE HISTOIRE </h4>
                                        <p class="text-black-50 fs-6 m-auto ">
                                          Tout a commencé avec une idée simple :
                                          pourquoi ne pourrions nous pas commander tous les produits que nous achetons à la pharmacie tout en étant confortablement installé chez soi ?
                                          nous continuons à travailler pour rendre la pharmacie plus accessible et sécurisée.
                                        </p>
                                        <a class="btn btn-primary rounded-pill main-btn" href="#">je découvre</a>
                                      </div>
                                    </div>

                                  <div class="col-lg-8">
                                  <div class="image">
                                    <img class="img-fluid" src="{{ url('img/pk1.jpeg')}}" >
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                    <footer class="footer">
                    <div class="container-fluid">
                        <nav>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                            <p class="copyright text-center">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                            </p>
                        </nav>
                    </div>
                </footer>
                <!-- end footer -->
            </div>
        </div>
    </body>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>

    </html>

