@extends('layout')

@section('title','Crear Usuarios')

@section('content')

<h1 class="display-4"> Crear Nuevo Usuario</h1>

@include('partials.validacion-errores')

<div class="container">
<form method="POST" action="{{ route('usuarios.store') }}">
    @csrf

    <div class="form-group row">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

        <div class="col-md-6">
            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}"  placeholder="Nombre" >

           
        </div>
    </div>


    <div class="form-group row">
        <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

        <div class="col-md-6">
            <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" placeholder="Apellido">

            
        </div>
    </div>


    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">

           
        </div>
    </div>
    <div class="form-group row">
        <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

        <div class="col-md-6">
            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required placeholder="Direccion" autofocus>

           
        </div>
    </div>
    <div class="form-group row">
        <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('fechaNacimiento') }}</label>

        <div class="col-md-6">
            <input id="fechaNacimiento" type="date" class="form-control @error('fechaNacimiento') is-invalid @enderror" name="fechaNacimiento" value="{{ old('fechaNacimiento') }}" required placeholder="Fecha de Nacimiento" autofocus>

           
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

          
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
    <div class="form-group">
        <label for="roles_id">Roles </label>
        <select name="roles_id" id="roles_id" class="form-control border-0 big-light shadow-sm" autofocus>
        <option value="">Seleccionar</option>
        @foreach($roles as $id=>$nombre)
        <option value="{{$id}}" >{{$nombre}}
        </option>
        @endforeach
        </select>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
</div>
@endsection