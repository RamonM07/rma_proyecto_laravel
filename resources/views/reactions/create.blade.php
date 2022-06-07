@extends ("layouts.app")

@section("reaction_type")
	active
@endsection

@section("content")
<link rel = "stylesheet" href="style.css">
<div class ="row">
		<div class="col-8 offset-2">
			<div class="card-body">
				<h5 class="card-title alert alert-success">Crear reaccion</h5>
				<form method="POST" action = "{{url('tipos_reacciones')}}">
					@csrf
					<div class="mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Campo Obligatorio">
						<label for="id" class = "form-label">Escribe la reaccion que deseas añadir</label>
						<input type="text" class="form-control @error('description') is-invalid @enderror" 
						id="reaction" name= "description" value = "{{old('description')}}">
							@error('description')
							<div class = "invalid-feedback">{{$message}}</div>
							@enderror
					</div>
					<div class = "row">
						<div class = "col -6">
							<a href = "{{url('tipos_reacciones')}}" class = "btn btn-success card-link">Cancelar</a>
						</div>
						<div class = "col -6">
						<button type="submit" class="btn btn-primary">Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>



@endsection