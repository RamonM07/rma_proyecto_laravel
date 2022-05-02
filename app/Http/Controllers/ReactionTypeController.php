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
        $datos=Reaction_Type::all();
        return view("reactions.index", compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Reaction_Type $reaction_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reaction_Type  $reaction_Type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reaction_Type $reaction_Type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reaction_Type  $reaction_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reaction_Type $reaction_Type)
    {
        //
    }
}
