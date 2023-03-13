<?php

namespace App\Http\Controllers;

use App\Models\ClientV;
use App\Models\Vproduit;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function vente()
    {
        return view('vente');
    }
    public function venteForm()
    {
      
        return view('venteForm');
    }
    public function store(Request $request)
    {
        $request->validate([
            "prenom" => "required",
            "nom" => "required",
            "email" => "required",
            "telephone" => "required",
            "ville" => "required",
            "adresse" => "required",
            "code_postale" => "required",
            "Model" => "required",
            "Etat" => "required",
            "Taille" => "required",
            
        ]);
        $client = new ClientV();
        $client->prenom = $request->prenom;
        $client->nom = $request->nom;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->ville = $request->ville;
        $client->adresse = $request->adresse;
        $client->code_postale = $request->code_postale;
        $client->Model = $request->Model;
        $client->Taille = $request->Taille;
        $client->Etat = $request->Etat;
        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload Image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $client->image = $fileNameToStore;
        }
       
        $client->save();
        return redirect('/VenteForm');
    }
}
