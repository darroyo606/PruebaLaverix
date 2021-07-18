@extends('layout')
@section('title','Welcome')
@section('content')
<h1>@lang('Bienvenid@')</h1>
<div class="col-xl-12">
    <div class="col-xl-12">
    <div class="form-row col-xl-16">
        <form action="{{route('Lista')}}" method="get">
        <div class="col-sm-4 my-1">
            <input type="text" class="form-control" name="texto" value="{{$texto}}" >
        </div>
        <div class="col-auto my-2">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
        <div class="col-xl-12">
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha</th>
                
            </tr>
            </thead>
            <tbody>
                @if(count($usuarios)<=0)
                <tr>
                    <td>No hay registros</td>
                </tr>
                @else
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                    <td>{{$usuario->fechaNacimiento}}</td>
                    
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
        </form>
    </div>
    </div>
</div>
@endsection