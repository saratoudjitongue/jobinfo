<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produit;
use App\admettre;
use App\Type_produit;
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

Route::get('/Acceuil', 'AcceuilController@index')->name('Acceuil');

Route::get('/Categorie\{id}', 'AcceuilController@ProduitCateg')->name('categorie');

//Routes Commandes
Route::get('/ListeCom', 'CommandeController@index')->name('ListeCommandes');

Route::get('/FicheCom', 'CommandeController@create')->name('FicheCommandes');

Route::get('/DetailsCommande\{id}','CommandeController@show')->name('InfoCommande');

Route::get('/ValiderCommande\{id}','CommandeController@update')->name('UpdateCommande');

Route::get('/ListeComValider', 'CommandeController@showValider')->name('ListeCommandesValider');

Route::get('/EtatCommande', 'CommandeController@showEtat')->name('CommandeEtat');

Route::get('/ImpressionCommande', 'CommandeController@ImprimerEtat')->name('CommandeImpression');

Route::get('/TerminerCommande', 'CommandeController@EndCommande')->name('CommandeTerminer');


//Routes Client
Route::get('/ListeClient', 'ClientController@show')->name('ListeClient');

Route::post('/EnregistrerClient', 'ClientController@store')->name('EnregistrerClient');

//Routes Produits
Route::get('/EnregistrerProd', 'ProduitController@create')->name('FormProduit');

Route::post('/EnregistrerProd', 'ProduitController@store')->name('EnregistrerProduit');

Route::get('/ListeProd', 'ProduitController@index')->name('ListeProd');

Route::get('/DetailsProduit\{id}','ProduitController@show')->name('InfoProd');

Route::get('/EditProd\{id}', 'ProduitController@edit')->name('ModifierProd');

Route::post('/UpdateProd\{id}', 'ProduitController@update')->name('UpdateProd');

Route::get('/ListeProd\{id}', 'ProduitController@destroy')->name('SpprimerProd');

Route::get('/Produit\{id}','ProduitController@showProduit')->name('DetailsProd');

Route::get('/search', 'ProduitController@search')->name('Recherche');

Route::get('/EtatProd', 'ProduitController@showEtat')->name('EtatProduits');

Route::get('/ImpressionProd', 'ProduitController@ImprimerEtat')->name('ImprimerProduits');

//Routes Livraisons
Route::get('/EnregistrerLivraison\{id}', 'LivraisonController@create')->name('FormLivraison');

Route::post('/EnregistrerLivraison\{id}', 'LivraisonController@store')->name('EnregistrerLivraison');

Route::get('/ListeLivraison', 'LivraisonController@show')->name('ListeLivraisons');

Route::get('/ListeLivraisonEffectuer', 'LivraisonController@showEffectuer')->name('LivraisonsEffectuer');

Route::get('/ValiderLivraison\{IdLivraison}','LivraisonController@update')->name('LivraisonCommande');

//Routes panier
Route::get('/MonPanier', 'PanierController@index')->name('Panier');

Route::get('/ModifierPanier', 'PanierController@edit')->name('ModifierPanier');

Route::post('/UpdatePanier/{id}', 'PanierController@update')->name('UpdatePanier');

Route::get('/RemovePanier/{id}', 'PanierController@removeProduct')->name('RemovePanier');

Route::get('/ViderPanier', 'PanierController@destroy')->name('ViderPanier');

Route::get('/AjouterPanier/{id}', 'AdmettreController@store')->name('AjoutPanier');


//Routes factures


Route::get('/ListeFacture', 'FactureController@show')->name('ListeFacture');

Route::get('/Facture', 'FactureController@create')->name('CreerFacture');


Route::get('/', function () {
    return view('Bienvenue');
})->name('Bienvenue');



//Authentification
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');

//admin route for our multi-auth system

Route::prefix('admin')->group(function () {
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//admin password reset routes
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
