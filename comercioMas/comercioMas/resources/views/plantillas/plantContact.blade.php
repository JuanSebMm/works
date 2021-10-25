<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
    {{-- Inicio de links --}}
    <link  href="{{ asset('css/count.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    {{-- Fin de links --}}

</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Logotipo</h1>
			</div>
			<nav class="menu">
				<a href="{{route('inicio.inicio')}}">Inicio</a>
				<a href="#">Nosotros</a>
				<a href="#">Blog</a>
				<a href="{{route('contac.contac')}}">Contacto</a>


        
				{{-- Inicio modal --}}
        <input type="checkbox" id="btn-modal">
        <label for="btn-modal" class="lbl-modal">Crear cuenta</label>
        <div class="modal">
          <div class="contenedor">
            <div class="con-tres">
              <div class="cont">
                <a  class="links-form_1" href="{{route('register.register')}}">Crea tu cuenta</a>
      
                <a class="links-form" href="Registro">Registra tu Negocio</a>
              </div>
            </div>

          </div>
        </div>
        {{-- Fin de modal --}}

				
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Portafolio</a>
			<a href="#">Servicios</a>
			<a href="#">Suscribirse</a>
			<a href="#">Facebook</a>
			<a href="#">Youtube</a>
			<a href="#">Instagram</a>
			
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

@yield('cabecera')
@yield('Registro-user')
@yield('usuarios')
@yield('contacto')

<div class="links-pdp">
    <hr>
    <div class="contenedor03-pdp">
       <ul>
           <li>
             <a id="Mas-info" href="#"><h3>Mas Informacion</h3></a>
           </li>
           <li><a href="">Terminos de uso</a></li>
           <li><a href="">Soluciones</a></li>
           <li><a href="">Reportar Problema</a></li>
       </ul>

       <ul>
           <li>
             <a id="Mas-info" href="#"><h3>Acerca de Nosotros</h3></a>
           </li>
           <li><a href="">Politica de privacidad</a></li>
           <li><a href="">Contacto</a></li>
           <li><a href="">Politica de cookies</a></li>
           <li><a href="">Manejo de Informacion</a></li>
           
       </ul>

       <ul>
           <li>
             <a id="Mas-info" href="#"><h3>Utilidades</h3></a>
           </li>
           <li><a href="">Opiniones de usuarios</a></li>
           <li><a href="">Como registrarse</a></li>
           <li><a href="">Como publicitar tu Negocio</a></li>
		   
       </ul>


    </div>
    <hr>
</div>

<footer class="footer">
    <h3>Comercio Mas</h3>
</footer>
    
</body>
</html>