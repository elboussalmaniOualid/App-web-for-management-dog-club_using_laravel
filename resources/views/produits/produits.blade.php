@extends('layouts.master1')


@section('content')

<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up" style="margin-top:30px";>
              @if(session()->has('success'))
                     <div class="alert alert-success">
                       {{ session()->get('success')}}
                         </div>
                @endif
        <div class="section-title" >
          <h2 >Produits </h2>
          <p></p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
      @foreach($listProduits as $produit)
     
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch " style="margin-bottom: 20px;">
           @if($produit->promotion)
       <img src="{{asset('prommo.png')}}"  class="iconn" alt="...">
       @endif
            <div class="course-item">
              <img src="{{asset('storage/'.$produit->imagePrincipal)}}" class="img-fluid" style="width: 320px; height: 200px;" alt="...">
              
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><a href="{{url('produits/'.$produit->id)}}" style="color: white;">Plus de détails</a></h4>
                  <p class="price"style="font-style: italic;">{{$produit->prix}}DH</p>
                </div>
               <p style="text-decoration: line-through; color: red;
               font-size:20px;">{{$produit->ancienPrix}}</p>
                <h3><a href="course-details.html">{{$produit->titre}} </a></h3>
               <style type="text/css">
                 
                 .iconn
                 {
                  position: absolute;
                 top: 0px; left: 0px;
                 height: 100px;width: 100px;
                 }
               </style>
               
              </div>
            </div>
          </div> 
      @endforeach
         <!-- End Course Item-->
     </div>




      </div>
    </section>


@endsection