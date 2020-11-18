@extends('layouts.adminMaster')


@section('content')


<div class="container">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Gsérer Vos articles </h1>
            <a href="{{url('admin/homeArticle')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Consulter la liste des articles</a>
          </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Nouveau article</h1>
              </div>
              <form class="user" action="{{url('admin/enregisterArticle')}}" method="post" enctype="multipart/form-data">
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
                 
                </div>
                   <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0 @if($errors->get('video')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="video" id="exampleFirstName" placeholder="Lien de votre video sur youtube ">
                       @if($errors->get('video'))
                      <div  role="alert">
                       <ul> 
                         @foreach($errors->get('video') as $message)
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
					
					    <option value="Pour l'accouplement">Pour l'accouplement</option>
					    <option value="Toilettage">Toilettage</option>
              <option value="Pension">Pension</option>
              <option value="Dréssage">Dréssage</option>
              <option value="Education">Education</option>
              <option value="Education">Autre</option>
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
					    <input type="file" class="custom-file-input form-control-user" name="image1">
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