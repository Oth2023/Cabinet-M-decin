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
        $patients=Patient::all();
        return view('patients.index',compact('patients')); 
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('patients.create');
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
        $patient->email=$request->email;
        $patient->date_naissance=$request->date_naissance;
        $patient->sexe=$request->sexe;
        $patient->adresse=$request->adresse;
        $patient->ville=$request->ville;
        $patient->téléphone=$request->téléphone;
        $patient->antecedents_medicaux=$request->antecedents_medicaux;
        $patient->allergies=$request->allergies;
        $patient->save();
        return redirect()->route('patients.index');
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
        $patients= Patient::find($id);
        return view('patients.show', compact('patients'));
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
        $patients = Patient::find($id);
        return view('patients.edit', compact('patients'));
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
        $patient->sexe=$request->sexe;
        $patient->adresse=$request->adresse;
        $patient->ville=$request->ville;
        $patient->téléphone=$request->téléphone;
        $patient->antecedents_medicaux=$request->antecedents_medicaux;
        $patient->allergies=$request->allergies;
        $patient->save();
        return redirect()->route('patients.index');
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
        $patients=Patient::find($id);
        $patients->delete();
        return redirect()->route('patients.index');
    }
}