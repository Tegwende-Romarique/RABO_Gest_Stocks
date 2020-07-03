<?php

namespace App\Http\Controllers;
use App\Stock;
use App\Produit;

use Illuminate\Http\Request;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Stock $stock)
    {
        $prod = Produit::all();
        return view('stocks.form',['produits'=>$prod]);
    }

    public function index()
    {
        $stock = Stock::all();
        return view('stocks.list',['stocks'=>$stock]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit=Produit::find($request->Produit_id);
        $stock=$produit->stocks;
        $stock->qte=$stock->qte+$request->qte;
        $stock->save();
        return redirect ('form_stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        $stock=Stock::latest()->get();
        return view('stocks.index')->withStock('$stock');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        return view('stocks.edit ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        $stock->update($request->all());
        return redirect()->route('stocks.show',$stock);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index');   
    }
}
