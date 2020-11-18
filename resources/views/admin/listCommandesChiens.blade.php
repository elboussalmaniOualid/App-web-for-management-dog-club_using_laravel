@extends('layouts.adminMaster')


@section('content')

 <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Gérer vos commandes </h1>
            
          </div>
                
                @if(session()->has('validee'))
                  <div class="alert alert-success">
                       {{ session()->get('validee')}}
                         </div>
                @endif
                @if(session()->has('annulee'))
                  <div class="alert alert-danger">
                       {{ session()->get('annulee')}}
                         </div>
                @endif
                <!--  -->
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">La liste {{$msg}}</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      
                      <th>Prénom</th>
                        <th>Téléphone</th>
                      
                       
                          <th>Date</th>
                             <th>Etat</th>
                          <th>Chien</th>
                       <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Nom</th>
                      <th>Prénom</th>
                        <th>Téléphone</th>
                     
                     
                           <th>Date</th>
                              <th>Etat</th>
                            <th>Chien</th>


                       <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($listProduits as $produit)
                    <tr>
                    <td> {{$produit->nom}}</td>
                  
                    <td> {{$produit->prenom}}</td>
                    <td>{{$produit->telephone}}</td>
                   
                 
                    <td>{{$produit->created_at}}</td>
                    <td>
                      @if($produit->etat==1)
                   <center> <img src="{{asset('validee.png')}}" width="40px" height="40px"></center>   
                    
                    @elseif($produit->etat==-1)

                    <h4 style="color: red"> Annulé </h4>


                    @else
                    <div class="row">

                      <div class="col-sm-6">
                        <form class="user form-inline" action="{{url('admin/validerCommandeChien')}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                          <input type="hidden" name="id_commande" value="{{$produit->id}}">
                         <center>   <button type="submit" class="btn btn-success" > Valider
                          </button> 

                        </center>

                        </form>

                      </div>
                      <div class="col-sm-6">
                        
                <form class="user form-inline" action="{{url('admin/annulerCommandeChien')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                  <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id_commande" value="{{$produit->id}}">
               <center>   <button type="submit" class="btn btn-danger" > Annuler
                </button> 

              </center>

              </form>
                      </div>

                    </div>
          

                    @endif 
                    </td>
                    <td> 
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#produitt{{$produit->id}}">
                  <i class="fas fa-eye"></i>
                 </button> 

                      </td>
                  
                      
                     
                       <td>
                      
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
                     
                      <form action="{{url('admin/'.$produit->id.'/destroyCommandeChien')}}" method="post">
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
                        <h5 class="modal-title" id="staticBackdropLabel">Détails sur la commande</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <h3>Nom :{{$produit->nom}}</h3> 
                       <h3>Prenom:{{$produit->prenom}}</h3> 
              
                         <h3>Ville :{{$produit->ville}}</h3> 
                          <h3>Code postal:{{$produit->postal}}</h3> 
                           <h3>Adresse :{{$produit->adresse}}</h3> 
                        <h3> Téléphone :{{$produit->telephone}}</h3>
                         <h3> Prix Tolal:  {{ $produit->chien->prix}}</h3> 
                        
                         
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       
                      </div>
                    </div>
                  </div>
                </div>

                                    <!-- ********* -->
                <div class="modal fade" id="produitt{{$produit->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Détails sur le produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <h3>Titre du produit :{{$produit->chien->titre}} </h3> 
                      <h3>Prix :{{$produit->chien->prix}} </h3>
                       <h3>Age : {{$produit->chien->age}}</h3>
                        <h3> Description :<?php echo $produit->chien->description; ?></h3>
                         <h3> Images:</h3>
                          <div class="row" style="margin-top: 25px;"> 
                             @if($produit->chien->imagePrincipal!=null)
                       <div class="col-lg-3 ">
                        <a href="{{asset('storage/'.$produit->chien->imagePrincipal)}}"> <img src="{{asset('storage/'.$produit->chien->imagePrincipal)}}" class="img-fluid zoom" s alt="..."></a>
                      </div>
                        @endif
           
                      @if($produit->chien->image2!=null)
                       <div class="col-lg-3 ">
                        <a href="{{asset('storage/'.$produit->chien->image2)}}"> <img src="{{asset('storage/'.$produit->chien->image2)}}" class="img-fluid zoom" s alt="..."></a>
                      </div>
                        @endif
                         @if($produit->chien->image3!=null)
                         <div class="col-lg-3">
                          <a href="{{asset('storage/'.$produit->chien->image3)}}"> <img src="{{asset('storage/'.$produit->chien->image3)}}" class="img-fluid zoom" s alt="..."></a>
                        
                      </div>
                        @endif
                         @if($produit->chien->image4!=null)
                         <div class="col-lg-3">
                         <a href="{{asset('storage/'.$produit->chien->image4)}}"> <img src="{{asset('storage/'.$produit->chien->image4)}}" class="img-fluid zoom" s alt="..."></a>
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


                                    <!-- *********** -->

                       </td>
                    </tr>
                     @endforeach
                    
                  </tbody>
                </table>
                <!--  -->
       

          <!-- DataTales Example -->
         
          </div>
</div>
</div>

        </div>

@endsection