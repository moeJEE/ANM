<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    public function achat()
    {
        $produits=Produit::all();
        return view('achat',compact('produits'));
    }
}
