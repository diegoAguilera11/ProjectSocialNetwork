@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center mb-5">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro usuarios">
        </div>

        <div class="md:w-4/12 bg-yellow-300 p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Ingresa tu nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500
                        @enderror"
                        value="{{ old('name') }}" />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input id="username" name="username" type="text" placeholder="Ingresa tu nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500
                    @enderror"
                        value="{{ old('username') }}" />

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Ingresa tu email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500
                    @enderror"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input id="passowrd" name="password" type="password" placeholder="Ingresa tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500
                    @enderror" />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Confirmar contraseña
                    </label>
                    <input id="passowrd_confirmation" name="password_confirmation" type="password"
                        placeholder="Ingresa tu contraseña" class="border p-3 w-full rounded-lg" />
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-fuchsia-600 hover:bg-fuchsia-700 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded" />
            </form>
        </div>
    </div>
@endsection
