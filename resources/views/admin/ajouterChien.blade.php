@extends('layouts.adminMaster')


@section('content')


<div class="container">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Gsérer vos chiens </h1>
            <a href="{{url('admin/homeChien')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Consulter la liste des chiens</a>
          </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Nouveau Chien</h1>
              </div>
              <form class="user" action="{{url('admin/enregister')}}" method="post" enctype="multipart/form-data">
              	{{ csrf_field()}}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('titre')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="titre" id="exampleFirstName" placeholder="Titre" value="{{old('titre')}}" >
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
                  <div class="col-sm-6 mb-3 mb-sm-0 @if($errors->get('prix')) has-error @endif">

                    <input type="text" class="form-control form-control-user" name="prix" id="exampleFirstName" placeholder="Prix du chien">
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

                    <input type="text" class="form-control form-control-user" name="age" id="exampleFirstName" placeholder="Age">
                      @if($errors->get('age'))
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
<!-- <script>
  ClassicEditor.create( document.querySelector( '#texta' ), {
        language: {
            // The UI will be English.
            ui: 'en',

            // But the content will be edited in Arabic.
            content: 'ar', content: 'en'
        }
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( err => {
        console.error( err.stack );
    } );
</script> -->
@endsection