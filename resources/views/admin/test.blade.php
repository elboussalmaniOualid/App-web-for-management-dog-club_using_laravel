 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">La liste de vos produits</h6>
            </div>
            <div class="card-body">
              
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
            
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Prix</th>
                      <th>Ancien prix</th>
                      <th>Promotion</th>
                      <th>Categorie</th>
                      <th>description</th>
                       <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Titre</th>
                      <th>Prix</th>
                      <th>Ancien prix</th>
                      <th>Promotion</th>
                      <th>Categorie</th>
                       <th>description</th>
                       <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($listProduits as $produit)
                    <tr>
                      <td> {{$produit->titre}}</td>
                      <td> {{$produit->prix}}</td>
                      <td>{{$produit->ancienPrix}}</td>
                      <td>{{$produit->promotion}}</td>
                        <td>{{$produit->categorie}}</td>
                      <td>{{$produit->description}}</td>
                      
                     
                       <td>
                      
                       	<form action="{{url('admin/'.$produit->id.'/destroy')}}" method="post">
                       		{{csrf_field()}}
                       		{{method_field('DELETE')}}
                       	<a href="{{url('admin/'.$produit->id.'/edit')}}" class="btn btn-warning" > Modifier</a>
                       
                       	<a href="{{url('admin/'.$produit->id.'/edit')}}"  class="btn btn-primary"> détails </a>
                       		<button type="submit" class="btn btn-danger"> Supprimer</button> 

                       	</form>
                       </td>
                    </tr>
                     @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>