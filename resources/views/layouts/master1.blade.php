<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets2/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets2/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <!-- <link href="assets/vendor/venobox/venobox.css" rel="stylesheet"> -->
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{asset('assets2/style.css')}}" rel="stylesheet">
  <link href="{{asset('js/jquery.js')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.4.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@clubcanin.com</a>
        <i class="icofont-phone"></i> +212 6 72 66 76 22
        <i class="icofont-google-map"></i> A108 Adam Tanger, Maroc
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
<!--    <img src="{{asset('logo.jpg')}}"  height="70px"/>
 -->      <h1 class="logo mr-auto"><a href="{{url('produits')}}">  UNIVERS CANIN D3</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('produits')}}">Home</a></li>
          <li><a href="{{url('articles')}}">Posts</a></li>
          <li class="drop-down"><a href="">Produits</a>
            <ul>
              <li><a href="{{url('produits/categories/1')}}">Aliments</a></li>
              <li><a href="{{url('produits/categories/2')}}">Balles de motivation</a></li>
              <li><a href="{{url('produits/categories/3')}}">Boudins de motivation</a></li>
              <li><a href="{{url('produits/categories/4')}}">Colliers Sprenger4</a></li>
               <li><a href="{{url('produits/categories/5')}}">Hrnais</a></li>
              <li><a href="{{url('produits/categories/6')}}">Laisses et Colliers</a></li>
              <li><a href="{{url('produits/categories/7')}}">Material de protection</a></li>
               <li><a href="{{url('produits/categories/8')}}">Santé</a></li>
              
            </ul>
          </li>

           <li class="drop-down"><a href=""> Chiens</a>
            <ul>
               <li><a href="{{url('/chiens')}}">Acheter un chien</a></li>
              <li><a href="{{url('articles/categories/1')}}">Pour l'accouplement</a></li>
              <li><a href="{{url('articles/categories/2')}}">Toilettage</a></li>
              <li><a href="{{url('articles/categories/3')}}">Pension</a></li>
              <li><a href="{{url('articles/categories/4')}}">Dressage</a></li>
             
              <li><a href="{{url('articles/categories/5')}}">Education</a></li>
               <li><a href="{{url('articles/categories/6')}}">Autre</a></li>
              
            </ul>
          </li>
          <li><a href="{{url('contact')}}">Contact</a></li> 

        </ul>
      </nav><!-- .nav-menu -->
     @auth
         <a href="{{route('logout')}}" class="appointment-btn scrollto">Se déconnection </a>
        @else

      <a href="{{url('inscrire')}}" class="appointment-btn scrollto">Inscrire</a>
    @endif
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{asset('assets2/assets/img/slide/slide-1.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Club canin</span></h2>
                <p class="animate__animated animate__fadeInUp">

                La société Clubcanin est spécialisée dans la vente d'accessoires pour les chiens, les chats, sport canin et sécurité. Nous vous proposons tous les produits et les complément alimentaires dont vous avez besoin pour vos animaux de compagnie.</p>
            @auth
       <h2 class="animate__animated animate__fadeInDown">Mr  <span>{{ Auth::user()->name }} </span></h2>
                @else
                <a href="{{url('inscrire')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Joindre  nous </a>
                @endif
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{asset('assets2/assets/img/slide/slide-2.jpg')}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Club canin</span></h2>
                <p class="animate__animated animate__fadeInUp">
                Le bien le plus important d'un chien est sa santé, ce qui est très important pour les propriétaires de chiens. Vous trouverez ici tout ce qui concerne la protection de la santé  - des soins des pattes et des fourrures à la prévention du stress et aux soins dentaires. Les sujets qui se posent encore et encore pour un propriétaire de chien dans la vie quotidienne sont variés.</p>
               @auth
                 <h2 class="animate__animated animate__fadeInDown">Mr  <span>{{ Auth::user()->name }} </span></h2>
                @else

                  <a href="{{url('inscrire')}}t" class="btn-get-started animate__animated animate__fadeInUp scrollto">Joindre  nous </a> 
                   @endif
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{asset('assets2/assets/img/slide/slide-3.jpg')}}');">
            <div class="carousel-container">
             <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Club canin</span></h2>
                <p class="animate__animated animate__fadeInUp">Le bien le plus important d'un chien est sa santé, ce qui est très important pour les propriétaires de chiens. Vous trouverez ici tout ce qui concerne la protection de la santé  - des soins des pattes et des fourrures à la prévention du stress et aux soins dentaires. Les sujets qui se posent encore et encore pour un propriétaire de chien dans la vie quotidienne sont variés.</p>
               
                 @auth
                <h2 class="animate__animated animate__fadeInDown">Mr  <span>{{ Auth::user()->name }} </span></h2>
                  @else

                  <a href="{{url('inscrire')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Joindre  nous </a>  
                  @endif
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  

    <!-- ======= Our Team Section ======= -->
   <!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    
@yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Club canin</h3>
            <p>
              A108 Adam Tanger <br>
              Maroc<br><br>
              <strong>Phone:</strong> +212 6 72 66 76 22<br>
              <strong>Email:</strong> info@clubcnin.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens utils </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">contact nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Notre Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">vente des produits</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">vente des cheienes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> Eduquer les chienes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Notre Newsletter</h4>
            <p>club canin a votre disposition</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Clubcanin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
              </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
   <!-- Vendor JS Files --> 
  <script src="{{asset('assets2/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets2/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets2/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets2/ssets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets2/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets2/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets2/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets2/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets2/assets/js/main.js')}}"></script>

 
  

</body>

</html>