@extends('layouts.master1')


@section('content')

<section id="popular-courses" class="courses">
      <div class="container " data-aos="fade-up">
        <style type="text/css">
          #headshot {
  flex-shrink: 0;
  margin: 20px;
  height: calc(150px + 6vw);
  width: calc(150px + 6vw);
  border: calc(8px + 0.2vw) solid transparent;
  background-origin: border-box;
  background-clip: content-box, border-box;
  background-size: cover;
  box-sizing: border-box;
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);
}

#headshot-2 {
  border-radius: 50%;
  background-image: var(--img-url), linear-gradient(to bottom right, #ff3cac, #562b7c, #2b86c5);
}
        </style>

        <div class="section-title" style="margin-top:20px;">
          <h2>Articles </h2>
          <p> </p>
        </div>

        <div class="row " data-aos="zoom-in" data-aos-delay="100">
      @foreach($listProduits as $produit)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch  " style="margin-bottom: 20px;">
            <div class="course-item " style="
                           flex-shrink: 0;
                  margin: 20px;
                 
                  border: calc(8px + 0.2vw) solid transparent;
                  background-origin: border-box;
                  background-clip: content-box, border-box;
                  background-size: cover;
                  box-sizing: border-box;
                  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);

                order-radius: 50%;  ">
               <h3 style="padding: 15px;"><a href="{{url('article/'.$produit->id)}}">{{$produit->titre}}</a></h3>
              <img src="{{asset('storage/'.$produit->image1)}}" class="img-fluid" style="width: 320px; height: 200px;" alt="...">
              <div class="course-content">
                
                <div class="d-flex justify-content-between align-items-center mb-3" style="">
                
                   
                   <h4> <center><a href="{{url('article/'.$produit->id)}}" style="color: white;">Voir l'article</a></center></h4>
               
               
                </div>

                <!-- <h3><a href="course-details.html">{{$produit->titre}}</a></h3> -->
              
               
              </div>
            </div>
          </div> 
      @endforeach
         <!-- End Course Item-->
     </div>




      </div>
    </section>


@endsection