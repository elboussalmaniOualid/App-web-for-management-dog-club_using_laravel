
<!DOCTYPE html>
<html>
<head>
	<title>Index </title>
	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/style.css')}}">
	<link href="{{asset('assets/icofont/icofont.min.css')}}" rel="stylesheet">
</head>
<body>
	<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{url('produits')}}">Club Canin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('produits')}}">Home</a></li>
          <li><a href="{{url('contact')}}">Contact</a></li>
          <li class="drop-down"><a href="">Produits</a>
            <ul>
              <li><a href="#">Aliments</a></li>
              <li><a href="#">Balles de motivation</a></li>
              <li><a href="#">Boudins de motivation</a></li>
              <li><a href="#">Colliers Sprenger4</a></li>
               <li><a href="#">Hrnais</a></li>
              <li><a href="#">Laisses et Colliers</a></li>
              <li><a href="#">Material de protection</a></li>
               <li><a href="#">Sante</a></li>
              
            </ul>
          </li>

           <li class="drop-down"><a href=""> Chiens</a>
            <ul>
              <li><a href="#">Pour l'accouplement</a></li>
              <li><a href="#">Toilettage</a></li>
              <li><a href="#">Pension</a></li>
              <li><a href="#">Dressage</a></li>
               <li><a href="#">Vente</a></li>
              <li><a href="#">Education</a></li>
              
            </ul>
          </li>
          <li><a href="{{url('contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{url('inscrire')}}" class="get-started-btn">Inscrire</a>

    </div>
  </header><!-- End Header -->

<div id="carouselExampleControls"  class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="{{asset('assets/4.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome</h5>
          <p>Club canin Club canin Club canin Club canin .</p>
          <p>   <a href="{{url('inscrire')}}" class="get-started-btn">Inscrire</a> </p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/2.jpeg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5>Welcome</h5>
          <p>Club canin Club canin Club canin Club canin.</p>
           <p>  <a href="{{url('inscrire')}}" class="get-started-btn">Inscrire</a> </p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/3.jpeg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome</h5>
          <p>Club canin Club canin Club canin Club canin.</p>
           <p> <a href="{{url('inscrire')}}" class="get-started-btn">Inscrire</a> </p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







 


@yield('content')
    



 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Club canin</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Services</a></li>
            
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact nous</h4>
            <p>
              A108 Adam Street <br>
              tanger, NY 535022<br>
             Maroc <br>
              <strong>Tel:</strong> +212 5 <br>
              <strong>Email:</strong> info@clubcanin.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Notre equipe</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue..</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Clubcnin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
        
      </div>
    </div>
  </footer><!-- End Footer -->


<script src="{{asset('https://code.jquery.com/jquery-3.4.1.slim.min.js')}}" ></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" ></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}" ></script>
</body>
</html>


