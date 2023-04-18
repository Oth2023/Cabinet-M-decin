<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Medecin;
use App\Models\Patient;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultations=Consultation::all();
        return view('consultations.index',compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('consultations.create',compact(['medecins','patients']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consultation=new Consultation();
        $consultation->id_medecin= $request->id_medecin;
        $consultation->id_patient= $request->id_patient;
        $consultation->date_consultation= $request->date_consultation;
        $consultation->description= $request->description;
        $consultation->heure= $request->heure;
        $consultation->save();
        return redirect()->route('consultations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $medecins = Medecin::find($id);
        $patients = Patient::find($id);
        $consultations=Consultation::find($id);
        return view('consultations.show',compact(['consultations','medecins','patients']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $consultation=Consultation::find($id);
        $consultation->id_medecin= $request->id_medecin;
        $consultation->id_patient= $request->id_patient;
        $consultation->date_consultation= $request->date_consultation;
        $consultation->description= $request->description;
        $consultation->heure= $request->heure;
        $consultation->save();
        return redirect()->route('consultations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $consultations=Consultation::find($id);
        $consultations->delete();
        return redirect()->route('consultations.index');
    }
}
