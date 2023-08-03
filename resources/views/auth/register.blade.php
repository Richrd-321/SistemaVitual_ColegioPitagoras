@extends('layouts.app')



@section('titulo')
    Registro de Usuario
@endsection



@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="/register" method="POST" novalidate>
                @csrf
                <!--PARA NOMBRE-->
                <div class="mb-5">
                    <label for="name" class="mb-2 uppercase text-gray-500 font-bold">
                        Nombre
                    </label>

                    <input 
                        id="name" 
                        name="name" 
                        type="text"
                        placeholder="Tu Nombre"
                        class="border p-2 w-full rounded-lg
                        @error('name')
                            border-red-500
                        @enderror"
                        value="{{ old('name') }}"
                    />  
                </div>

                @error('name')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <!--PARA APELLIDOS-->
                <div class="mb-5">
                    <label for="apellidos" class="mb-2 uppercase text-gray-500 font-bold">
                        Apellidos
                    </label>

                    <input 
                        id="apellidos" 
                        name="apellidos" 
                        type="text"
                        placeholder="Tus Apellidos"
                        class="border p-2 w-full rounded-lg
                        @error('apellidos')
                            border-red-500
                        @enderror"
                        value="{{ old('apellidos') }}"
                    />  
                </div>

                @error('apellidos')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <!--PARA DNI-->
                <div class="mb-5">
                    <label for="dni" class="mb-2 uppercase text-gray-500 font-bold">
                        DNI
                    </label>

                    <input 
                        id="dni" 
                        name="dni" 
                        type="text"
                        placeholder="Tu DNI"
                        class="border p-2 w-full rounded-lg
                        @error('dni')
                            border-red-500
                        @enderror"
                        value="{{ old('dni') }}"
                    />  
                </div>

                @error('dni')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <!--PARA EMAIL-->
                <div class="mb-5">
                    <label for="email" class="mb-2 uppercase text-gray-500 font-bold">
                        Email
                    </label>

                    <input 
                        id="email" 
                        name="email" 
                        type="email"
                        placeholder="Tu Email"
                        class="border p-2 w-full rounded-lg
                        @error('email')
                            border-red-500
                        @enderror"
                        value="{{ old('email') }}"
                    />  
                </div>

                @error('email')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <!--PARA CONTRASEÑA-->
                <div class="mb-5">
                    <label for="password" class="mb-2 uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>

                    <input 
                        id="password" 
                        name="password" 
                        type="password"
                        placeholder="Contraseña de Registro"
                        class="border p-2 w-full rounded-lg
                        @error('password')
                            border-red-500
                        @enderror"
                        
                    />  
                </div>

                @error('password')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <!--PARA REPETIR CONTRASEÑA-->
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>

                    <input 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        type="password"
                        placeholder="Repite tu Contraseña"
                        class="border p-2 w-full rounded-lg
                        @error('password_confirmation')
                            border-red-500
                        @enderror"
                        
                    />  
                </div>

                @error('password_confirmation')
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <input 
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection
