@extends('layouts.adminMaster')


@section('content')


<div class="container">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Gsérer Vos produits </h1>
            <a href="{{url('admin/home')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Consulter la liste des produit</a>
          </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modifier le  produit</h1>
              </div>
              <form class="user" action="{{url('admin/'.$produit->id.'/update')}}" enctype="multipart/form-data" method="post">
              	{{ csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label for="titre">Titre de produit</label>
                    <input type="text" class="form-control form-control-user" name="titre" id="titre" placeholder="Titre de produit" value="{{$produit->titre}}">
                      @if($errors->get('titre'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('titre') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                       <label for="Stock">Quantité initial du stock</label>
                    <input type="text" id="Stock"class="form-control form-control-user" name="stock" id="exampleFirstName" placeholder="Quantité initial du stock" value="{{$produit->quantiteStock}}" disabled>
                      @if($errors->get('stock'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('stock') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="ajouter">Ajouter une quantité à votre stock</label>
                    <input type="text" id="ajouter"class="form-control form-control-user" name="ajouterStock" id="exampleFirstName" placeholder="Ajouter une quantité à votre stock">
                      @if($errors->get('ajouterStock'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('ajouterStock') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="restStock">Quantité reste en stock</label>
                    <input type="text" id="restStock"class="form-control form-control-user" name="stockrest" id="exampleFirstName" placeholder="Quantité reste en stock" value="{{$produit->restStock}}" disabled>
                      @if($errors->get('stock'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('stock') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                </div>
                   <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                       <label for="prix">Prix du produit</label>
                    <input type="text" id="prix"class="form-control form-control-user" name="prix" id="exampleFirstName" placeholder="Prix du produit" value="{{$produit->prix}}">
                      @if($errors->get('prix'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('prix') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="Anprix">Ancien prix</label>
                    <input type="text" class="form-control form-control-user" name="Anprix" id="Anprix" placeholder="Ancien prix" value="{{$produit->ancienPrix}}">
                     @if($errors->get('Anprix'))
                      <div role="alert">
                       <ul> 
                         @foreach($errors->get('Anprix') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                  </div>
                </div>

               
 				<div class="form-group">

                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Catégorie</label>
					  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="categorie" required>
          
              <option value="Aliments">Aliments</option>
              <option value="Balles de motivation">Balles de motivation</option>
              <option value="Boudins de motivation">Boudins de motivation</option>
              <option value="Colliers Sprenger4">Colliers Sprenger4</option>
              <option value="Hrnais">Hrnais</option>
              <option value="Laisses et Colliers">Laisses et Colliers</option>
              <option value="Material de protection">Material de protection</option>
              <option value="Santé">Santé</option>
            </select>
             @if($errors->get('categorie'))
                      <div role="alert">
                       <ul> 
                         @foreach($errors->get('categorie') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                </div>

                <div class="row " >
                	
	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user" name="imagePrincipal" default="{{asset('storage/'.$produit->imagePrincipal)}}" >
					    <label class="custom-file-label" for="validatedCustomFile">Image principale</label>

					  </div>
	                </div>

	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user" name="image2" default="{{asset('storage/'.$produit->imagePrincipal)}}">
					    <label class="custom-file-label" for="validatedCustomFile">Image 2</label>
					  </div>
	                </div>
	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user"name="image3" default="{{asset('storage/'.$produit->imagePrincipal)}}">
					    <label class="custom-file-label" for="validatedCustomFile">Image 3</label>
					  </div>
	                </div>

	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user" name="image4" default="{{asset('storage/'.$produit->imagePrincipal)}}">
					    <label class="custom-file-label" for="validatedCustomFile">Image 4</label>
					  </div>
	                </div>
	                
                
                </div>
                
                  <div class="form-group">
                    <textarea id="texta"class="form-control " name="description" >  {{$produit->description}}</textarea>
                  @if($errors->get('description'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('description') as $message)
                         <li style="color: red;"> {{$message}}</li>
                         @endforeach
                      </ul>
                      </div>
                      @endif
                </div>
                   <!--comt-->
                    <div class="row " >
                  
                  <div class="form-group col-sm-3">
                     <img class="img-fluid img-thumbnail" style="width: 120px; height: 150px;" src="{{asset('storage/'.$produit->imagePrincipal)}}"
                                   alt="..." >
                               
                  </div>

                  <div class="form-group col-sm-3">
                    @if($produit->image2!=null)
                       <img class="img-fluid img-thumbnail" style="width: 120px; height: 150px;" src="{{asset('storage/'.$produit->image2)}}"
                                   alt="..." >
                    @endif
                  </div>
                  <div class="form-group col-sm-3">
                    @if($produit->image3!=null)
                    <img class="img-fluid img-thumbnail" style="width: 120px; height: 150px;" src="{{asset('storage/'.$produit->image3)}}"
                                   alt="..." >
                    @endif
                  </div>

                  <div class="form-group col-sm-3">
                    
                   @if($produit->image4s!=null)
                     <img class="img-fluid img-thumbnail" style="width: 120px; height: 150px;" src="{{asset('storage/'.$produit->image4)}}"
                                   alt="..." >
                    @endif
                  </div>
                  
                
                </div>
                   <!--conyt-->

               <div class="form-group">
 					<div class="form-check">
					  <input type="checkbox" class="form-check-input" name="promo" id="materialChecked2" checked>
					  <label class="form-check-label"  for="materialChecked2"> Promotion </label>
					</div>
                </div>
                <input type="submit" class="btn btn-danger btn-user btn-block" value="Modifier">
                
                <hr>
              
               
              </form>
              
            
            
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
   <script src="{{ asset('ckeditor/ckedito5/ckeditor.js') }}"></script>
<script>
ClassicEditor.create(document.getElementById('texta'));
</script>
@endsection