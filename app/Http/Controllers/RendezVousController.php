<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rendezVous=RendezVous::all();
        return view('rendezVous.index',compact('rendezVous'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medecins=Medecin::all();
        return view('rendezVous.create',compact('medecins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rendezVous=new RendezVous();
        $rendezVous->id_medecin=$request->id_medecin;
        $rendezVous->date_rendezVous=$request->date_rendezVous;
        $rendezVous->heure=$request->heure;
        $rendezVous->motif=$request->motif;
        $rendezVous->type_rendezVous=$request->type_rendezVous;
        $rendezVous->save();
        return redirect()->route('rendezVous.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
    $rendezVous=RendezVous::find($id);
    $medecins=Medecin::find($rendezVous->id_medecin);
    return view('rendezVous.show', compact(['rendezVous','medecins']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $rendezVous=RendezVous::find($id);
    $medecins=Medecin::all();
    return view('rendezVous.edit', compact(['rendezVous','medecins']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $rendezVous=RendezVous::find($id);
        $rendezVous->id_medecin=$request->id_medecin;
        $rendezVous->date_rendezVous=$request->date_rendezVous;
        $rendezVous->heure=$request->heure;
        $rendezVous->motif=$request->motif;
        $rendezVous->type_rendezVous=$request->type_rendezVous;
        $rendezVous->save();
        return redirect()->route('rendezVous.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $rendezVous=RendezVous::find($id);
$rendezVous->delete();
        return redirect()->route('rendezVous.index');

    }
}
