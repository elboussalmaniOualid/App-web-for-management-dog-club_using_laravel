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
                <h1 class="h4 text-gray-900 mb-4">Nouveau produit</h1>
              </div>
              <form class="user" action="{{url('admin/enregisterProduit')}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field()}}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('titre')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="titre" id="exampleFirstName" placeholder="Titre de produit" value="{{old('titre')}}" >
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
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('titre')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="stock" id="exampleFirstName" placeholder="La quantité en stock" value="{{old('stock')}}" >
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
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('prix')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="prix" id="exampleFirstName" placeholder="Prix du produit">
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
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('Anprix')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="Anprix" id="exampleFirstName" placeholder="Ancien prix">
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

               
 				<div class="form-group @if($errors->get('categorie')) has-error @endif">

                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Catégorie</label>
					  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="categorie" required>
					
					    <option value="Aliments">Aliments</option>
					    <option value="Balles de motivation">Balles de motivation</option>
              <option value="Boudins de motivation">Boudins de motivation</option>
              <option value="Colliers Sprenger4">Colliers Sprenger4</option>
              <option value="Harnais">Hrnais</option>
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
              <input type="file" class="custom-file-input form-control-user" name="imagePrincipal"required>
              <label class="custom-file-label" for="validatedCustomFile">Image principale</label>
            </div>
                  </div>

                  <div class="form-group col-sm-3">
                    <div class="custom-file">
              <input type="file" class="custom-file-input form-control-user" name="image2">
              <label class="custom-file-label" for="validatedCustomFile">Image 2</label>
            </div>
                  </div>
                  <div class="form-group col-sm-3">
                    <div class="custom-file">
              <input type="file" class="custom-file-input form-control-user" name="image3">
              <label class="custom-file-label" for="validatedCustomFile">Image 3</label>
            </div>
                  </div>

                  <div class="form-group col-sm-3">
                    <div class="custom-file">
              <input type="file" class="custom-file-input form-control-user" name="image4">
              <label class="custom-file-label" for="validatedCustomFile">Image 4</label>
            </div>
                  </div>
                  
                
                </div>
                  <div class="form-group @if($errors->get('description')) has-error @endif">
                  	<textarea id="texta"class="form-control " name="description">  description de produit</textarea>
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
                
               <div class="form-group">
 					<div class="form-check">
					  <input type="checkbox" class="form-check-input" name="promo" id="materialChecked2" checked>
					  <label class="form-check-label"  for="materialChecked2"> Promotion </label>
					</div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Enregistrer">
                
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