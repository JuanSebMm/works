@extends('plantillas.plantContact')
@section('Title','ComercioMas || Inicio')
@section('cabecera')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- Inicio de links --}}

    <link  href="{{ asset('css/cuerpos.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet">

{{-- fin de links --}}
</head>

<body>
{{-- inicio de cabecera --}}
<header>
<div id="inicio" class="Comercio-titulo">
    <span class="titulo">
        Les Ofrecemos la mejor publicidad de Confianza
    </span>
    <h2 class="Comercio-subtitulo">
        Busca lo mas recomendado del municio de Soacha
    </h2>
</div>

<div class="wave" style="height: 60px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C115.97,225.48 353.55,-47.86 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #F9F9F9;"></path></svg>
</div>

</header>
{{-- fin de cabecera --}}

{{-- Inicio d cuerpo --}}
<div class="pres">
    <div class="titulo">
        <h5 class="tit-pres">
            Locales que<span> Podrian interesarte</span>
        </h5>
    </div>
    <div class="tar-pres">
        
        <ul>
            <a href="{{route('register.register')}}">Registrese</a>
            @foreach ($users as $admin)
                <li>
                    <a href="{{route('mostrar.modificar',$admin->id)}}">{{$admin->id}}</a>
                </li>
            @endforeach
        </ul>
        {{$users->links()}}
    </div>
</div>

{{-- Fin de cuerpo --}}
    
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.js" integrity="sha512-ia48mJh6IXv6baAI07Ib/crgsG/MD4tbSnOndWLo3GSExMhYsn1xPbni40VamCaXWk79t1dxi/JahsqOFazkew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
  
@endsection
