<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabinets=Cabinet::all();
        return view('cabinets.index',compact('cabinets'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabinets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $cabinet=new Cabinet();
        $cabinet->id_users=$request->id_users;
        $cabinet->nom=$request->nom;
        $cabinet->email=$request->email;
        $cabinet->adresse=$request->adresse;
        $cabinet->téléphone_fix=$request->téléphone_fix;
        $cabinet->téléphone=$request->téléphone;
        $cabinet->description=$request->description;
        $cabinet->save();
        return redirect()->route('cabinets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cabinet  $cabinet
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $cabinet = Cabinet::find($id);
        return view('employes.show', compact('cabinet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabinet  $cabinet
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $cabinet = Cabinet::find($id);
        return view('cabinets.show', compact('cabinet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabinet  $cabinet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $cabinet = Cabinet::find($id);
        $cabinet->id_users=$request->id_users;
        $cabinet->nom=$request->nom;
        $cabinet->email=$request->email;
        $cabinet->adresse=$request->adresse;
        $cabinet->téléphone_fix=$request->téléphone_fix;
        $cabinet->téléphone=$request->téléphone;
        $cabinet->description=$request->description;
        $cabinet->save();
        return redirect()->route('cabinets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cabinet  $cabinet
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {

        $cabinet=Cabinet::find($id);
        $cabinet->delete();
        return redirect()->route('cabinets.index');

    }
}
