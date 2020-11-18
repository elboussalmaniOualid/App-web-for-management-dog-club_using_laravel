@extends('layouts.master1')


@section('content')
<section>
    
    <div class="container">
      
      <div class="row " style="margin-top: 20px;">
        
      
         <div  class="col-md-6 d-flex align-items-stretch">
                     
               <div id="un" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('storage/'.$produit->imagePrincipal)}}" alt="First slide">
            </div>
             @if($produit->image2!=null)
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('storage/'.$produit->image2)}}" alt="Second slide">
            </div>
            @endif
            @if($produit->image3!=null)
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('storage/'.$produit->image3)}}" alt="Second slide">
            </div>
            @endif

             @if($produit->image4!=null)
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('storage/'.$produit->image4)}}" alt="Second slide">
            </div>
            @endif
          </div>
          <a class="carousel-control-prev" href="#un" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#un" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
         </div>

          <div  class="col-md-6 d-flex align-items-stretch">
              
             <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                
                <style type="text/css">
                 
                 .iconn
                 {
                  position: absolute;
                 top: 0px; left: 0px;
                 height: 100px;width: 100px;
                 }
               </style>
                  <h2>{{$produit->titre}}</h2>
                
                   
                </div>
               
                   <h4 id="price">  <span style="color: red; font-size: 25px;"> @if($produit->promotion)
                   Promotion 
              @endif</span>{{$produit->prix  }}DH</h4>
                    <h4 style="text-decoration: line-through;">  {{$produit->ancienPrix  }}DH</h4>
                  
                <p> 
              <form method="post" action="{{url('commande')}}">
                  {{ csrf_field()}}
                <input type="hidden" name="id_produit" value="{{$produit->id}}">
                <label for="idd"> Quantité </label>
                <input type="number" name="quantite" id="idd" min="1"  class="form-control form-control-user" style="width: 80px;" min="1" max="20">
                <!--  -->


                <!--  -->
             <script src="https://cdn.jsdelivr.net/npm/bootstrap-input-spinner@1.16.5/src/bootstrap-input-spinner.min.js"></script>
              <script>
                 $("input[type='number']").inputSpinner();
              </script>
                <br>
                <button type="submit" class="appointment-btn scrollto"> Acheter mantenant </button>
                 </form>
                   </p>
                   <hr>
                    <h3 >  Description de produit</h3>
                
                <p>
             <?php echo $produit->description; ?>
             
                </p>
              </div>
           

         </div>

      </div>


    </div>
  </section>

  <section id="popular-courses" class="courses " style="margin-top: 25px;">
      <div class="container" data-aos="fade-up">
        @if($produits!=null)
        <div class="section-title">
          <center><h2>Produits similaire </h2></center> 

             
          
        </div>
         @endif
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <!--  -->

          <!--  -->
        @foreach($produits as $pro)
          @if($produit->id!=$pro->id)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch " style="margin-bottom: 20px;">
              @if($pro->promotion)
                <img src="{{asset('prommo.png')}}"  class="iconn" alt="...">
              @endif
            <div class="course-item">
              <img src="{{asset('storage/'.$pro->imagePrincipal)}}" class="img-fluid" style="width: 320px; height: 200px;" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><a href="{{url('produits/'.$pro->id)}}" style="color: white;">plus de détails</a></h4>
                  <p class="price"style="font-style: italic;">{{$pro->prix}}DH</p>
                     
                </div>
               <p style="text-decoration: line-through; color: red;
               font-size:20px;">{{$produit->ancienPrix}}</p>
                <h3><a href="course-details.html">{{$pro->titre}}</a></h3>
             
               
              </div>
            </div>
          </div> 
          @endif
      @endforeach
          </div> <!-- End Course Item-->


<!-- ********************************************** -->
    
<!--*********************************************************************  -->
        </div>

      </div>
    </section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection