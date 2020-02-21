<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produit;
use App\admettre;
use App\Type_produit;

class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $TypeProduits = Type_produit::all();
        $success_message ='';
        $produits =  DB::table('produits')->orderBy('NomProduit')->paginate(12);
        $TotalProduit = DB::table('admettres')->count();

            return view('Pages.Acceuil', compact( 'produits','TotalProduit','success_message','TypeProduits'));
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

         public function ProduitCateg($id)
    {

    $TypeProduits = Type_produit::all();
    $success_message ='';
    $produits = DB::table('produits')->where('IdTypeProduit', '=', $id)->paginate(12);
    $TotalProduit = DB::table('admettres')->count();

    return view('Pages.Acceuil', compact( 'produits','TotalProduit','success_message','TypeProduits'));

    }
}
