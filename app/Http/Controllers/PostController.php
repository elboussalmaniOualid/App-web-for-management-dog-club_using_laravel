<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{


	 public function index()
    {
       $listProduits=Post::all();
        return view('admin.listChiens',compact('listProduits'));
    }

	//****************************
     public function create()
    {
        return view('admin.ajouterPost');
    }
    //**********************************

     public function store(PostRequest $req)
    {
      
        $newChien=new Post();
        $newChien->titre=$req->input('titre');
        $newChien->description=$req->input('description');
        $newChien->prix=$req->input('video');

      
        $newChien->categorie="chiens";
       // if($req->input('promo')=='on')
       // $newChien->promotion=true;
     //else 
        // $newChien->promotion=false;

       
        
        $newChien->save();
        session()->flash('success','le post à été bien enregistrer');
        return redirect('admin/homePost');
    }
     //**********************************
      public function edit($id)
    {
        $produit=Post::find($id);

        return view('admin.editChien',['produit'=>$produit]);
        
    }
    //**************************************
    
    public function destroy(Request $req,$id)
    {
        $newProduit=Post::find($id);
        $newProduit->delete();
         return redirect('admin/homeChien');
    }
    //********************
    public function update(PostnRequest $req,$id)
    {
       
       // $validated = $req->validated();
        $newProduit=Post::find($id);
        $newProduit->titre=$req->input('titre');
        $newProduit->description=$req->input('description');
        $newProduit->prix=$req->input('prix');
        $newProduit->age=$req->input('age');
        $newProduit->categorie="chien";
       // if($req->input('promo')=='on')
      //  $newProduit->promotion=true;
     //else 
         //$newProduit->promotion=false;
     
     $newProduit->imagePrincipal=$req->file('imagePrincipal')->store('images');

       if($req->hasFile('image2'))
          $newProduit->image2=$req->file('image2')->store('images');
      if($req->hasFile('image3'))
          $newProduit->image3l=$req->file('image3')->store('images');
      if($req->hasFile('image4'))
          $newProduit->image4=$req->file('image4')->store('images');
        $newProduit->save();
        session()->flash('success2','les informations du chiens  ont été bien modifier');
        return redirect('admin/homeChien');
        
    }
    //**********************
   
     public function postDetails($id)
    {
        $produit=Post::find($id);
        $produits=Post::where('categorie',$produit->categorie);


        return view('chiens.chienDetai',['produits'=>$produits,'produit'=>$produit]);
        
    }
     public function indexPost()
    {
       $listProduits=Post::all();
        return view('chiens.postes',compact('listProduits'));
    }
}
