<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use App\Models\ChargeP;
use App\Models\Paiement;
use Illuminate\Http\Request;

class ChargePController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chargep=ChargeP::all();
        return view('chargep.index',compact('chargep'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $paiement=Paiement::all();
         $cabinet=Cabinet::all();
        return view('chargep.create',compact('paiement','cabinet'));
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
        $chargep=new ChargeP();

        $chargep->date=$request->date;
        $chargep->montant=$request->montant;
        $chargep->description=$request->description;

        $chargep->id_cabinet=$request->id_cabinet;
        $chargep->id_paiement=$request->id_paiement;

        $chargep->save();
        return redirect()->route('chargep.index');
    }

    /*
     * Display the specified resource.
     *
     * @param  \App\Models\ChargeP  $chargeP
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        //
        $paiement=Paiement::find($id);
        $cabinet=Cabinet::find($id);
        return view('chargep.shwo',compact(['paiement','cabinet']));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChargeP  $chargeP
     * @return \Illuminate\Http\Response
     */
    public function edit(String $id)
    {
        //
        $chargep= ChargeP::find($id);
        return view('chargep.edit',compact('chargep'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChargeP  $chargeP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, String $id)
    {
        //
        $chargep= ChargeP::find($id);

        $chargep->date=$request->date;
        $chargep->montant=$request->montant;
        $chargep->description=$request->description;

        $chargep->id_cabinet=$request->id_cabinet;
        $chargep->id_paiement=$request->id_paiement;

        $chargep->save();
        return redirect()->route('chargep.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChargeP  $chargeP
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
        $chargep= ChargeP::find($id);
        $chargep->save();
        return view('chargep.destroy',compact('chargep'));
    }
}