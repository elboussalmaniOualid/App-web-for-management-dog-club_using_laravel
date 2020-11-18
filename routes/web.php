<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ChienController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CommandeschienController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/homme', function () {
    return view('homme');
});
// routes for products

Route::get('/produits', [ProduitController::class,'indexProduit']);
Route::get('/', [ProduitController::class,'indexProduit']);
Route::get('/produits/{id}', [ProduitController::class,'produitDetails']);
Route::get('/produits/categories/{id}', [ProduitController::class,'categories']);
//routes for products

Route::get('/chiens', [ChienController::class,'indexChien']);
Route::get('/chiens/{id}', [chienController::class,'chienDetails']);
//routes for  articles

Route::get('/articles', [ArticleController::class,'indexArticle']);
Route::get('/article/{id}', [ArticleController::class,'ArticleDetails']);
Route::get('/articles/categories/{id}', [ArticleController::class,'categories']);
//routes for  commande

Route::post('commande', [CommandeController::class,'indexCommande']);
Route::post('commandeChien', [CommandeschienController::class,'indexCommande']);
Route::post('/commande/enregisterCommande', [CommandeController::class,'store']);
Route::post('/commande/enregisterCommandeChien', [CommandeschienController::class,'store']);
Route::get('admin/homeCommandesChiens', [CommandeschienController::class,'index']);




Route::put('admin/validerCommande', [CommandeController::class,'validerCommande']);
Route::get('admin/homeCommandes', [CommandeController::class,'index']);
Route::delete('admin/{id}/destroyCommande', [CommandeController::class,'destroy']);
Route::delete('admin/{id}/destroyCommandechien', [CommandeschienController::class,'destroy']);

Route::put('admin/annulerCommande', [CommandeController::class,'annulerCommande']);
Route::put('admin/annulerCommandeChien', [CommandeschienController::class,'annulerCommande']);
Route::put('admin/validerCommandeChien', [CommandeschienController::class,'validerCommande']);
Route::get('admin/homeCommandesChien', [CommandeschienController::class,'index']);

Route::get('admin/homeCommandesChiensValidee', [CommandeschienController::class,'indexValidee']);
Route::get('admin/homeCommandesChiensAnnulee', [CommandeschienController::class,'indexAnnulee']);
Route::get('admin/homeCommandesValidee', [CommandeController::class,'indexValidee']);
Route::get('admin/homeCommandesAnnulee', [CommandeController::class,'indexAnnulee']);
Route::delete('admin/{id}/destroyCommandeChien', [CommandeschienController::class,'destroy']);
// 
Route::get('/detai_produit', function () {
    return view('/produits/produitsDetai');
});
Route::get('/inscrire', function () {
    return view('/produits/inscrire');
});
Route::get('/loginClient', function () {
    return view('/produits/loginClient');
});

Route::get('/inscriree', function () {
    return view('/produits/inscriree');
});

Route::get('/contact', function () {
    return view('/contact');
});
// routes for admin product

Route::get('/newProduit', function () {
    return view('/admin/ajouterProduit');
});
Route::get('/list', function () {
    return view('/admin/listProduits');
});
Route::get('admin/login', function () {
    return view('/admin/login');
});
Route::get('/ventes', function () {
    return view('ventes');
});
Route::get('/admin', function () {
    return view('admin/homeAdmin')->middleware('auth');
});
Route::get('admin/home', [ProduitController::class,'index'])->middleware('auth');

Route::post('admin/filtrerProduit', [ProduitController::class,'filtrer'])->middleware('auth');
Route::get('admin/newProduit', [ProduitController::class,'create'])->middleware('auth');
Route::get('admin/{id}/edit', [ProduitController::class,'edit'])->middleware('auth');
Route::put('admin/{id}/update', [ProduitController::class,'update'])->middleware('auth');
Route::post('admin/enregisterProduit', [ProduitController::class,'store'])->middleware('auth');
Route::delete('admin/{id}/destroy', [ProduitController::class,'destroy'])->middleware('auth');


// routes for admin product

Route::get('admin/homeChien', [ChienController::class,'index'])->middleware('auth');
Route::get('admin/newChien', [ChienController::class,'create'])->middleware('auth');
Route::get('admin/{id}/editChien', [ChienController::class,'edit'])->middleware('auth');
Route::put('admin/{id}/updateChien', [ChienController::class,'update'])->middleware('auth');
Route::post('admin/enregister', [ChienController::class,'store']);
Route::delete('admin/{id}/destroyChien', [ChienController::class,'destroy'])->middleware('auth');

// routes for admin post

Route::get('admin/homeArticle', [ArticleController::class,'index'])->middleware('auth');
Route::get('admin/newArticle', [ArticleController::class,'create'])->middleware('auth');
Route::get('admin/{id}/editArticle', [ArticleController::class,'edit'])->middleware('auth');
Route::put('admin/{id}/updateArticle', [ArticleController::class,'update'])->middleware('auth');
Route::post('admin/enregisterArticle', [ArticleController::class,'store'])->middleware('auth');
Route::delete('admin/{id}/destroyArticle', [ArticleController::class,'destroy'])->middleware('auth');


Route::get('admin/profil', [ProduitController::class,'show'])->middleware('auth');
Route::put('admin/editProfil', [ProduitController::class,'editProfil'])->middleware('auth');







Route::get('/Produit', [ProduitController::class,'newProduit']);
//[ProduitController::class,'indexProduit']
// function () {
//     return view('dashboard');}
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',function ()
 {
    if (Auth::user()->is_admin) {

            //return redirect('dashboard');
        return view('admin/home');
        }
        else
       return redirect('produits');
}
)->name('dashboard');
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('walid.lota@gmail.com')->send(new \App\Mail\Mail($details));
   
    echo "Email is Sent.";
});