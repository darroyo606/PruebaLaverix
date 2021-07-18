@extends('layout')
@section('title','Welcome')
@section('content')
<h1>@lang('Bienvenid@')</h1>
@auth
{{auth()->user()->nombre}}
@endauth

@endsection
