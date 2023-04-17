<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patient=Patient::all();
        return view('patient.index',compact('patient')); 
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cabinets.create');
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
        $patient=new Patient();
        $patient->nom=$request->nom;
        $patient->prenom=$request->prenom;
        $patient->date_naissance=$request->date_naissance;
        $patient->sex=$request->sex;
        $patient->adresse=$request->adresse;
        $patient->ville=$request->ville;
        $patient->telephone=$request->telephone;
        $patient->antecedents_medicaux=$request->antecedents_medicaux;
        $patient->allergies=$request->allergies;
        $patient->save();
        return redirect()->route('patient.index');
    }

    /*
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        //
        $patient = Patient::find($id);
        return view('patient.show', compact('patient'));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(String $id)
    {
        //
        $patient = Patient::find($id);
        return view('patient.edit', compact('patient'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, String $id)
    {
        //
        $patient = Patient::find($id);
        $patient->nom=$request->nom;
        $patient->prenom=$request->prenom;
        $patient->date_naissance=$request->date_naissance;
        $patient->sex=$request->sex;
        $patient->adresse=$request->adresse;
        $patient->ville=$request->ville;
        $patient->telephone=$request->telephone;
        $patient->antecedents_medicaux=$request->antecedents_medicaux;
        $patient->allergies=$request->allergies;
        $patient->save();
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
        $patient=Patient::find($id);
        $patient->delete();
        return redirect()->route('patient.index');
    }
}