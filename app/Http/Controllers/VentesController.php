<?php

namespace App\Http\Controllers;
use App\Vente;
use App\Produit;

use Illuminate\Http\Request;

class VentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vents = Vente::all();
        return view('ventes.list',['vents'=>$vents]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vente $vents)
    {
        $prod = Produit::all();
        return view('ventes.form',['produits'=>$prod]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vente=new Vente();
        $vente->produit_id=$request->produit_id;
        $vente->qte=$request->qte;
        $vente->nom_client=$request->nom_client;
        $vente->contact_client=$request->contact_client;
        $vente->date_vente=$request->date_vente;
        $vente->save();

        return redirect ('list_vente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vent $vents)
    {
        $vent=Vente::latest()->get();
        return view('vents.index')->withVent('$vent');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vent $vents)
    {
        return view('vents.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vent $vents)
    {
        $vent->update($request->all());
        return redirect()->route('vents.show',$vents);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vent $vents)
    {
        $vent->delete();
        return redirect()->route('vents.index');   
    }
}
