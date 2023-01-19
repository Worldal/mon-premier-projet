<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProduitsController extends Controller
{
    // public function euro(){
    //     $prix=$resultat;
    //     return $prix;
    // }
    // public function usd(){
    //     $prix=$resultat*1.08;
    //     return $prix;
    // }
    // public function btc(){
    //     $prix=$resultat*0.000052;
    //     return $prix;
    // }
    function liste(){
        return response()->json(Produit::all());

    }
    function detail($id){
        return response()->json(Produit::find($id));
    }
    function ajouter(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->lien_image = $request->lien_image;
        $produit->prix = $request->prix;
        $produit->tva = $request->tva;
        $produit->save();
        return response()->json($produit);
    }
    function ListeDevise( $prix, $devise)
    {
        $resultat= response()->json(Produit::find($prix));
        if($devise=='USD')
        {
            $prix=$resultat*1.08;
        }
        if($devise=='BTC')
        {
            $prix=$resultat*0.000052;
        }
        else
        {
            $prix=$resultat;
        }
        return response()->json(Produit::all());
    }
}
