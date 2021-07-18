@extends('layout')

@section('title','Usuarios')

@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center">
<h1 class="display-4">Usuarios</h1>
<a class="btn btn-primary" href="{{route('usuarios.create')}}">Crear Nuevos Usarios</a>

</div>


<ul>
   
    @forelse  ($usuarios as $usuariosItem)
    <li class="list-group-item border-0 mb-3 shadow-sm"><a href="{{route('usuarios.show',$usuariosItem->id)}}">{{$usuariosItem->nombre}} {{$usuariosItem->apellido}}</a></li>
   
@empty

    <li>No hay usuarios para mostrar</li>

 @endforelse
    
</ul>

</div>
@endsection