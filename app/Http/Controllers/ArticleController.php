<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
     public function index()
    {
       $listProduits=Article::all();
        return view('admin.listArticles',compact('listProduits'));
    }

	//****************************
     public function create()
    {
        return view('admin.ajouterArticle');
    }
    //**********************************

     public function store(Request $req)
    {
      
        $newArticle=new Article();
        $newArticle->titre=$req->input('titre');
        $newArticle->description=$req->input('description');
        $newArticle->video=$req->input('video');

      
        $newArticle->categorie=$req->input('categorie');;
       // if($req->input('promo')=='on')
       // $newChien->promotion=true;
     //else 
        // $newChien->promotion=false;
        if($req->hasFile('image1'))
        $newArticle->image1=$req->file('image1')->store('images');

       if($req->hasFile('image2'))
          $newArticle->image2=$req->file('image2')->store('images');
      if($req->hasFile('image3'))
          $newArticle->image3=$req->file('image3')->store('images');
      if($req->hasFile('image4'))
          $newArticle->image4=$req->file('image4')->store('images');
        $newArticle->save();

       
        
        $newArticle->save();
        session()->flash('success','L \' article à été bien enregistrer');
        return redirect('admin/homeArticle');
    }
     //**********************************
      public function edit($id)
    {
        $produit=Article::find($id);

        return view('admin.editArticle',['produit'=>$produit]);
        
    }
    //**************************************
    
    public function destroy(Request $req,$id)
    {
        $newProduit=Article::find($id);
        $newProduit->delete();
         return redirect('admin/homeArticle');
    }
    //********************
    public function update(ArticleRequest $req,$id)
    {
       
       // $validated = $req->validated();
        $newArticle=Article::find($id);
         $newArticle->titre=$req->input('titre');
        $newArticle->description=$req->input('description');
        $newArticle->video=$req->input('video');

      
        $newArticle->categorie=$req->input('categorie');
       // if($req->input('promo')=='on')
       // $newChien->promotion=true;
     //else 
        // $newChien->promotion=false;
        if($req->hasFile('image1'))
        $newArticle->image1=$req->file('image1')->store('images');

       if($req->hasFile('image2'))
          $newArticle->image2=$req->file('image2')->store('images');
      if($req->hasFile('image3'))
          $newArticle->image3l=$req->file('image3')->store('images');
      if($req->hasFile('image4'))
          $newArticle->image4=$req->file('image4')->store('images');
        $newArticle->save();

       
        
        $newArticle->save();
        session()->flash('success','L \' article à été bien modifier');
        return redirect('admin/homeArticle');
        
    }
    //**********************
   
     public function ArticleDetails($id)
    {
        $produit=Article::find($id);
        $produits=Article::where('categorie',$produit->categorie);


        return view('chiens.postes',['produits'=>$produits,'produit'=>$produit]);
        
    }
     public function indexArticle()
    {
       $listProduits=Article::all();
        return view('chiens.articles',compact('listProduits'));
    }
    public function categories($id)
    {
    //   $produits=null;
      if($id==1)
        $produits=Article::where('categorie',"Pour l'accouplement")->get();
      if($id==2)
        $produits=Article::where('categorie',"Toilettage")->get();
      if($id==3)
        $produits=Article::where('categorie',"Pension")->get();
      if($id==4)
        $produits=Article::where('categorie',"Dréssage")->get();
      if($id==5)
        $produits=Article::where('categorie',"Education")->get();
      if($id==6)
           $produits=Article::where('categorie',"autre")->get();
      
              $val=0;
        foreach ($produits as $value) {
           $val=$val+1;
        }
    

        return view('chiens.articlesCategories',['listProduits'=>$produits,'val'=>$val]);
        
    }
}
