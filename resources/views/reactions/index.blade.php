@extends ('layouts.app')

@section("reaction_type")
    active
@endsection

@section('content')
    <h1 class="alert alert-primary text-center">Reacciones de Facebook</h1>

    <div class = "container bg-info">
        <div class="row">
            <div class="col">
                <figure class="figure">
                    <img src="{{asset("/images/login.svg")}}" alt="login" class="figure-img img-fluid" style= "padding: 3em;width:100%">
                </figure>
            </div>
            <div class="col">
                <table class = "table table-dark table-striped text-center">
                    <thead >
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Reaccion</th>
                    </tr>
                    </thead >
                    @foreach($datos as $reaction)
                        <tbody class = "table-danger">

                        <tr>
                            <th scope="row">{{$reaction->id}}</th>
                            <td>{{$reaction->description}}</td>
                        </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col">
                <figure class="figure">
                    <img src="{{asset("/images/login.svg")}}" alt="login" class="figure-img img-fluid" style= "padding: 3em;width:100%">
                </figure>
            </div>
        </div>
    </div>
@endsection
