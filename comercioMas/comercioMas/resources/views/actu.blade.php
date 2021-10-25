@extends('plantillas.plantContact')
@section('Title','Actualizar informacion')
@section('Registro-user')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Inicio de estilos --}}
    <link  href="{{ asset('css/reg-formu.css')}}" rel="stylesheet">

    <link  href="{{ asset('css/normalize.css')}}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Fin de estilos --}}
</head>
<body>
	<main>
		
		<form action="{{route('mostrar.actualizar',$most)}}" method="POST" class="formulario" id="formulario">

			@csrf
            @method('put')

			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input value="{{$most->nm_usuario}}" type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuario123" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input value="{{$most->nombre}}" type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre Usuario" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			{{-- Grupo:Apellido --}}

			<div class="formulario__grupo" id="grupo__apellido">
				<label for="apellido" class="formulario__label">Apellido</label>
				<div class="formulario__grupo-input">
					<input value="{{$most->apellido}}" type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Apellidos(s)" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input value="{{$most->correo}}" type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>


			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input value="{{$most->telefono}}" type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4491234567" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

			{{-- Grupo:Direccion --}}

			<div class="formulario__grupo" id="grupo__direccion">
				<label for="direccion" class="formulario__label">Direccion de Residencia</label>
				<div class="formulario__grupo-input">
					<input value="{{$most->direccion}}" type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Lugar de Residencia" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
			</div>





			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input value="{{$most->password}}" type="password" class="formulario__input" name="password" id="password" placeholder="contraseña" min="4" required>
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
			</div>



			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Actualizar</button>
			</div>
		</form>
	</main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.js"></script>
<script src="{{ asset('js/form.js')}}"></script>
</html>

@endsection
