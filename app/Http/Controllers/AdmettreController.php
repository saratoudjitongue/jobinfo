<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Panier;
use  App\Produit;
use  App\Admettre;

class AdmettreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $Admettre = new Admettre();
        $Panier = new Panier();
        $Produit = Produit::findOrFail($id);

if (Admettre::where('IdProduit','=',$Produit->id)->exists()) {
 
        return redirect('/Acceuil')->with('success_message', 'Ce produit existe déjà dans votre panier!');
}
 else{      $Admettre->IdProduit = $Produit->id;
            $Admettre->PrixTotalPanier = $Produit->PrixProduit;
            $Admettre->save();

            return redirect('/Acceuil')->with('success_message', 'Produit ajouter avec succès au panier!');
        } 
      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }

}
