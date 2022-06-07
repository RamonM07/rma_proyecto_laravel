@extends ('layouts.app')

@section('orchards')
    active
@endsection

@section('content')
<div class="row mx-5 justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-title mt-4">
                <h4 class="alert alert-warning text-center mx-4">Nuevo Orchard</h4>
            </div>

            <form class = "ro g-3 needs validation" novalidate>
                <div class="row">
                <div class="col-9">
                    <figure class="figure">
                        <img src="{{asset('images/undraw_crypto_flowers_re_dyqo.svg')}}" alt="ethe" class="figure-img img-fluid" style="width:200%">
                    </figure>
                    </div>
                    <div class="col-3">
                        <a href="{{url('orchards/create')}}" class="btn btn-dark mb-4 text-white"data-toggle="tooltip" title="Insertar nueva reaccion"><span class="icon-pen"> Nuevo</span></a>

                    </div>

                </div>

            </form>
        </div>   
    </div>
</div>

@endsection
