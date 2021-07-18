@extends('layout')

@section('title','Crear Usuarios')

@section('content')

<h1 class="display-4"> Editar Usuario</h1>

<div class="container">

<form method="POST" action="{{route('usuarios.update',$usuario) }}">
    @csrf @method('PATCH')

    <div class="form-group row">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

        <div class="col-md-6">
            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{old('nombre',$usuario->nombre)}}"  placeholder="Nombre" autofocus>

           
        </div>
    </div>


    <div class="form-group row">
        <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

        <div class="col-md-6">
            <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido',$usuario->apellido)}}" placeholder="Apellido" autofocus>

            
        </div>
    </div>



    <div class="form-group row">
        <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

        <div class="col-md-6">
            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion',$usuario->direccion) }}" placeholder="Direccion" autofocus>

           
        </div>
    </div>
    <div class="form-group row">
        <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('fechaNacimiento') }}</label>

        <div class="col-md-6">
            <input id="fechaNacimiento" type="date" class="form-control @error('fechaNacimiento') is-invalid @enderror" name="fechaNacimiento" value="{{old('fechaNacimiento', $usuario->fechaNacimiento )}}" placeholder="Fecha de Nacimiento" autofocus>

           
        </div>
    </div>
    <div class="form-group">
        <label for="roles_id">Roles </label>
        <select name="roles_id" id="roles_id" class="form-control border-0 big-light shadow-sm" autofocus>
        <option value="">Seleccionar</option>
        @foreach($roles as $id=>$nombre)
        <option value="{{$id}}" 
          @if($id === $usuario->roles_id) selected
          @endif  >{{$nombre}}
        </option>
        @endforeach
        </select>
    </div>
   

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Actualizar
            </button>
        </div>
    </div>
</form>
</div>
@endsection