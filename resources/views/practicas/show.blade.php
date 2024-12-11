@extends('layouts.plantilla')

@section('title','Practica: '.$practica->titulo )

@section('content')
    <h1>Se encuentra en el registro: {{$practica->titulo}}</h1>
    <a href="{{route('practicas.index')}}"> Volver a Practicas</a>
    <br>
    <a href="{{route('practicas.edit',$practica)}}"> Editar Registro</a>
    <p><strong>  Código : {{$practica->codigo}} </strong></p>

    <form action="{{route('practicas.destroy',$practica)}}" method="POST" >
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>

    </form>
@endsection