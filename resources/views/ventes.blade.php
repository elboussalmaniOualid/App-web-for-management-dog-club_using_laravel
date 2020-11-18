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
		<div class="col-lg-6">
  
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
              	<img src="{{asset('22.png')}}">
                <h1 class="h4 text-gray-900 mb-4">Vos informations pour le livrairson</h1>
              </div>
              <form class="user" action="{{url('admin/enregisterArticle')}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field()}}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('titre')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="titre" id="exampleFirstName" placeholder="Votre prenom" value="{{old('titre')}}" >
                     @if($errors->get('titre'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('titre') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                    <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('titre')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="titre" id="exampleFirstName" placeholder="Votre nom" value="{{old('titre')}}" >
                     @if($errors->get('titre'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('titre') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>
                   <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0 @if($errors->get('video')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="adresse" id="exampleFirstName" placeholder="Votre adresse personnel ">
                       @if($errors->get('video'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('video') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('titre')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="ville" id="exampleFirstName" placeholder="Votre ville" value="{{old('titre')}}" >
                     @if($errors->get('titre'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('titre') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                    <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('titre')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="postal" id="exampleFirstName" placeholder="Code postal" value="{{old('titre')}}" >
                     @if($errors->get('titre'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('titre') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>
                 <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0 @if($errors->get('video')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="telephone" id="exampleFirstName" placeholder="Votre numero de telephone">
                       @if($errors->get('video'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('video') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>

               

               <div class="form-group">
 					
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Enregistrer">
                
                <hr>
              
               
              </form>
              
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-lg-6" style="padding-top: 100px;">
	<ul>
		<li><h3> titre de produir</h3> </li>
		<li> <h4> Le prix du produit : </h4></li>
		<li><h4> Vous avez commandee pour 2 produit </h4> </li>
		<li> <h4>la somme total  :</h4></li>
	</ul>
	
	
	
	
</div>
</div>
  </div>

</body>
</html>