@extends ('layouts.app')

@section("reaction_types")
    active
@endsection

@section('content')
    <h1 class="alert alert-primary text-center">Reacciones</h1>
    <div class="row mt-5">
                <div class = "col-6 d-flex justify-content-center" style="padding: 2em">
                    <a href = "{{url("reaction_types/create")}}" class = "btn btn-success">Nueva reaccion</a>
                </div>
    </div>
    <div class = "container bg-info">
        <div class="row">
            <div class="col-3">
                <figure class="figure">
                    <img src="{{asset("/images/not_face.jpg")}}" alt="login" class="figure-img img-fluid" style= "padding: 3em;width:100%">
                </figure>
            </div>
           <div class ="col-6" >
               <table class = "table table-dark table-striped text-center">
                    <thead >
                    <tr>
                        <th scope = "row">#</th>
                        <th scope = "col">Reaccion</th>
                        <th scope = "col">Acciones</th>
                    </tr>
                    </thead >
                    @foreach($datos as $reaction)
                        <tbody class = "table-danger">

                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$reaction->description}}</td>
                            <td>
                                <form method = "POST" action = "{{route("reacciones.destroy", $reaction->id)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button type = "submit" class = "btn btn-danger">
                                        Eliminar
                                    </button>
                                </form>
                                
                            </td>
                            <td>
                                <a href =  "{{route("reacciones.edit", $reaction->id)}}" type = "submit" class = "btn btn-success">Editar</a>
                            </td>
                        </th>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col-3">
                <figure class="figure">
                    <img src="{{asset("/images/142.jpg")}}" alt="login" class="figure-img img-fluid" style= "padding: 3em;width:100%">
                </figure>
            </div>
        </div>
    </div>
@endsection