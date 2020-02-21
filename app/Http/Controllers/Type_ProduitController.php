<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type_ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $TypeProduits = Type_produit::all();

            return view('Layouts.LayoutClient',compact('TypeProduits'));
    }

}
