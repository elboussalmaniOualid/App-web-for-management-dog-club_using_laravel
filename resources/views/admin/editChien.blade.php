@extends('layouts.adminMaster')


@section('content')


<div class="container">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Gsérer vos chiens</h1>
            <a href="{{url('admin/homeChien')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Consulter la liste des chiens</a>
          </div>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modifier le  chien</h1>
              </div>
              <form class="user" action="{{url('admin/'.$produit->id.'/updateChien')}}" enctype="multipart/form-data" method="post">
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
                  <div class="col-sm-6 mb-3 mb-sm-0">

                    <input type="text" class="form-control form-control-user" name="prix" id="exampleFirstName" placeholder="Prix du produit" value="{{$produit->prix}}">
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

                    <input type="text" class="form-control form-control-user" name="age" id="exampleFirstName" placeholder="Age " value="{{$produit->age}}">
                     @if($errors->get('age'))
                      <div role="alert">
                       <ul> 
                         @foreach($errors->get('age') as $message)
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
					    <input type="file" class="custom-file-input form-control-user" name="imagePrincipal" value="{{asset('storage/'.$produit->imagePrincipal)}}" default="{{asset('storage/'.$produit->imagePrincipal)}}">
					    <label class="custom-file-label" for="validatedCustomFile">Image principale</label>

					  </div>
	                </div>
   
	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user" name="image2" default="{{asset('storage/'.$produit->image2)}}">
					    <label class="custom-file-label" for="validatedCustomFile">Image 2</label>
					  </div>
	                </div>
	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user"name="image3" 
              default="{{asset('storage/'.$produit->image3)}}">
					    <label class="custom-file-label" for="validatedCustomFile">Image 3</label>
					  </div>
	                </div>

	                <div class="form-group col-sm-3">
	                	<div class="custom-file">
					    <input type="file" class="custom-file-input form-control-user" name="image4" default="{{asset('storage/'.$produit->image4)}}" >
					    <label class="custom-file-label" for="validatedCustomFile">Image 4</label>
					  </div>
	                </div>
	                
                
                </div>
                
                  <div class="form-group">
                    <textarea id="texta" class="form-control " name="description" >  {{$produit->description}}</textarea>
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