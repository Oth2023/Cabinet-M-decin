<?php

namespace App\Http\Controllers;

use App\Models\ProdcutCategory;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ProdcutCategory = ProdcutCategory::all();
        return view('produits.create', compact('ProdcutCategory'));
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $produit=new Produit();
        $produit->id_category= $request->id_category;

        $produit->nom= $request->nom;
        $produit->prix= $request->prix;

        $produit->save();
        return redirect()->route('produits.index');

    }

    /*
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        //
        $produits=Produit::find($id);
        $prodcutCategory=ProdcutCategory::find($produits->id_category);
        return view('produits.shwo',compact(['produits','prodcutCategory']));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $id)
    {
        //
        $produits= Produit::all($id);
        $prodcutCategory=ProdcutCategory::all();

        return view('produits.edit',compact(['produits','prodcutCategory']));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, String $id)
    {
        //
        $produit= Produit::find($id);

        $produit->id_category= $request->id_category;

        $produit->nom= $request->nom;
        $produit->prix= $request->prix;

        $produit->save();
        return redirect()->route('produit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {
        //
        $produits= Produit::find($id);
        $produits->save();
        return view('produit.destroy',compact('produits'));
    }
}