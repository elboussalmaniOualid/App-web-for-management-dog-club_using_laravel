<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\CommandeRequest;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Chien;
use Illuminate\Support\Facades\Storage;
class CommandeController extends Controller
{

     public function validerCommande(Request $req)
     {

     $commande=Commande::find($req->id_commande);
      $produit=Produit::find($commande->produit_id);
      $produit->restStock= $produit->quantiteStock- $commande->quantite;
       $stock =$produit->restStock;
      if($stock > 0)
      {
         $produit->save();
          $commande->etat=1;
        $commande->save();
      session()->flash('valide','La commande à été validée');
      }
     else
         session()->flash('error','Cette quantité n\'est pas disponile en stock');

   return redirect('admin/homeCommandes');
     }
     public function index()
    {
       $listProduits=Commande::all();
        $msg="de toutes les commandes des produits ";
        return view('admin.listCommandes',['listProduits'=> $listProduits,'msg'=>$msg]);
    }
   public function indexCommande(CommandeRequest $req)
    {
    	$id=$req->id_produit;
        
        $produit=Produit::find($id);
      
      return view('commandes.commande',['produit'=>$produit,'quantite'=>$req->quantite]);
       //  return view('commandes.commande');
    }
    //***********************************
     public function store(CommandeRequest $req)
    {
      
        $newCommandet=new Commande();
         $newCommandet->produit_id=$req->input('produit_id');
        $newCommandet->nom=$req->input('nom');
        $newCommandet->prenom=$req->input('prenom');
        $newCommandet->adresse=$req->input('adresse');
        $newCommandet->ville=$req->input('ville');
         $newCommandet->postal=$req->input('postal');
         $newCommandet->quantite=$req->input('quantite');
        $newCommandet->telephone=$req->input('telephone');

       
        $newCommandet->save();
        session()->flash('success','Votre commande à été  bien enregistrer ,merci !');
        //echo "bien passe";

        return redirect('produits');
    }
public function destroy(Request $req,$id)
    {
        $newProduit=Commande::find($id);
        $newProduit->delete();
         return redirect('admin/homeCommandes');
    }
    public function indexValidee()
    {
       $listProduits=Commande::where('etat',1)->get();
       $msg="de toutes les commandes des produits vendus";
        return view('admin.listCommandes',['listProduits'=> $listProduits,'msg'=>$msg]);
    }
    //************************
     public function indexAnnulee()
    {
       $listProduits=Commande::where('etat',-1)->get();
        $msg="de toutes les commandes des produits annulé";
        return view('admin.listCommandes',['listProduits'=> $listProduits,'msg'=>$msg]);
    }
    public function annulerCommande(Request $req)
     {

     $commande=Commande::find($req->id_commande);
    ;
          $commande->etat=-1;
          $commande->save();

    
         session()->flash('annulee','La commande à été annulée');

   return redirect('admin/homeCommandes');
     }
}
