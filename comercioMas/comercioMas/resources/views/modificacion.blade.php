@extends('plantillas.plantContact')


@section('Title','Usuario  '.$mod->name)
    
@section('usuarios')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <h1>Mi nombre es {{$mod->nombre}}</h1>

    <a href="{{route('mostrar.edit', $mod)}}">Editar info</a>
    
</body>
</html>

@endsection