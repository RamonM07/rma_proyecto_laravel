@extends ('layouts.app')

@section('orchards')
    active
@endsection

@section('content')
<div class="row mx-5 justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-title mt-4">
              <h4 class="alert alert-primary text-center mx-4">Orchards</h4>
            </div>
            <form method="POST" action="{{url('orchards')}}">
            @csrf
              <div class="row mx-5 d-flex justify-content-center">
                <div class="col-3">
                  <label for="tipo de aguacate">Tipo de aguacate</label>
                    <select class="form-select @error('tipo de aguacate') is-invalid @enderror" id="tipo de aguacate"  name="orchard_id">
                      <option value="">Selecciona un valor</option>
                            <option value="">Aguacate Hass</option>
                            <option value="">Aguacate Fuerte</option>
                            <option value="">Aguacate Reed</option>
                            <option value="">Aguacate Zutano</option>
                            <option value="">Aguacate Bacon</option>
                    </select>
                        @error('tipo de aguacate')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                </div>

                    <div class="col-3">
                        <label for="tipo de tipografia">Tipo de tipografia</label>
                        <select class="form-select @error('tipo de tipografia') is-invalid @enderror" id="tipo de tipografia"  name="tipography_id">
                            <option value="">Selecciona un valor</option>
                            <option value="">Montañoso</option>
                            <option value="">Llano</option>
                            <option value="">Ondulado</option>
                            <option value="">Colinado</option>
                        </select>
                        @error('tipo de tipografia')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>

                    <div class="col-3">
                        <label for="tipo de solido">Tipo de solido</label>
                        <select class="form-select @error('tipo de solido') is-invalid @enderror" id="tipo de solido"  name="orchard_id">
                            <option value="">Selecciona un valor</option>
                            <option value="">1</option>
                        </select>
                        @error('tipo de solido')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>

                    <div class="col-3">
                        <label for="tipo de clima">Tipo de clima</label>
                        <select class="form-select @error('tipo de clima') is-invalid @enderror" id="tipo de clima"  name="orchard_id">
                            <option value="">Selecciona un valor</option>
                            <option value="">Calido</option>
                            <option value="">Templado</option>
                            <option value="">Frio</option>
                            <option value="">Lluvioso</option>
                        </select>
                        @error('tipo de clima')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>
                
            

                    <hr class = "my-3">

                    <div class="col-3">
                      <label for="nombre">Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Ingresa el nombre" name="name">
                        @error('nombre')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>
                    <div class="col-5">
                      <label for="imagen" class="form-label">Selecciona una imagen</label>
                      <input class="form-control @error('imagen') is-invalid @enderror" type="file" id="imagen">
                        @error('imagen')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>

                    <div class="col-4">
                        <label for="localización">Localizacion</label>
                        <input type="text" class="form-control @error('localización') is-invalid @enderror" id="localización" placeholder="Ingresa la localización" name="name">
                        @error('localización')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                      </div>

                    <hr class = "my-3">

                    <div class="col-3">
                        <label for="latitud">Latitud</label>
                        <input type="text" class="form-control @error('latitud') is-invalid @enderror" id="latitud" placeholder="Ingresa la latitud" name="name">
                        @error('latitud')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                      </div>

                    <div class="col-3">
                      <label for="longitud">Longitud</label>
                        <input type="text" class="form-control @error('longitud') is-invalid @enderror" id="longitud" placeholder="Ingresa la longitud" name="name">
                        
                        @error('longitud')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>

                    <div class="col-3">
                        
                        <label for="tamaño">Tamaño</label>
                        <input type="text" class="form-control @error('tamaño') is-invalid @enderror" id="tamaño" placeholder="Ingresa el tamaño" name="name">
                        @error('tamaño')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>
                    <div class="col-3">
                        <label for="superficie">Superficie</label>
                        <input type="text" class="form-control @error('superficie') is-invalid @enderror" id="superficie" placeholder="Ingrese la superficie" name="name">
                        @error('superficie')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                    </div>

                    <hr class = "my-3">

                    <div class="col-3">
                      <label for="estado-tittle">Estado</label>
                      <div class="estado">
                        <input class="estado-input @error('estado') is-invalid @enderror" type="radio" name="flexRadioDefault" id="estado">
                        <label class="estado-label" for="flexRadioDefault1">
                          Activo
                        </label>
                        @error('estado')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                      </div>
                      <div class="estado">
                        <input class="estado-input @error('estado') is-invalid @enderror" type="radio" name="flexRadioDefault" id="estado">
                        <label class="estado-label" for="flexRadioDefault2">
                          Inactivo
                        </label>
                        @error('estado')
							          <div class = "invalid-feedback">{{$message}}</div>
						            @enderror
                        </div>
                        
                      </div>

                    <hr class = "my-3">

                    <div class="col-2">
                    </div>

                    <div class="col-3">
                    <a href="{{url('orchards/index')}}" class="btn btn-dark mb-4 text-white"data-toggle="tooltip" title="Cancelar registro"><span class="icon-pen"> Cancelar</span></a>
                    </div>

                    <div class="col-3">
                        <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Guardar cambios">Guardar</span></button>
                    </div>
              </div>
            </form>
        </div>
    </div>
  </div>
@endsection