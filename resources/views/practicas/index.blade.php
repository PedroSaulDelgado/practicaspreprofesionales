@extends('layouts.plantilla')

@section('title','Practicas PreProfesionales' )

@section('content')
    <h1>Listado de Practicas</h1>

    <a href="{{route('practicas.create')}}">Nuevo Registro</a>
    <ul>
        @foreach ($practicas as $practica)
            <li>
                 <a href="{{route('practicas.show',$practica->id)}}"> {{$practica->titulo}}</a>
            </li>
        @endforeach
    </ul>
    {{$practicas->links()}}
@endsection
