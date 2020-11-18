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
                  <h2>{{$produit->titre}}</h2>
                
                   
                </div>
                @if($produit->promotion)   <h4> promotion sur le produit </h4> @endif
                   <h4 id="price">  {{$produit->prix  }}DH</h4>
                    <h4 >  {{$produit->age  }} ans</h4>
                
                <p> 
              <form method="post" action="{{url('commandeChien')}}">
                  {{ csrf_field()}}
                
                <input type="hidden" name="id_produit" value="{{$produit->id}}">
                <!-- <label for="idd"> Quantité </label> -->
                

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
          <center><h2> Vous pourriez aimer également </h2></center>      
          
        </div>
         @endif
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($produits as $pro)
        @if($pro->id!=$produit->id)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch " style="margin-bottom: 20px;">
            <div class="course-item">
              <img src="{{asset('storage/'.$pro->imagePrincipal)}}" class="img-fluid" style="width: 320px; height: 200px;" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><a href="{{url('chiens/'.$pro->id)}}" style="color: white;">plus de détails</a></h4>
                  <p  class="price"style="font-style: italic;">{{$pro->prix}}DH</p>
                   
                </div>

                <h3><a href="course-details.html">{{$pro->titre}}</a></h3>
             
               
              </div>
            </div>
          </div> 
          @endif
      @endforeach
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section>
@endsection