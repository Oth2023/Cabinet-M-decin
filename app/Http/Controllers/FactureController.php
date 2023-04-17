<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Paiement;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures=Facture::all();
        return view('factures.index',compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paiments=Paiement::all();
        return view('factures.create',compact('paiments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factures=new Facture();
        $factures->reff=$request->reff;
        $factures->date_facturation=$request->date_facturation;
        $factures->montant_total=$request->montant_total;
        $factures->id_paiement=$request->id_paiement;
        $factures->save();
        return redirect()->route('factures.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $factures=Facture::find($id);
        $paiments=Paiement::find($id);
        return view('factures.shwo',compact(['factures','paiments']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        
        $factures=Facture::find($id);
        $paiments=Paiement::find($id);

        return view('factures.edit',compact(['factures','paiments']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $factures=Facture::find($id);
        $factures->reff=$request->reff;
        $factures->date_facturation=$request->date_facturation;
        $factures->montant_total=$request->montant_total;
        $factures->id_paiement=$request->id_paiement;
        $factures->save();
        return redirect()->route('factures.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $factures=Facture::find($id);
        $factures->delete();
        return redirect()->route('factures.index');

    }
}
