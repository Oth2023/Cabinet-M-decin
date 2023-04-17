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
        $paiement=Paiement::all();
        return view('paiement.index',compact('paiement'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $patient=Patient::all();
        $medecin=Medecin::all();
        return view('paiement.create',compact('patient','medecin'));
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
        return redirect()->route('paiement.index');
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
        $patient=Patient::find($id);
        $medecin=Medecin::find($id);
        return view('paiement.shwo',compact(['patient','medecin']));
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
        $patient=Patient::find($id);
        $medecin=Medecin::find($id);

        return view('paiement.edit',compact(['patient','medecin']));
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
        return redirect()->route('paiement.index');
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
        $paiement=Paiement::find($id);
        $paiement->delete();
        return redirect()->route('paiement.index');
    }
}