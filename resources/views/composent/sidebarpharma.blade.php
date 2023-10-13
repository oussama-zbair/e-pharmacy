<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/css/demo.css" rel="stylesheet" />
        <!---->
        <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('/css/all.min.css') }}">
        <link rel="stylesheet" href="{{url('/css/bondi.css') }}">
        <link rel="preconnect" href="{{ url('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;1,100;1,300&display=swap') }}" rel="stylesheet">
    </head>
<body>
    <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                  <b> Espace pharmacie</b>
                </a>
            </div>
            <ul class="nav">
            @if (Route::current()->getName()=='dashboard-pharma')
        <li class="nav-item active">
            <a class="nav-link" href="dashboard-pharma">
                <i class="nc-icon nc-chart-pie-35"></i>
                <p>Presentation</p>
            </a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="/dashboard-pharma">
                <i class="nc-icon nc-chart-pie-35"></i>
                <p>Presentation</p>
            </a>
        </li>
        @endif
        <li>
            <a class="nav-link" href="/infopharma">
                <i class="nc-icon nc-circle-09"></i>
                <p>Infos personnelles</p>
            </a>
        </li>
        @if (Route::current()->getName()=='pharmacmd')
        <li class="nav-item active">
            <a class="nav-link" href="/pharmacmd">
                <i class="nc-icon nc-notes"></i>
                <p>Commande</p>
            </a>
        </li>
        @else
        <li>
            <a class="nav-link" href="/pharmacmd">
                <i class="nc-icon nc-notes"></i>
                <p>Commande</p>
            </a>
        </li>
        @endif
        <li>
            <a class="nav-link active" href="./rejoindrepharmacie">
                <i class="nc-icon nc-atom"></i>
                <p>rejoindre pharmacie</p>
            </a>
        </li>
        {{-- <li>
            <a class="nav-link" href="findpharma">
                <i class="nc-icon nc-pin-3"></i>
                <p>Choisir une pharmacie</p>
            </a>
        </li> --}}
                {{-- <li>
                    <a class="nav-link" href="./maps.html">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>Maps</p>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
    </body>
</html>
