<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Pharmacie</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/all.min.css') }}">
    <link rel="stylesheet" href="{{url('/css/bondi.css') }}">
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com')}}">
<link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
<link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;1,100;1,300&display=swap') }}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top ">
        <div class="container" >
            <!-- logo -->
          <a class="navbar-brand" href="#"><img src="{{ url('/img/Picture3.png') }}" ></a>
          <!-- botton -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
           <i class="fa-solid fa-bars"></i>
          </button>
          <!-- navbaar -->
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
              <li class="nav-item">
                <a class="nav-link p-lg-3 active" aria-current="page" href="#" >accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-lg-3" href="#service">service</a>
              </li> <li class="nav-item">
                <a class="nav-link p-lg-3" href="#propos">a propos</a>
              </li> <li class="nav-item">
                <a class="nav-link p-lg-3" href="#contact">contact</a>
              </li>
               <!-- button serch -->
              </li>
            </ul>
                <div class="search ps-3 pe-3 ">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <!-- button login -->
                <a class="btn btn-primary rounded-pill main-btn" href="registration">Inscriptions</a>
            </div>
        </div>
      </nav>
      <!-- landing -->
      <div class="landing d-flex justify-content-center align-items-center" >
          <div class="text-center text-light">
              <h1> Bienvenue à E-Pharmacie</h1>
              <p class="fs-5 text-white-50 mb-4"> vos Pharmacies moroccan en ligne</p>
              <a class="btn btn-primary rounded-pill main-btn" href="inscription">login</a>
          </div>
      </div>
      <div class="features text-center pt-5 pb-5"  id="service">
          <div class="container">
              <div class="main-title mt-5 mb-5 position-relative">
                <i class="fa-brands fa-3x fa-42-group mb-4" ></i>
                <h2> Service</h2>
                <p class="text-black-50 text-uppercase"-> notre  service service service service</p>
              </div>
              <div class="row">
                  <div class="col-md-6 col-lg-4">
                      <div class="feat">
                          <div class="icon-holder position-relative">
                            <i class="fa-solid fa-1 position-absolut botton-0 number"></i>
                            <i class="fa-solid fa-house fa-4x position-absolut botton-0 icon"></i>
                          </div>
                          <h4 class="mb-3 mt-3 text-uppercase">Produits contrôlés</h4>
                          <p class="text-black-50 lh-lg text-center"> Vous passez commande auprès de pharmacies moroccan  </p>
                      </div>
                  </div>

              <div class="col-md-6 col-lg-4">
                <div class="feat">
                    <div class="icon-holder position-relative">
                      <i class="fa-solid fa-2 position-absolut botton-0 number"></i>
                      <i class="fa-solid fa-people-carry-box fa-4x position-absolut botton-0 icon "></i>
                    </div>
                    <h4 class="mb-3 mt-3 text-uppercase">Achats 100% sécurisés</h4>
                    <p class="text-black-50 lh-lg text-center">Le plus haut niveau de sécurité pour vos achats santé en ligne </p>
                </div> </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feat">
                        <div class="icon-holder position-relative">
                          <i class="fa-solid fa-3 position-absolut botton-0 number"></i>
                          <i class="fa-solid fa-truck fa-4x position-absolut botton-0 icon"></i>
                        </div>
                        <h4 class="mb-3 mt-3 text-uppercase">livraison</h4>
                        <p class="text-black-50 lh-lg text-center">Livraison express à domicile ou en point relais </p>
                    </div>
                </div>

          </div>
          </div>
      </div>
       <div class="our-work text-center pt-5 pb-5">
        <div class="container">
            <div class="main-title mt-5 mb-5 position-relative">
              <i class="fa-brands fa-3x fa-42-group mb-4"></i>
              <h2> Comment Fonctionne E-Pharmacie ?</h2>
              <!-- <p class="text-black-50 text-uppercase"-> notre  service service service service</p> -->
            </div>
            {{-- <ul class="list-unstyled d-flex justify-content-center mt-5 mb-5">
                 <li class="active rounded-pill">all</li>
                 <li>delivre</li>
                 <li>shope alone</li>
            </ul> --}}
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box md-3 bg-white" data-work="Application">
                    <img src="{{ url('img/sreash.jpeg')}}" alt="" class="img-fluid">
                    <p> Je choisis la pharmacie a mon chois </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box md-3 bg-white" data-work="Application">
              <img src="{{ url('img/calcul.jpg')}}" alt="" class="img-fluid">
              <p>E-Pharmacie calcule la meilleure offre disponible pour ma commande</p>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box md-3 bg-white" data-work="Application">
        <img src="{{url('/img/doctor.jpg')}}" alt="" class="img-fluid">
        <p>Ma commande est traitée par un Docteur en Pharmacie</p>
    </div>
</div>
<div class="col-sm-6 col-md-4 col-lg-3">
  <div class="box md-3 bg-white" data-work="Application">
  <img src="{{url('/img/box.jpg')}}" alt="" class="img-fluid">
  <p>je reçois mes produits à domicile ou en points relais</p>
</div>
</div>
            </div>
      </div></div>
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
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        {{-- <span>Get connected with us on social networks:</span> --}}
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://www.facebook.com" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/?lang=en" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.google.com/gmail/about/" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="https://www.instagram.com/?hl=en" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        {{-- <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i> --}}
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i> E-Pharmacie
            </h6>
            <p>
                vos Pharmacies moroccan en ligne
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            Menu
            </h6>
            <p>
              <a href="#" class="text-reset">accueil</a>
            </p>
            <p>
              <a href="#service" class="text-reset">service</a>
            </p>
            <p>
              <a href="#propos" class="text-reset">A propos</a>
            </p>
            <p>
              <a href="inscription" class="text-reset">login</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4" id="contact">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> AGADIR,MAROC</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              EPharmacie@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 212 67 88 99 09 15 </p>
            <p><i class="fas fa-print me-3"></i> + 212 612 45 78 00 66</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      {{-- <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a> --}}
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    <script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ url('/js/all.min.js')}}"></script>

</body>
</html>
