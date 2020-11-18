@extends('layouts.adminMaster')


@section('content')

 <div class="container-fluid">
          
          <center>
            
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">  Admin Club canin </h1>
            
          </div>
          </center>

                @if(session()->has('success'))
                     <div class="alert alert-success">
                       {{ session()->get('success')}}
                         </div>
                @endif
                @if(session()->has('success2'))
                  <div class="alert alert-success">
                       {{ session()->get('success2')}}
                         </div>
                @endif
                <!--  -->

              <div class="table-responsive admin">
              
         <center> 

      <a href="{{url('admin/home')}}"> <button type="button" class="btn btnn btn-primary">Gérer vos produits</button> </a>
       <a href="{{url('admin/homeCommandes')}}"> <button type="button" class="btn btnn btn-primary">Gérer vos Commandes</button> </a>
        <br>
         <br>
        <a href="{{url('admin/homeChien')}}"> <button type="button" class="btn btnn btn-primary">Gérer vos chiens</button> </a>
         <a href="{{url('admin/homeArticle')}}"> <button type="button" class="btn btnn btn-primary">Gérer vos articles</button> </a>
        
         </center>       <!--  -->
       <style type="text/css">
         
         .admin
         {
          margin-top: 13%;

         }
         .btnn
         {
          font-size: 40px;
         }
       </style>

          <!-- DataTales Example -->
         
          </div>

        </div>

@endsection