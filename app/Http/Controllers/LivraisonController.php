<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Livraison;
use App\Client;
use App\commande;

class LivraisonController extends Controller
{
      public function __construct()
    {

        $this->middleware('auth:admin')->only(["create","show","store","update","showEffectuer"]);
    }
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
    public function create($id)
    {
            $commande = Commande::findOrFail($id);
            return view('Pages.Livraisons.EnregistrerLivraison',compact('commande'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $Livraison = new Livraison();
        $commande = Commande::findOrFail($id);
        
         $this->validate($request,[

            'PrixLiv' => 'required|integer|min:25',
        ]);
         
        if($request->isMethod('post')){

            $Livraison ->DateLivraison = $request->input('DateLiv');
            $Livraison->PrixTotalLivraison = $request->input('PrixLiv');
            $Livraison->LieuLivraison = $request->input('LieuLiv');
            $Livraison->IdClt=$commande->IdClt;
            $Livraison ->IdCommande = $id;

            $Livraison->save();

            return redirect('/ListeLivraison');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Livraisons = DB::table('livraisons')->leftJoin('users', 'livraisons.IdClt', '=', 'users.id')->select('livraisons.IdLivraison','users.name','livraisons.DateLivraison','livraisons.PrixTotalLivraison','livraisons.EtatLivraison','livraisons.IdCommande','livraisons.LieuLivraison')->where('EtatLivraison', '=', 0)->get();

    return view('Pages.Livraisons.ListeLivraison')->withLivraisons($Livraisons);
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
    public function update(Request $request, $IdLivraison)
    {
        $Livraisons = DB::table('livraisons')->where('IdLivraison', $IdLivraison)->update(array(
        'EtatLivraison' => 1));

        return redirect('/ListeLivraison');
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

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showEffectuer()
    {
        $Livraisons = DB::table('livraisons')->leftJoin('users', 'livraisons.IdClt', '=', 'users.id')->select('livraisons.IdLivraison','users.name','livraisons.DateLivraison','livraisons.PrixTotalLivraison','livraisons.EtatLivraison','livraisons.IdCommande','livraisons.LieuLivraison')->where('EtatLivraison', '=', 1)->get();

    return view('Pages.Livraisons.ListeLivraisonEffectuer')->withLivraisons($Livraisons);
    }
}
