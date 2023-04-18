<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Paiement;
use App\Models\Patient;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paiments=Paiement::all();
        return view('paiments.index',compact('paiments'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $patients=Patient::all();
        $medecins=Medecin::all();
        return view('paiments.create',compact(['patients','medecins']));
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
        $paiement=new Paiement();

        $paiement->montant=$request->montant;
        $paiement->date_paiement=$request->date_paiement;

        $paiement->id_medecin=$request->id_medecin;
        $paiement->id_patient=$request->id_patient;

        $paiement->save();
        return redirect()->route('paiments.index');
    }

    /*
     * Display the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        //
        $patients=Patient::find($id);
        $medecins=Medecin::find($id);
        $paiments=Paiement::find($id);
        return view('paiments.shwo',compact(['paiements','patient','medecin']));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(String $id)
    {
        //
        $patients=Patient::find($id);
        $medecins=Medecin::find();
        $paiments=Paiement::all();

        return view('paiments.edit',compact(['patients','medecins','paiments']));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, String $id)
    {
        //
        $paiement=Paiement::find($id); 
        $paiement->montant=$request->montant;
        $paiement->date_paiement=$request->date_paiement;

        $paiement->id_medecin=$request->id_medecin;
        $paiement->id_patient=$request->id_patient;

        $paiement->save();
        return redirect()->route('paiments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {
        //
        $paiments=Paiement::find($id);
        $paiments->delete();
        return redirect()->route('paiments.index');
    }
}