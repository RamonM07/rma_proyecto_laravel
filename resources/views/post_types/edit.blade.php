@extends ("layouts.app")

@section("reaction_type")
	active
@endsection

@section("content")
	<div class ="row">
		<div class="col-8 offset-2">
			<div class="card-body">
				<h5 class="card-title alert alert-success">Modificar publicación</h5>
				<form method="POST" action = "{{route('tipos_publicaciones.update', $tipos_publicacione->id)}}">
					@csrf
					@method ("PUT")
					<div class="mb-3">
						<label for="id" class = "form-label">Reaccion</label>
						<input type="text" class="form-control" id="post" name= "description" value="{{$tipos_publicacione->description}}">
					</div>
					<div class = "row">
						<div class = "col -6">
							<a href = "{{url('tipos_publicaciones')}}" class = "btn btn-success card-link">Cancelar</a>
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