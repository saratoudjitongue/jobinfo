<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Facture;
use App\Produit;
use App\Admettre;
use App\Conserner;
use App\Client;
class FactureController extends Controller
{
   
    public function show()
    {
    $Factures = Facture::all();
    return view('Pages.Factures.ListeFactures')->withFactures($Factures);
    }

     public function create()
    {
        $Admettre = new Admettre();
        $Conserner = new Conserner();
        $TotalProduit = DB::table('admettres')->count();
        $Prod = DB::table('admettres')->leftJoin('produits', 'admettres.IdProduit', '=', 'produits.id')->get();
        $TotalPrix = 0;
        foreach($Prod as $produit)
             {
             $TotalPrix = $TotalPrix + ($produit->PrixProduit * $produit->Quantite);
             }
        return view('Pages.Factures.Facture-impression', compact('Prod','TotalProduit','TotalPrix'));
    }

}
