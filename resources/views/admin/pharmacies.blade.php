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
    <title>ajouter pharmacie</title>
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
                        {{-- <div class="content"> --}}
                            {{-- <div class="container-fluid"> --}}
                             {{-- <div class="row"> --}}
                            <div class="stuff text-center">
                    <div class="container">
                        {{-- <div class="main-title mt-5 mb-5 position-relative"> --}}
                        <table class="table table-striped table-hover ">

                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>

                                <th>Nom</th>
                                <th>adresse</th>
                                <th>code</th>
                                <th>Actions</th>

                            </tr>
                            @foreach($pharmacies as $pharmacie)
                            <tr>
                                <td><span class="custom-checkbox">
                                        <input type="checkbox" >

                                    </span></td>
                                <td>{{$pharmacie->nom}}</td>
                                <td>{{$pharmacie->adresse}}</td>
                                <td>{{$pharmacie->code}}</td>
                                <td><form action="{{Route('delete.pharmacie',['id'=>$pharmacie->id])}}" method="post" id="myform1">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="" data-toggle="modal" onclick="submit_form1();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg></button>
                                </form></td>
                            </tr>
                            @endforeach
                                    <form method="post" action="{{ route('addpharmacie') }}">
                                @csrf
                            <div class="form-group">
                                <label>nom</label>
                                <input type="text" class="form-control" name="nom">
                            </div>
                            <div class="form-group">
                                <label>adresse</label>
                                <input type="text" class="form-control"  name="adresse">
                            </div>
                            <div class="form-group">
                                <label>code</label>
                                <input type="text" class="form-control"  name="code">
                            </div>
                            <div class="modal-footer">
                            {{-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> --}}
                            <input type="submit" class="btn btn-success" value="Add">
                            </div>
                                    </form>

                </table>
                  {{-- </div> --}}
                </div>
                    </div>
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
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
       {{-- row </div> --}}
        </div>
    </div>
    <script>
    function submit_form1() {
        var z=confirm("do you really want to change the post content ?");
        if (z==true) {
         document.forms['myform1'].submit();
    }
        else {
        event.preventDefault();
    }
    }
</script>
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
