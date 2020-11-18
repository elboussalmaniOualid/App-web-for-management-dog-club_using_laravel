@extends('layouts.adminMaster')


@section('content')

 <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Votre profile</h1>
           
          </div>
              @if(session()->has('success'))
                     <div class="alert alert-danger">
                       {{ session()->get('success')}}
                         </div>
                @endif
                @if(session()->has('error1'))
                  <div class="alert alert-danger"> 
                       {{ session()->get('error1')}}
                         </div>
                @endif
                 @if(session()->has('error2'))
                  <div class="alert alert-danger"> 
                       {{ session()->get('error2')}}
                         </div>
                @endif
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modifier le  mot de passe</h1>
              </div>
              <form class="user" action="{{url('admin/editProfil')}}" enctype="multipart/form-data" method="post">
                {{ csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">

                    <input type="password" class="form-control form-control-user" name="ancienpassword"  placeholder="Ancien moot de pass" value="" required>
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

                    <input type="password" class="form-control form-control-user" name="password"  placeholder="Nouveau mot de passe" value="" required>
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

                    <input type="password" class="form-control form-control-user" name="confirmer_password"  placeholder="Confirmer mot de passe" value="" required>
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
                <input type="submit" class="btn btn-danger btn-user btn-block" value="Enregistrer">
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



        </div>

@endsection