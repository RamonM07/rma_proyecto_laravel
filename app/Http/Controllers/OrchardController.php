<?php

namespace App\Http\Controllers;

use App\Models\Orchard;
use Illuminate\Http\Request;

class OrchardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Orchard::all();
        return view("orchards.index", compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orchard = Orchard::all();
        return view("orchards.create", compact('orchard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipo de aguacate' => 'required',
            'tipo de tipografia' => 'required',
            'tipo de solido' => 'required',
            'tipo de clima' => 'required',
            'nombre' => 'required |max:30|min:3',
            'imagen' => 'required',
            'localización' => 'required |max:30|min:3',
            'latitud' => 'required |max:30|min:3',
            'longitud' => 'required|max:30|min:3',
            'superficie' => 'required|max:30|min:3',
            'tamaño' => 'required|max:30|min:3',
            'estado' => 'required',
        ]);
        return redirect()->route("orchards.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orchard  $orchard
     * @return \Illuminate\Http\Response
     */
    public function show(Orchard $orchard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orchard  $orchard
     * @return \Illuminate\Http\Response
     */
    public function edit(Orchard $orchard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orchard  $orchard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orchard $orchard)
    {
        //
        return redirect()->route("orchards.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orchard  $orchard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orchard $orchard)
    {
        //
    }
}
