@extends ("layouts.app")

@section("post_type")
	active
@endsection

@section("content")
<body style="background-color:#64748c">
	<div class ="row">
		<div class="col-8 offset-2">
			<div class="card-body"style="background-color:#d8f8e1;">
				<h5 class="card-title alert alert-danger  text-center text-black text-bold">Crear publicacion</h5>
				<form method="POST" action = "{{url('tipos_publicaciones')}}">
					@csrf
					<div class="mb-3 data-bs-toggle="tooltip" data-bs-placement="top" title="Campo Obligatorio">
						<label for="id" class = "form-label">Escribe la publicacion que deseas añadir</label>
						<input type="text" class="form-control @error('description') is-invalid @enderror" 
						id="reaction" name= "description" value = "{{old('description')}}">
							@error('description')
							<div class = "invalid-feedback">{{$message}}</div>
							@enderror
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
</body>
@endsection