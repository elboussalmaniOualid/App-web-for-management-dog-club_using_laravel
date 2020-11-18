<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProduitController extends Controller
{
	public function filtrer(Request $req)
    {
    	 $listProduits=Produit::where('categorie',$req->categorie)->get();
    
       $val=0;
        foreach ($listProduits as $value) {
           $val=$val+1;
        }
        //echo $val;
 return view('admin.listProduits',['listProduits'=>$listProduits,'val'=>$val]);
    }

    public function index()
    {
       $listProduits=Produit::all();
        return view('admin.listProduits',compact('listProduits'));
    }
     public function indexProduit()
    {
       $listProduits=Produit::all();
        return view('produits.produits',compact('listProduits'));
    }
     public function create()
    {
        return view('admin.ajouterProduit');
    }
    //**********************************

     public function store(ProduitRequest $req)
    {
      
      $newProduit=new Produit();
        $newProduit->titre=$req->input('titre');
        $newProduit->description=$req->input('description');
        $newProduit->prix=$req->input('prix');
        $newProduit->ancienPrix=$req->input('Anprix');
        $newProduit->categorie=$req->input('categorie');
        $newProduit->quantiteStock=$req->input('stock');
          $newProduit->restStock=$req->input('stock');
        if($req->input('promo')=='on')
        $newProduit->promotion=true;
     else 
         $newProduit->promotion=false;

       $newProduit->imagePrincipal=$req->file('imagePrincipal')->store('images');

       if($req->hasFile('image2'))
          $newProduit->image2=$req->file('image2')->store('images');
      if($req->hasFile('image3'))
          $newProduit->image3=$req->file('image3')->store('images');
      if($req->hasFile('image4'))
          $newProduit->image4=$req->file('image4')->store('images');
        
        $newProduit->save();
        session()->flash('success','le produit à été bien enregistrer');
        return redirect('admin/home');
    }

    //**********************************
    
     public function edit($id)
    {
        $produit=Produit::find($id);

        return view('admin.editProduit',['produit'=>$produit]);
        
    }
    //**********************************
    
     public function categories($id)
    {
    //   $produits=null;
      if($id==1)
        $produits=Produit::where('categorie',"Aliments")->get();
      if($id==2)
        $produits=Produit::where('categorie',"Balles de motivation")->get();
      if($id==3)
        $produits=Produit::where('categorie',"Boudins de motivation")->get();
      if($id==4)
        $produits=Produit::where('categorie',"Colliers Sprenger4")->get();
      if($id==5)
        $produits=Produit::where('categorie',"Harnais")->get();
       if($id==6)
        $produits=Produit::where('categorie',"Laisses et Colliers")->get();
      if($id==7)
        $produits=Produit::where('categorie',"Material de protection")->get();
      if($id==8)
        $produits=Produit::where('categorie',"Santé")->get();
      
              $val=0;
        foreach ($produits as $value) {
           $val=$val+1;
        }
    

        return view('produits.produitsCategories',['listProduits'=>$produits,'val'=>$val]);
        
    }
     //**********************************
    
     public function produitDetails($id)
    {
        $produit=Produit::find($id);
        $produits=Produit::where('categorie',$produit->categorie)->get();
        $val=0;
        foreach ($produits as $value) {
           $val=$val+1;
        }


        return view('produits.produitsDetai',['produits'=>$produits,'produit'=>$produit]);
        
    }
    //**********************************
    
     public function update(ProduitRequest $req,$id)
    {
       
       // $validated = $req->validated();
      $newProduit=Produit::find($id);
        $newProduit->titre=$req->input('titre');
        $newProduit->description=$req->input('description');
        $newProduit->prix=$req->input('prix');
        $newProduit->ancienPrix=$req->input('Anprix');
        $newProduit->categorie=$req->input('categorie');
         $newProduit->quantiteStock=$newProduit->quantiteStock+$req->ajouterStock;
        if($req->input('promo')=='on')
        $newProduit->promotion=true;
     else 
         $newProduit->promotion=false;
      if($req->hasFile('imagePrincipal'))
     $newProduit->imagePrincipal=$req->file('imagePrincipal')->store('images');

       if($req->hasFile('image2'))
          $newProduit->image2=$req->file('image2')->store('images');
      if($req->hasFile('image3'))
          $newProduit->image3l=$req->file('image3')->store('images');
      if($req->hasFile('image4'))
          $newProduit->image4=$req->file('image4')->store('images');
        $newProduit->save();
        session()->flash('success2','le produit à été bien modifier');
        return redirect('admin/home');
        
    }
    //**********************************
    
    public function destroy(Request $req,$id)
    {
        $newProduit=Produit::find($id);
        $newProduit->delete();
         return redirect('admin/home');
    }
    public function show(Request $request)
    {
        return view('admin/profileAdmin');
     
    }
    public function editProfil(Request $request)
    {
        
        $id=Auth::user()->id;

        $user=User::find($id);
        $pass=$request->confirmer_password;
     //Hash::make('yourpassword');
       // !Hash::check($password, $user->password)
        if($request->password==$request->confirmer_password)
        {
          if(Hash::check($request->ancienpassword,$user->password))
           {
                  
                  $user->password=Hash::make($request->password);
                  $user->save();
                    session()->flash('success','le mot de passe à été bien modifier');
            
           }
          else
             {
           session()->flash('error1','le mot de passe caurent est erroneé');
             }
      
        }
        else
          {
      session()->flash('error2','les mots de passe ne sont les memes');
          }
         

             return redirect('admin/profil');
        
     
    }
}
