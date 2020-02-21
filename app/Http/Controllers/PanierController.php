<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Panier;
use  App\Produit;
use  App\Admettre;
use App\Type_produit;
use validator;

class PanierController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $Admettres = new Admettre();
    $TypeProduits = Type_produit::all();
            $Paniers = new Panier();
            $Prod = DB::table('admettres')->leftJoin('produits', 'admettres.IdProduit', '=', 'produits.id')->get();
             $TotalProduit = DB::table('admettres')->count();
             $TotalPrix =0;

             foreach($Prod as $produit)
             {
             $TotalPrix = $TotalPrix + ($produit->PrixProduit * $produit->Quantite);
             }

            return view('Pages.Panier', compact('Prod','TotalProduit','TotalPrix', 'TypeProduits'));
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
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $Prod = DB::table('admettres')->leftJoin('produits', 'admettres.IdProduit', '=', 'produits.id')->get();
         $TotalProduit = DB::table('admettres')->count();
         $TotalPrix = 0;
          $TypeProduits = Type_produit::all();

             foreach($Prod as $produit)
             {
             $TotalPrix = $TotalPrix + ($produit->PrixProduit * $produit->Quantite);
             }
       return view('Pages.Paniers.EditPanier', compact('Prod','TotalProduit','TotalPrix','TypeProduits'));
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


        $Prod = DB::table('admettres')->where('IdProduit', $id)->update(array('Quantite' => $request->input('QteProd')));
            return redirect('/ModifierPanier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
       DB::table('admettres')->delete();
        return redirect('/MonPanier')->with('success_message', 'Votre panier a été vider avec succès !');
    }


     public function removeProduct($id)
    {
       DB::table('admettres')->where('IdProduit', $id)->delete();
      
        return redirect('/ModifierPanier');
    }



    
}
