@extends ('layouts.app')

@section('post_type')
    active
@endsection

@section('content')

<link rel="stylesheet"href="{{asset("fonts/style.css")}}">
<div class="container">
  <div class="row">
    <div class="col-12">
        <h1 class="alert alert-success text-center">Tipos de Publicaciones</h1>
    </div>
    <div class="col-6" style="padding: 1em;">
        <a href = "{{url("tipos_publicaciones/create")}}" class = "btn btn-success" data-bs-toggle="tooltip" data-bs-placement="left" title="Nueva publicación">
        <span class="icon-plus2"></span></a>
    </div>
    <div class="col-6">
    </div>
  </div>
  <div class="row">
    <div class="col">
        <table class = "table table-dark table-striped text-center">
            <thead >
                <tr>
                    <th scope = "row">#</th>
                    <th scope = "col">Publicaciones</th>
                    <th scope = "col">Acciones</th>
                    <th scope = "col"></th>
                </tr>
            </thead >
            @foreach($datos as $post)

            <tbody class = "table-danger">
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$post->description}}</td>
                    <td>
                        <form method = "POST" action = "{{route("tipos_publicaciones.destroy", $post->id)}}">
                    @csrf
                    @method("DELETE")
                        <button type = "submit" class = "btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="left" title="Eliminar"> <span class="icon-trashcan"></span></button>
                        </form>
                    </td>
                    <td>
                        <a href =  "{{route( 'tipos_publicaciones.edit', $post->id)}}" type = "submit" class = "btn btn-success" 
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Editar"> <span class="icon-mode_edit"></span></a>
                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
    <div class="col">
        <figure class="figure">
            <img src="{{asset('/images/post2.jpg')}}" alt="login" class="figure-img img-fluid" style= "width:100%">
        </figure>
    </div>
  </div>
</div>

@endsection