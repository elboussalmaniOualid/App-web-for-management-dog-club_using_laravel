@extends('layouts.master1')


@section('content')

<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up" style="margin-top: 25px;">
   @if($val==0)

   <div style="color: red; font-size: 30px;"> Aucune produit pour cette categorie !!</div>
       
   @else 
   <div class="section-title">
          <h2>Produits</h2>
          <!-- <p>Categorie de <span> </span></p> -->
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
      @foreach($listProduits as $produit)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch " style="margin-bottom: 20px;">
            @if($produit->promotion)
       <img src="{{asset('prom.png')}}"  class="iconn" alt="...">
       @endif
           <style type="text/css">
                 
                 .iconn
                 {
                  position: absolute;
                 top: 0px; left: 0px;
                 height: 100px;width: 100px;
                 }
               </style>
            <div class="course-item">
              <img src="{{asset('storage/'.$produit->imagePrincipal)}}" class="img-fluid" style="width: 320px; height: 200px;" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><a href="{{url('produits/'.$produit->id)}}" style="color: white;">plus de détails</a></h4>
                  <p class="price">{{$produit->prix}}DH</p>
                </div>

                <h3><a href="course-details.html">{{$produit->titre}}</a></h3>
                <p>{{$produit->description}}</p>
               
              </div>
            </div>
          </div> 
      @endforeach
      @endif
         <!-- End Course Item-->
     </div>




      </div>
    </section>


@endsection