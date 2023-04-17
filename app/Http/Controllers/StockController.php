<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks=Stock::all();
        return view('stocks.index',compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits=Produit::all();
        return view('stocks.create',compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stocks=new Stock();
        $stocks->id_produit=$request->id_produit;
        $stocks->nom=$request->nom;
        $stocks->qunatity=$request->qunatity;
        $stocks->description=$request->description;
        $stocks->save();
        return redirect()->route('stocks.index',compact('stocks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $stocks=Stock::find($id);
        $produits=Produit::find($id);
        return view('stocks.show',compact('stocks',compact('produits')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $stocks=Stock::find($id);
        $produits=Produit::find($id);
        return view('stocks.show',compact('stocks',compact('produits')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $stocks=Stock::find($id);
        $stocks->id_produit=$request->id_produit;
        $stocks->nom=$request->nom;
        $stocks->qunatity=$request->qunatity;
        $stocks->description=$request->description;
        $stocks->save();
        return redirect()->route('stocks.index',compact('stocks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $stocks=Stock::find($id);
        $stocks->delete();
        return redirect()->route('stocks.index');

    }
}
