@extends('layouts.adminMaster')


@section('content')


<div class="container">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Gsérer vos articles</h1>
            <a href="{{url('admin/homeArticle')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Consulter la liste des articles</a>
          </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modifier l 'article</h1>
              </div>
              <form class="user" action="{{url('admin/'.$produit->id.'/updateArticle')}}" enctype="multipart/form-data" method="post">
              	{{ csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">

                    <input type="text" class="form-control form-control-user" name="titre" id="exampleFirstName" placeholder="Titre" value="{{$produit->titre}}">
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
                  <div class="col-sm-12 mb-3 mb-sm-0">

                    <input type="text" class="form-control form-control-user" name="video" id="exampleFirstName" placeholder="Prix du produit" value="{{$produit->video}}">
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
                 
                </div>

               
 				<div class="form-group @if($errors->get('categorie')) has-error @endif">

                  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Catégorie</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="categorie" required>

             <option value="Pour l'accouplement">Pour l'accouplement</option>
              <option value="Toilettage">Toilettage</option>
              <option value="Pension">Pension</option>
              <option value="Dréssage">Dréssage</option>
              <option value="Education">Education</option>
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
					    <input type="file" class="custom-file-input form-control-user" name="image1" default="{{asset('storage/'.$produit->imagePrincipal)}}" >
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
					    <input type="file" class="custom-file-input form-control-user"name="image3">
					    <label class="custom-file-label" for="validatedCustomFile">Image 3</label>
					  </div>
	                </div>

	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user" name="image4" >
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
                     <img class="img-fluid img-thumbnail" style="width: 120px; height: 150px;" src="{{asset('storage/'.$produit->image1)}}"
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