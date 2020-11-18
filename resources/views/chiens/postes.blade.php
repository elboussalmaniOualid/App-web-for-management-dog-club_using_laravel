@extends('layouts.master1')


@section('content')

<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="margin-top: 25px;">
          <h2>Lire votre article</h2>
          <p> </p>
        </div>

      
     

<!--  -->

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

  

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline">
           
          <div class="embed-responsive embed-responsive-16by9" style="margin-top: 25px;">
            <iframe class="embed-responsive-item " src="{{$produit->video}}" allowfullscreen></iframe>
          </div>
          <div class="row" style="margin-top: 25px;"> 
           
          @if($produit->image2!=null)
           <div class="col-lg-4 ">
            <a href="{{asset('storage/'.$produit->image2)}}"> <img src="{{asset('storage/'.$produit->image2)}}" class="img-fluid zoom" s alt="..."></a>
          </div>
            @endif
             @if($produit->image3!=null)
             <div class="col-lg-4">
              <a href="{{asset('storage/'.$produit->image3)}}"> <img src="{{asset('storage/'.$produit->image3)}}" class="img-fluid zoom" s alt="..."></a>
            
          </div>
            @endif
             @if($produit->image4!=null)
             <div class="col-lg-4">
             <a href="{{asset('storage/'.$produit->image4)}}"> <img src="{{asset('storage/'.$produit->image4)}}" class="img-fluid zoom" s alt="..."></a>
          </div>
            @endif
          </div>
          
            <style>
.zoom {

 
  transition: transform .2s; /* Animation */
 
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3 style="margin-top: 25px;">{{$produit->titre}}</h3>
            
           
            <p>
              {{$produit->description}}

            </p>
            
           
          </div>

        </div>

      </div>
    </section>


         <!-- End Course Item-->
     </div>




      </div>
    </section>


@endsection