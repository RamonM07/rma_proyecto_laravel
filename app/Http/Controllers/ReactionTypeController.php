<?php

namespace App\Http\Controllers;

use App\Models\Reaction_Type;
use Illuminate\Http\Request;

class ReactionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = Reaction_Type::all();
        return view("reactions.index", compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("reactions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "description"=>"required | max:25|min:3|unique:reaction__types",],
            [],["description"=>"reacción"]);
        Reaction_Type::create(["description"=>$request->description]);
        return redirect()->route("tipos_reacciones.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reaction_Type  $reaction_Type
     * @return \Illuminate\Http\Response
     */
    public function show(Reaction_Type $reaction_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reaction_Type  $reaction_Type
     * @return \Illuminate\Http\Response
     */
    public function edit(Reaction_Type $tipos_reaccione)
    {
        //
        return view ("reactions.edit", compact ("tipos_reaccione"));
        //$reacccion=Reaction_Type::findOrFail($id);
        //return view("reactions.update", compact ('reaccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reaction_Type  $reaction_Type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reaction_Type $tipos_reaccione)
    {
        //
        $tipos_reaccione->update(["description"=>$request->description]);
        return redirect()->route("tipos_reacciones.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reaction_Type  $reaction_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reaction_Type $tipos_reaccione)
    {
        $tipos_reaccione->delete();
        return redirect()->route("tipos_reacciones.index");
    }
}
 