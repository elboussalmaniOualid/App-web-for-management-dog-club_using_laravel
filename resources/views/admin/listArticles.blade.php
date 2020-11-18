@extends('layouts.adminMaster')


@section('content')

 <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Gérer vos articles </h1>
            <a href="{{url('admin/newArticle')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Ajouter un article</a>
          </div>
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

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      
                      <th>Categorie</th>
                    
                       <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Titre</th>
                      
                      <th>Categorie</th>
                  
                       <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($listProduits as $produit)
                    <tr>
                      <td> {{$produit->titre}}</td>
                  
                  
                        <td>{{$produit->categorie}}</td>
                  
                      
                     
                       <td>
                       <a id="sa-remove" href="{{url('admin/'.$produit->id.'/editArticle')}}" class="btn btn-warning " > <i class="fas fa-edit"></i> </a>
                       <!-- afiichr -->
                         
       
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#produit{{$produit->id}}">
                <i class="fas fa-eye"></i>
                </button>

          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#voitureModal{{$produit->id}}">
            <i class="fas fa-trash"></i></a>
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="voitureModal{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
               vous êtes sur!
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                     
                      <form action="{{url('admin/'.$produit->id.'/destroyArticle')}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                        
                          <button type="submit"  class="btn btn-danger btn-icon-split">
                           <span class="text">Supprimer</span>
                          </button> 
                          
                      </form>
                              
                </div>
              </div>
            </div>
          </div>

                      <!-- **********8888 -->
<!-- Button trigger modal -->
                

                <!-- Modal -->
                <div class="modal fade" id="produit{{$produit->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Détails sur l'article</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <h3>Titre de l'article :{{$produit->titre}}</h3> 
                     
                       
                        <h3> Description :<?php echo $produit->description; ?></h3>
                        <h3> <div class="embed-responsive embed-responsive-16by9" style="margin-top: 25px;">
                        <iframe class="embed-responsive-item " src="{{$produit->video}}" allowfullscreen></iframe>
                      </div>
                    </h3>
                                     <h3> Images:</h3>
                          <div class="row" style="margin-top: 25px;"> 
                             @if($produit->image1!=null)
                       <div class="col-lg-3 ">
                        <a href="{{asset('storage/'.$produit->image1)}}"> <img src="{{asset('storage/'.$produit->image1)}}" class="img-fluid zoom" s alt="..."></a>
                      </div>
                        @endif
           
                      @if($produit->image2!=null)
                       <div class="col-lg-3 ">
                        <a href="{{asset('storage/'.$produit->image2)}}"> <img src="{{asset('storage/'.$produit->image2)}}" class="img-fluid zoom" s alt="..."></a>
                      </div>
                        @endif
                         @if($produit->image3!=null)
                         <div class="col-lg-3">
                          <a href="{{asset('storage/'.$produit->image3)}}"> <img src="{{asset('storage/'.$produit->image3)}}" class="img-fluid zoom" s alt="..."></a>
                        
                      </div>
                        @endif
                         @if($produit->image4!=null)
                         <div class="col-lg-3">
                         <a href="{{asset('storage/'.$produit->image4)}}"> <img src="{{asset('storage/'.$produit->image4)}}" class="img-fluid zoom" s alt="..."></a>
                      </div>
                        @endif
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       
                      </div>
                    </div>
                  </div>
                </div>

                                    

                       </td>
                    </tr>
                     @endforeach
                    
                  </tbody>
                </table>
                <!--  -->
       

          <!-- DataTales Example -->
         
          </div>

        </div>

@endsection