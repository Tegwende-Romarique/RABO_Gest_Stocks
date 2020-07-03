<?php

namespace App\Http\Controllers;
use App\Lot;

use Illuminate\Http\Request;

class LotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $lots = Lot::all();
        return view('lots.list',['lots'=>$lots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Lot $lot)
    {
        return view('lots.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req=new Lot();
        $req->libelle=$request->libelle;
        $req->save();
       return redirect ('lot_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lot $lot)
    {
        $lot=lot::latest()->get();
        return view('lot.index')->withLots('$lot');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lot $lot)
    {
        return view('lots.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lot $lot)
    {
        $lot->delete();
        return redirect()->route('lots.index');   
    }
}
