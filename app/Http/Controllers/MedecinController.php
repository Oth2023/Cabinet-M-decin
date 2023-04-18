<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecins = Medecin::get();

        return view('medecins.index', compact('medecins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        $cabinets = Cabinet::all();
        return view('medecins.create', compact('cabinets'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medecin=new Medecin();
        $medecin->id_cabinet= $request->id_cabinet;
        $medecin->nom= $request->nom;
        $medecin->email=$request->email;
        $medecin->sexe= $request->sexe;
        $medecin->téléphone= $request->téléphone;
        $medecin->adresse= $request->adresse;
        $medecin->date_naissance= $request->date_naissance;
        $medecin->specialite= $request->specialite;
        $medecin->save();
        return redirect()->route('medecins.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $medecins = Medecin::find($id);
        $cabinets=Cabinet::find($medecins->id_cabinet);
        return view('medecins.show', compact(['medecins','cabinets']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $medecins= Medecin::find($id);
        $cabinets=Cabinet::all();
return view('medecins.edit',compact(['medecins','cabinets']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $medecin= Medecin::find($id);
        $medecin->id_cabinet= $request->id_cabinet;
        $medecin->nom= $request->nom;
        $medecin->email=$request->email;

        $medecin->sexe= $request->sexe;
        $medecin->téléphone= $request->téléphone;
        $medecin->adresse= $request->adresse;
        $medecin->date_naissance= $request->date_naissance;
        $medecin->specialite= $request->specialite;
        $medecin->save();
        return redirect()->route('medecins.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $medecin= Medecin::find($id);
        $medecin->delete();
        return view('medecins.destroy',compact('medecin'));

    }
}
