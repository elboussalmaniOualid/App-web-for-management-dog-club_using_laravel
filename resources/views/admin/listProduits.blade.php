@extends('layouts.adminMaster')


@section('content')

 <div class="container-fluid" id="app">
      
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">  Gérer Vos produits </h1>
            <a href="{{url('admin/newProduit')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Ajouter un produit</a>
          </div>
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
   <form class="user form-inline" action="{{url('admin/filtrerProduit')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
          <div class="form-group mb-2">

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
          </div> 
          <button type="submit" class="d-none d-md-inline-block btn btn-md btn-success shadow-md mb-2"> Filtrer</button>
        </form>
          
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
          <div class="row">
              @foreach($listProduits as $produit)

                    <div class="col-sm-6 col-md-3">
                          <center>   <div class="thumbnail ">
                               
                                <img class="img-fluid img-thumbnail" style="width: 220px; height: 150px;" src="{{asset('storage/'.$produit->imagePrincipal)}}"
                                   alt="..." >
                               
                             <div class="caption">
                                    <h3>{{$produit->titre}}</h3>
                                    <p>{{$produit->prix}} DH </p>
                                    <p>
                 
            <a id="sa-remove" href="{{url('admin/'.$produit->id.'/edit')}}" class="btn btn-warning " > <i class="fas fa-edit"></i> </a>
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
                     
                      <form action="{{url('admin/'.$produit->id.'/destroy')}}" method="post">
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
                        <h5 class="modal-title" id="staticBackdropLabel">Détails sur le produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <h3>Titre du produit :{{$produit->titre}}</h3> 
                      <h3>Prix :{{$produit->prix}} </h3>
                       <h3>Ancien prix : {{$produit->ancienPrix}}</h3>
                         <h3> Stock initial : {{$produit->quantiteStock}}</h3>
                           <h3>La quantité reste en stock: {{$produit->restStock}}</h3>

                        <h3> Description :  <?php echo $produit->description; ?></h3>
                         <h3> Images:</h3>
                          <div class="row" style="margin-top: 25px;"> 
                             @if($produit->imagePrincipal!=null)
                       <div class="col-lg-3 ">
                        <a href="{{asset('storage/'.$produit->imagePrincipal)}}"> <img src="{{asset('storage/'.$produit->imagePrincipal)}}" class="img-fluid zoom" s alt="..."></a>
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


                      <!-- *********************** -->

                  
                                    </p>
                                </div>

                            </div></center>  
                        </div>

                @endforeach
                </div>

          <!-- DataTales Example -->
         
          </div>
<script>
  function alett()
  { 
   
    const url = $(this).attr('href');
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = url;
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
  
</script>
<script>
   $('#sa-remove').click(function (e) {
      e.preventDefault();
            var postId = $(this).data('id'); 
            swal({
                title: "are u sure?",
                text: "lorem lorem lorem",
                type: "error",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(){
                window.location.href = "{{url('admin/"+postId+"/edit')}}";
            });
</script>
        </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.all.min.js" integrity="sha256-+NQaBfF4nNrStaiFgXjQUgn1iCyCyZhIf6QzJTfc7nM=" crossorigin="anonymous"></script>

@endsection

@section('javascripts')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script type="text/javascript">
  var app= new Vue({
el:'#app',
data: {
  msg:' walid',
  produits : []
},
methods: {

  deleteProduit: function()
  {
    axios.
  }
},
mounted:function()
{

}

  });

</script>
@endsection