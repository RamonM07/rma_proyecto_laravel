@extends ('layouts.app')

@section("reaction_type")
    active
@endsection

@section('content')
<link rel = "stylesheet" href="style.css">
<link rel="stylesheet"href="{{asset("fonts/style.css")}}">
<link rel="stylesheet"href="{{asset("reactions/style.css")}}">
<div class="container">
  <div class="row">
    <div class="col-12">
        <h1 class="alert alert-danger text-center">Tipos de reacciones</h1>
    </div>
    <div class = "col-6">
    </div>
    <div class = "col-6 d-flex" style="padding: 1em">
        <a href = "{{url("tipos_reacciones/create")}}" class = "btn btn-success " data-bs-toggle="tooltip" data-bs-placement="top" title="Nueva reaccion"><i class="icon-plus2"></i></a>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
        <figure class="figure">
                    <img src="{{asset("/images/142.jpg")}}" alt="login" class="figure-img img-fluid" style= "width:100%">
                </figure>
    </div>
    <div class="col-6">
        <table class = "table table-dark table-striped text-center">
            <thead >
                <tr>
                    <th scope = "row">#</th>
                    <th scope = "col">Reaccion</th>
                    <th scope = "col">Acciones</th>
                    <th scope = "col"></th>
                </tr>
            </thead >
            @foreach($datos as $reaction)
            <tbody class = "table-danger">
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$reaction->description}}</td>
                    <td>
                        <form method = "POST" action = "{{route("tipos_reacciones.destroy", $reaction->id)}}">
                            @csrf
                            @method("DELETE")
                            <button type = "submit" class = "btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"> 
                                <i class="icon-trashcan"></i></button>
                        </form>
                                
                    </td>
                    <td>
                        <a href =  "{{route('tipos_reacciones.edit', $reaction->id)}}" type = "submit" class = "btn btn-success" data-bs-toggle="tooltip" data-bs-placement="left" title="Editar"> 
                            <i class="icon-mode_edit"></i></a>
                    </td>
                </tr>

            </tbody>
                    @endforeach
        </table>
    </div>
  </div>
</div>
@endsection
