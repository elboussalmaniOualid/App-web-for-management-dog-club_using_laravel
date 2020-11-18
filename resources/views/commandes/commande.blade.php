<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{asset('assets-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets-admin/://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('assets-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

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
  
</head>
<body>
<div class="container">
	<div class="row"> 
		<div class="col-lg-12">
  
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
       <center><img src="{{asset('logo.jpg')}}" height="220px" style="padding-top: 20px; "></center>
        <div class="row"> 
          
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
              
                <h1 class="h4 text-gray-900 mb-4">Vos informations pour votre commande</h1>
              </div>
              <form class="user" action="{{url('commande/enregisterCommande')}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field()}}
                 <input type="hidden" name="quantite" value="{{$quantite}}">
                  <input type="hidden" name="produit_id" value="{{$produit->id}}">
                  <input type="hidden" name="prixT" value="{{$produit->prix * $quantite}}">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('prenom')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="prenom" id="exampleFirstName" placeholder="Votre prenom" value="{{old('prenom')}}" >
                     @if($errors->get('prenom'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('prenom') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                    <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('nom')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="nom" id="exampleFirstName" placeholder="Votre nom" value="{{old('nom')}}" >
                     @if($errors->get('nom'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('nom') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>
                   <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0 @if($errors->get('adresse')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="adresse" id="exampleFirstName" placeholder="Votre adresse personnel ">
                       @if($errors->get('adresse'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('adresse') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('ville')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="ville" id="exampleFirstName" placeholder="Votre ville" value="{{old('ville')}}" >
                     @if($errors->get('ville'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('ville') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                    <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('postal')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="postal" id="exampleFirstName" placeholder="Code postal" value="{{old('postal')}}" >
                     @if($errors->get('postal'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('postal') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>
                 <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0 @if($errors->get('telephone')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="telephone" id="exampleFirstName" placeholder="Votre numero de telephone">
                       @if($errors->get('telephone'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('telephone') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>

               

               <div class="form-group">
 					
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Commander">
                
                <hr>
              
               
              </form>
              
            
            
            </div>
          </div>
       
<div class="col-lg-6" style="padding-top: 150px;">
  <h3> {{$produit->titre}}</h3>
  <ul>
 
    <li> <h4> Le prix :<span class="sp"> {{$produit->prix}} DH</span></h4></li>
    @if($produit->categorie!="chien")
    <li><h4> Quntité :<span class="sp"> {{$quantite}}</span></h4> </li>
    @endif
    <li> <h4>la somme total :<span class="sp"> {{$produit->prix * $quantite}} DH</span> </h4></li>
    <style type="text/css">
      
      .sp
      {
        font-size: 30px;
        color: red;

      }

    </style>
  </ul>
  
  
  
        </div>
      </div>
    </div>
</div>

	
</div>
</div>
  </div>

</body>
</html>