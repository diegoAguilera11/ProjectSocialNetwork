@extends('layouts.app')

@section('titulo')
    Bienvenido a Devstagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center mb-5">
    <div class="md:w-6/12 p-5">
        <img src="{{ asset('img/principal.jpeg') }}" alt="Imagen principal">
    </div>
</div>
@endsection
