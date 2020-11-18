<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\ChienRequest;
use App\Models\Chien;
use Illuminate\Support\Facades\Storage;


class ChienController extends Controller
{

      public function index()
    {
       $listProduits=Chien::all();
        return view('admin.listChiens',compact('listProduits'));
    }

	//****************************
     public function create()
    {
        return view('admin.ajouterChien');
    }
    //**********************************

     public function store(ChienRequest $req)
    {
      
      $newChien=new Chien();
        $newChien->titre=$req->input('titre');
        $newChien->description=$req->input('description');
        $newChien->prix=$req->input('prix');
          $newChien->age=$req->input('age');
      
        $newChien->categorie="chiens";
       // if($req->input('promo')=='on')
       // $newChien->promotion=true;
     //else 
        // $newChien->promotion=false;
       if($req->hasFile('imagePrincipal'))
       $newChien->imagePrincipal=$req->file('imagePrincipal')->store('images');

       if($req->hasFile('image2'))
          $newChien->image2=$req->file('image2')->store('images');
      if($req->hasFile('image3'))
          $newChien->image3l=$req->file('image3')->store('images');
      if($req->hasFile('image4'))
          $newChien->image4=$req->file('image4')->store('images');
        
        $newChien->save();
        session()->flash('success','le produit à été bien enregistrer');
        return redirect('admin/homeChien');
    }
     //**********************************
      public function edit($id)
    {
        $produit=chien::find($id);

        return view('admin.editChien',['produit'=>$produit]);
        
    }
    //**************************************
    
    public function destroy(Request $req,$id)
    {
        $newProduit=Chien::find($id);
        $newProduit->delete();
         return redirect('admin/homeChien');
    }
    //********************
    public function update(ChienRequest $req,$id)
    {
       
       // $validated = $req->validated();
        $newProduit=Chien::find($id);
        $newProduit->titre=$req->input('titre');
        $newProduit->description=$req->input('description');
        $newProduit->prix=$req->input('prix');
        $newProduit->age=$req->input('age');
        $newProduit->categorie="chien";
       // if($req->input('promo')=='on')
      //  $newProduit->promotion=true;
     //else 
         //$newProduit->promotion=false;
     if($req->hasFile('imagePrincipal')) 
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
     public function indexChien()
    {
       $listProduits=Chien::where('vendu',0)->get();
        return view('chiens.chiens',compact('listProduits'));
    }
     public function chienDetails($id)
    {
        $produit=chien::find($id);
        $produits=chien::where('categorie',$produit->categorie)->get();


        return view('chiens.chienDetai',['produits'=>$produits,'produit'=>$produit]);
        
    }
    //**********************************
}
