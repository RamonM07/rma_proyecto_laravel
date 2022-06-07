<?php

namespace App\Http\Controllers;

use App\Models\PostType;
use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = PostType::all();
        return view("post_types.index", compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('post_types.create');
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
        $request->validate([
            "description"=>"required | max:25|min:3|unique:post_types",],
            [],["description"=>"publicación"]);
        PostType::create(["description"=>$request->description]);
        return redirect()->route("tipos_publicaciones.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function show(PostType $postType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function edit(PostType $tipos_publicacione)
    {
        //
        return view ("post_types.edit", compact ("tipos_publicacione"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostType $tipos_publicacione)
    {
        //
        $request->validate([
            "description"=>"required | max:25|min:3|unique:post_types",],
            [],["description"=>"publicación"]);
        $tipos_publicacione->update(["description"=>$request->description]);
        return redirect()->route("tipos_publicaciones.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostType $tipos_publicacione)
    {
        //
        $tipos_publicacione->delete();
        return redirect()->route("tipos_publicaciones.index");
    }
}
