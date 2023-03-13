<?php

namespace App\Http\Controllers;

use App\Models\ClientV;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function home()
    {
        $commandes = Commande::all();
        $produits = Produit::all();
        $clientsV = ClientV::all();

        $N_com = $commandes->count();
        $N_comd = $commandes->count();
        $N_produit = $produits->count();
        $N_clientV = $clientsV->count();
        return view('admin.home',compact('commandes','N_com','N_produit','produits','clientsV','N_clientV'));
    }
    public function ajouter()
    {
      
        return view('admin.ajouter');
    }
    public function ProduitClient()
    {
      $clients = ClientV::all();
        return view('admin.ProduitClient' ,compact('clients'));
    }
    public function commande()
    {
      
      $commande = Commande::all();
      
        return view('admin.commande' ,compact('commande'));
    }
    public function Produit()
    {
      $produits = Produit::all();
        return view('admin.Produit' ,compact('produits'));
    }
        public function store(Request $request)
        {
            $request->validate([
                "Model" => "required",
                "Etat" => "required",
                "Taille" => "required",
                "Prix" => "required",
                "description" => "required",               
                
            ]);
            $produits = new Produit();
            
            $produits->Model = $request->Model;
            $produits->Taille = $request->Taille;
            $produits->Etat = $request->Etat;
            $produits->description = $request->description;
            $produits->Prix = $request->Prix;
            if ($request->hasFile('Image')) {
                //Get Just Ext
                $extention = $request->file('Image')->getClientOriginalExtension();
                //FileName To Store
                $fileNameToStore = "item_" . time() . '.' . $extention;
                //Upload Image
                $path = $request->file('Image')->storeAs('public/uploads', $fileNameToStore);
                $produits->image = $fileNameToStore;
            }
           
            $produits->save();
            return redirect('/admin/Produit');
        }
        public function delete($id)
        {
            $produits = Produit::find($id);
            $produits->delete();
            return redirect()->back();
        }
     
    }

