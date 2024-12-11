@extends('layouts.plantilla')

@section('title','Editar Registro' )

@section('content')

    <h2>Editar Registro</h2>
    
    <form action="{{ route('practicas.update',$practica) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label><br>
            <input type="number" class="form-control" id="codigo" name="codigo" value = "{{$practica->codigo}}">
        </div>
        @error('codigo')        
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <div class="mb-3">
            <label for="idestudiante" class="form-label">Estudiante</label><br>
            <input type="number" class="form-control" id="idestudiante" name="idestudiante" value = "{{$practica->idestudiante}}">
        </div>
        @error('idestudiante')        
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <div class="mb-3">
            <label for="iddocente" class="form-label">Docente</label><br>
            <input type="number" class="form-control" id="iddocente" name="iddocente" value = "{{$practica->iddocente}}">
        </div>
        @error('iddocente')        
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <div class="mb-3">
            <label for="idempresa" class="form-label">Empresa</label><br>
            <input type="number" class="form-control" id="idempresa" name="idempresa" value = "{{$practica->idempresa}}">
        </div>
        @error('idempresa')        
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <div class="mb-3">
            <label for="idetapa" class="form-label">Etapa</label><br>
            <input type="number" class="form-control" id="idetapa" name="idetapa" value = "{{$practica->idetapa}}">
        </div>
        @error('idetapa')        
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label><br>
            <textarea  name="titulo" rows="5">{{$practica->titulo}}</textarea>
        </div>
        @error('titulo')        
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <button type="submit" class="btn btn-primary">Actualizar Practica</button>
    </form>
@endsection