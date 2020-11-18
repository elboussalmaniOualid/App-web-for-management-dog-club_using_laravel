@extends('layouts.master1')


@section('content')

<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="margin-top: 20px;">Chiens</h2>
           @if(session()->has('success'))
                     <div class="alert alert-success">
                       {{ session()->get('success')}}
                         </div>
                @endif
        
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
      @foreach($listProduits as $produit)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch " style="margin-bottom: 20px;">
            <div class="course-item">
              <img src="{{asset('storage/'.$produit->imagePrincipal)}}" class="img-fluid" style="width: 320px; height: 200px;" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><a href="{{url('chiens/'.$produit->id)}}" style="color: white;">plus de détails</a></h4>
                  <p class="price">{{$produit->prix}}DH</p>
                </div>

                <h3><a href="{{url('chiens/'.$produit->id)}}">{{$produit->titre}}</a></h3>
                
               
              </div>
            </div>
          </div> 
      @endforeach
         <!-- End Course Item-->
     </div>




      </div>
    </section>


@endsection