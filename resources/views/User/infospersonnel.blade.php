<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>infos personnel</title>
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

<body><!--
    =========================================================
     Light Bootstrap Dashboard - v2.0.1
    =========================================================

     Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
     Copyright 2019 Creative Tim (https://www.creative-tim.com)
     Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

     Coded by Creative Tim

    =========================================================

     The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
     <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>infos personnel</title>
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
                @include("composent.sidebaruser")
            <!-- end sidbar -->
            <div class="main-panel">
                <!-- Navbar -->
                    @include("composent.menu")
                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Profile</h4>
                                    </div>
                                    <div class="card-body">
                                    <form>
                                            <div class="row">

                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>Nom d'utilisateur</label>
                                                        <input type="text" class="form-control" placeholder="Username" value="{{$d->prenom}} {{$d->nom}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email </label>
                                                        <input type="email" class="form-control" placeholder="Email" value="{{$d->email}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>PRENOM</label>
                                                        <input type="text" class="form-control" placeholder="prenom" value="{{$d->prenom}}" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label>NOM</label>
                                                        <input type="text" class="form-control" placeholder="nom" value="{{$d->nom}}">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Adresse</label>
                                                        <input type="text" class="form-control" placeholder="Adresse" >
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="row">
                                                <div class="col-md-4 pr-1">

                                                </div>


                                            </div>
                                            {{-- <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>A propos</label>
                                                        <textarea rows="4" cols="80" class="form-control" placeholder=" description" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info btn-fill pull-right"> modifier </button> --}}
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-image">
                                        <img src="bg3.jpg" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="author">
                                            <a href="#">
                                                <img class="avatar border-gray" src="../dist/img/userimg.png" alt="...">
                                                <h5 class="title"> {{$d->prenom}} {{$d->nom}}</h5>
                                            </a>

                                        </div>
                                        <p class="description text-center">
                                           _______E-pharmacie Agadir_______
                                            <br> nous sommes toujour a votre disposition
                                            <br>
                                        </p>
                                    </div>
                                    <hr>
                                    {{-- <div class="button-container mr-auto ml-auto">
                                        <button href="#" class="btn btn-simple btn-link btn-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </button>
                                        <button href="#" class="btn btn-simple btn-link btn-icon">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                        <button href="#" class="btn btn-simple btn-link btn-icon">
                                            <i class="fa fa-google-plus-square"></i>
                                        </button>
                                    </div> --}}
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
                                    <a href="auth.epharmacie">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="auth.epharmacie">
                                        Service
                                    </a>
                                </li>
                                <li>
                                    <a href="auth.epharmacie">
                                        A propose
                                    </a>
                                </li>
                                <li>
                                    <a href="auth.epharmacie">
                                       Contact
                                    </a>
                                </li>
                            </ul>
                            <p class="copyright text-center">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                <a href="/resource.auth.epharmacie">Ephamacie</a>, made with love
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

