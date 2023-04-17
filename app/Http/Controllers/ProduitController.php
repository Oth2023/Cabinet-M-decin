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
        $produit = Produit::all();
        return view('produit.index', compact('produit'));
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
        return view('produit.create', compact('ProdcutCategory'));
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
        $produit->prix= $request->sexe;

        $produit->save();
        return redirect()->route('produit.index');

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
        $produit=Produit::find($id);
        $prodcutCategory=ProdcutCategory::find($id);
        return view('produit.shwo',compact(['produit','prodcutCategory']));
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
        $produit= Produit::find($id);
        return view('produit.edit',compact('produit'));
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
        $produit->prix= $request->sexe;

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
        $produit= Produit::find($id);
        $produit->save();
        return view('produit.destroy',compact('produit'));
    }
}