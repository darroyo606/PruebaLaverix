@extends('layout')

@section('title','Visualización del Dato Seleccionado')
@section('content')



<div class="container">
    <div class="bg-white p-5 shadow rounded">
            <a class="btn btn-primary" href="{{route('usuarios.edit',$usuario)}}">Editar Usarios</a>
            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-usuarios').submit()">Eliminar</a>
    
    <form id="delete-usuarios"method="POST" action="{{route('usuarios.destroy',$usuario)}}">
        @csrf @method('DELETE')
        
    </form>

    <h1 class="display-4">{{$usuario->nombre}} {{$usuario->apellido}}</h1>

    <label>Fecha de Nacimiento: {{$usuario->fechaNacimiento}}</label><br>
    <label>Email: {{$usuario->email}}</label><br>
    <label>Dirección: {{$usuario->direccion}}</label>
</div>
@endsection