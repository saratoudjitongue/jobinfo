<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use validator;

  use App\Client;
  use App\Produit;
  use App\Admettre;
  use App\Conserner;
  use App\Commande;
  use App\Type_Produit;
class ClientController extends Controller
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
     * @return \Illuminate\Http\Response*/
     
    public function store(Request $request)
    {


        $Client = new Client();
        $Commande = new Commande();
        $Admettre = Admettre::all();
        $TotalProduit = DB::table('admettres')->count();
        $Prod = DB::table('admettres')->leftJoin('produits', 'admettres.IdProduit', '=', 'produits.id')->get();
        $TotalPrix = 0;
         $TypeProduits = Type_produit::all();
        foreach($Prod as $produit)
             {
             $TotalPrix = $TotalPrix + ($produit->PrixProduit * $produit->Quantite);
             }

        $this->validate($request,[

            'NomClt' => 'required|string',
            'PrenomClt' => 'required|string',
            'TelClt' => 'required|digits:8',
            'EmailClt' => 'required|email',
            'PaysClt' => 'required|string',
            'VilleClt' => 'required|string',
            'AdresseClt' => 'required|string',
        ]);
        
            $Client->NomClt = $request->input('NomClt');
            $Client->PrenomomCl = $request->input('PrenomClt');
            $Client ->TelClt = $request->input('TelClt');
            $Client->EmailClt = $request->input('EmailClt');
            $Client ->PaysClt = $request->input('PaysClt');
            $Client->VilleClt = $request->input('VilleClt');
            $Client->AdresseClt = $request->input('AdresseClt');
            $Client->id = auth()->user()->id;    
            $Client->save();

            $Commande->IdClt =  auth()->user()->id;
            $Commande->PrixTotalCommande = $TotalPrix;
            $Commande->DateCommande = $request->input('DateCommande');
            $Commande->save();

            foreach($Admettre as $admettre)
             {
              $Conserner = new Conserner();
              $Conserner->IdCommande = $Commande->id;
              $Conserner->IdProduit =  $admettre ->IdProduit;
              $Conserner->Quantite =  $admettre ->Quantite;
              $Conserner->save(); 
             }
             //DB::table('admettres')->delete();

             return view('Pages.Factures.Facture', compact('Prod','Client','TotalProduit','TotalPrix','TypeProduits'));    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    $Clients = Client::all();
    return view('Pages.Client.ListeClient')->withClients($Clients);
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
