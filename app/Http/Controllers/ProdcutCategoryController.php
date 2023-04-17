<?php

namespace App\Http\Controllers;

use App\Models\ProdcutCategory;
use Illuminate\Http\Request;

class ProdcutCategoryController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prodcutCategory = ProdcutCategory::all();
        return view('prodcutCategory.index');
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('prodcutCategory.create', compact('prodcutCategory'));
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
        $prodcutCategory=new ProdcutCategory();
        $prodcutCategory->nom= $request->nom;
        $prodcutCategory->save();
        return redirect()->route('prodcutCategory.index');
    }

    /*
     * Display the specified resource.
     *
     * @param  \App\Models\ProdcutCategory  $prodcutCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProdcutCategory $prodcutCategory)
    {
        //
        $prodcutCategory = ProdcutCategory::find($id);
        return view('prodcutCategory.show', compact('prodcutCategory'));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdcutCategory  $prodcutCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdcutCategory $prodcutCategory)
    {
        //
        $prodcutCategory= ProdcutCategory::find($id);
        return view('prodcutCategory.edit',compact('prodcutCategory'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdcutCategory  $prodcutCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        $prodcutCategory= ProdcutCategory::find($id);
        $prodcutCategory->nom= $request->nom;
        $prodcutCategory->save();
        return redirect()->route('prodcutCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdcutCategory  $prodcutCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {
        //
        $prodcutCategory= ProdcutCategory::find($id);
        $prodcutCategory->save();
        return view('prodcutCategory.destroy',compact('prodcutCategory'));
    }
}