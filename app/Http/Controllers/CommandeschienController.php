<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\CommandesChienRequest;
use App\Models\Commandeschien;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Chien;
use Illuminate\Support\Facades\Storage;

class CommandeschienController extends Controller
{
   
public function annulerCommande(Request $req)
     {

     $commande=Commandeschien::find($req->id_commande);
    ;
          $commande->etat=-1;
          $commande->save();

    
         session()->flash('annulee','La commande à été annulé');

   return redirect('admin/homeCommandesChiens');
     }
    public function validerCommande(Request $req)
     {

     $commande=Commandeschien::find($req->id_commande);
      $chien=Chien::find($commande->chien_id);
          $chien->vendu=1;
      
         $chien->save();
          $commande->etat=1;
          $commande->save();

    
         session()->flash('validee','La commande à été validé');

   return redirect('admin/homeCommandesChiens');
     }
     public function index()
    {
       $listProduits=Commandeschien::all();
        $msg="de toutes les commandes des chiens ";
        return view('admin.listCommandeschiens',['listProduits'=> $listProduits,'msg'=>$msg]);
    }
    //*************************8
    public function indexValidee()
    {
       $listProduits=Commandeschien::where('etat',1)->get();
       $msg="de toutes les commandes des chiens vendus";
        return view('admin.listCommandeschiens',['listProduits'=> $listProduits,'msg'=>$msg]);
    }
    //************************
     public function indexAnnulee()
    {
       $listProduits=Commandeschien::where('etat',-1)->get();
        $msg="de toutes les commandes des chiens annulé";
        return view('admin.listCommandeschiens',['listProduits'=> $listProduits,'msg'=>$msg]);
    }
    //***************************8
   public function indexCommande(CommandesChienRequest $req)
    {
    	$id=$req->id_produit;
        
        $produit=Chien::find($id);
      
      return view('commandes.commandeChien',['produit'=>$produit]);
       //  return view('commandes.commande');
    }
    //***********************************
     public function store(CommandesChienRequest $req)
    {
      
        $newCommandet=new Commandeschien();
         $newCommandet->chien_id=$req->input('produit_id');
        $newCommandet->nom=$req->input('nom');
        $newCommandet->prenom=$req->input('prenom');
        $newCommandet->adresse=$req->input('adresse');
        $newCommandet->ville=$req->input('ville');
         $newCommandet->postal=$req->input('postal');
        $newCommandet->telephone=$req->input('telephone');

       
        $newCommandet->save();
        session()->flash('success','Votre commande à été  bien enregistrer ,merci !');
        //echo "bien passe";

        return redirect('chiens');
    }
public function destroy(Request $req,$id)
    {
        $newProduit=CommandesChien::find($id);
        $newProduit->delete();
         return redirect('admin/homeCommandesChiens');
    }
}
