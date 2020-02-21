<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Produit;
use App\Type_produit;
use App\Admettre;
use validator;

class ProduitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin')->only(["index","create","store","show","edit","update","destroy","showEtat","ImprimerEtat"]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Produits = DB::table('produits')->leftJoin('type_produits', 'produits.IdTypeProduit', '=', 'type_produits.IdTypeProduit')->get();

            return view('Pages.Produits.ListeProd')->withProduits($Produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Type_produits = Type_produit::all(['IdTypeProduit','NomTypeProduit']);

        return view('Pages.Produits.EnregistrerProd', compact('Type_produits',$Type_produits));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $Produit = new Produit();

          $this->validate($request,[

            'NomProd' => 'required|string|max:50',
            'PrixProd' => 'required|integer|min:25',
            'DetailsProd' => 'required|string|max:100',
            'ImageProd' => 'required|image',
        ]);

        if($request->isMethod('post')){

            $Produit->NomProduit = $request->input('NomProd');
            $Produit->idTypeProduit = $request->input('TypeProd');
            $Produit->PrixProduit = $request->input('PrixProd');
            $Produit->DetailsProduit=$request->input('DetailsProd');




    if($request->hasFile('ImageProd')){

        $filenameWithExt = $request->file('ImageProd')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('ImageProd')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('ImageProd')->storeAs('public/ImgProd', $fileNameToStore);

    }
    else{

        $fileNameToStore = 'noimage.jpg';

        }

            $Produit->ImageProduit = $fileNameToStore;
            $Produit->save();

            return redirect('/ListeProd');
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
      $Produits = DB::table('produits')->leftJoin('type_produits', 'produits.IdTypeProduit', '=', 'type_produits.IdTypeProduit')->find($id);;
            return view('Pages.Produits.InfoProd',compact('Produits'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Produits = Produit::findOrFail($id);
       return view('Pages.Produits.UpdateProd', compact('Produits'));
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

         $this->validate($request,[

            'NomProd' => 'required|string|max:50',
            'PrixProd' => 'required|integer|min:25',
            'DetailsProd' => 'required|string|max:100',
        ]);

      $Produit = DB::table('produits')->where('id', $id)->update(array(

        'NomProduit' => $request->input('NomProd'),
        'DetailsProduit' => $request->input('DetailsProd'),
        'PrixProduit' => $request->input('PrixProd')));

            return redirect('/ListeProd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Produits = Produit::findOrFail($id);
        $Produits->delete();
        return redirect('/ListeProd');
    }

    public function showProduit($id)
    {
       $TypeProduits = Type_produit::all();
      $Produits = DB::table('produits')->leftJoin('type_produits', 'produits.IdTypeProduit', '=', 'type_produits.IdTypeProduit')->find($id);
       $TotalProduit = DB::table('admettres')->count();
            return view('Pages.Produit',compact('Produits', 'TotalProduit','TypeProduits'));

    }

    public function search(Request $request)
    {
        $TypeProduits = Type_produit::all();
            $success_message ='Voici les resultats de votre recherche!';
            $TotalProduit = DB::table('admettres')->count();
            $produits = DB::table('produits')->where('NomProduit', 'LIKE', '%'.$request->search.'%')->paginate(12);
        return view('Pages.Acceuil', compact( 'produits','TotalProduit','TypeProduits','success_message'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showEtat()
    {
       $produits = DB::table('produits')->leftJoin('type_produits', 'produits.IdTypeProduit', '=', 'type_produits.IdTypeProduit')->get();
            return view('Pages.Produits.EtatProd',compact('produits'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ImprimerEtat()
    {
       $produits = DB::table('produits')->leftJoin('type_produits', 'produits.IdTypeProduit', '=', 'type_produits.IdTypeProduit')->get();
            return view('Pages.Produits.ImpressionProd',compact('produits'));

    }

}
