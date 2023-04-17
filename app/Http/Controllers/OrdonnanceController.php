<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Ordonnance;
use App\Models\Patient;
use Illuminate\Http\Request;

class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordonnances=Ordonnance::all();
        return view('ordonnances.index',compact('ordonnances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $medecins = Medecin::all();
        $patients = Patient::all();
       
        return view('ordonnances.create',compact(['medecins','patients']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordonnance=new Ordonnance();
        $ordonnance->id_medecin= $request->id_medecin;
        $ordonnance->id_patient= $request->id_patient;
        $ordonnance->date_ordonnance= $request->date_ordonnance;
        $ordonnance->description= $request->description;
        $ordonnance->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $medecins = Medecin::find($id);
        $patients = Patient::find($id);
        $ordonnance=Ordonnance::find($id);
        return view('ordonnances.create',compact(['ordonnance','medecins','patients']));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $medecins = Medecin::find($id);
        $patients = Patient::find($id);
        $ordonnance=Ordonnance::find($id);

        return view('ordonnances.create',compact(['ordonnance','medecins','patients']));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $ordonnance=Ordonnance::find($id);
        $ordonnance->id_medecin= $request->id_medecin;
        $ordonnance->id_patient= $request->id_patient;
        $ordonnance->date_ordonnance= $request->date_ordonnance;
        $ordonnance->description= $request->description;
        $ordonnance->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $ordonnance=Ordonnance::find($id);
        $ordonnance->delete();
        return redirect()->route('ordonnances.index');
    }
}
