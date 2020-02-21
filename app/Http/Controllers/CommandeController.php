<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Commande;
use App\Admettre;
use App\Produit;
use App\Conserner;
use App\user;
use App\Type_produit;

class CommandeController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
      public function __construct()
    {
        $this->middleware('auth')->only(["create"]);

        $this->middleware('auth:admin')->only(["index","show","update","showValider","showEtat","ImprimerEtat"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Commandes = DB::table('commandes')->leftJoin('users', 'commandes.IdClt', '=', 'users.id')->select('commandes.id','users.name','commandes.DateCommande','commandes.PrixTotalCommande','commandes.EtatCommande')->where('EtatCommande', '=', 0)->get();

      
        $TotalProduit = DB::table('admettres')->count();

        return view('Pages.Commandes.ListeCommandes')->withCommandes($Commandes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $TypeProduits = Type_produit::all();
        $TotalProduit = DB::table('admettres')->count();
        $Commandes = Commande::all();
        return view('Pages.Commandes.FicheCommande', compact('TotalProduit','TypeProduits'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Conserners = new Conserner();
        $Prod = DB::table('conserners')->Join('produits', 'conserners.IdProduit', '=', 'produits.id')->where('IdCommande', '=', $id)->get();

        return view('Pages.Commandes.InfoCommande', compact('Prod'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $Commandes = DB::table('commandes')->where('id', $id)->update(array(
        'EtatCommande' => 1));

            return redirect('/ListeCom');
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showValider()
    {
       $Commandes = DB::table('commandes')->leftJoin('users', 'commandes.IdClt', '=', 'users.id')->select('commandes.id','users.name','commandes.DateCommande','commandes.PrixTotalCommande','commandes.EtatCommande')->where('EtatCommande', '=', 1)->get();

        return view('Pages.Commandes.ListeCommandesValider')->withCommandes($Commandes);
    }


    public function showEtat()
    {
        $Commandes = DB::table('commandes')->leftJoin('users', 'commandes.IdClt', '=', 'users.id')->select('commandes.id','users.name','commandes.DateCommande','commandes.PrixTotalCommande','commandes.EtatCommande')->get();
        $TypeProduits = Type_produit::all();

        return view('Pages.Commandes.EtatCommandes', compact('TypeProduits','Commandes'));
    }

     public function ImprimerEtat()
    {
        $Commandes = DB::table('commandes')->leftJoin('users', 'commandes.IdClt', '=', 'users.id')->select('commandes.id','users.name','commandes.DateCommande','commandes.PrixTotalCommande','commandes.EtatCommande')->get();
         $TypeProduits = Type_produit::all();

        return view('Pages.Commandes.ImpressionEtatCommandes', compact('TypeProduits','Commandes'));
    }

      public function EndCommande()
    {
        DB::table('admettres')->delete();
        return redirect('/Acceuil')->with('message', 'Commandes effectuer avec succès !');
    }

}