<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Lot;
use App\Stock;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Produit::all();
        return view('produits.list',['produits'=>$prod]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(Produit $produit)
    {
        $lots = Lot::all();
        return view('produits.form',['lots'=>$lots]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $req=new Produit();
        // $req->nom=$request->nom;
        // $req->categorie=$request->categorie;
        // $req->prix_unitaire=$request->prix_unitaire;
        // $req->save();
        // return redirect ('produit_list');

        $prod=Produit::create([
            'nom'=>$request->nom,
            'categorie'=>$request->categorie,
            'prix_unitaire'=>$request->prix_unitaire
        ]);

        Stock::create([
            'qte'=>$request->qte,
            'Produit_id'=>$prod->id
        ]);
        return redirect ('produit_list');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        $produit=Produit::latest()->get();
        return view('produits.index')->withProduits('$produit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produit)
    {
        return view('produits.edit ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produits $produit)
    {
        $produit->update($request->all());
        return redirect()->route('produits.show',$produit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produits $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index');   
    }
}
