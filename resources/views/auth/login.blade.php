@extends('layouts.app')



@section('titulo')
    Inicio de Sesión
@endsection



@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg')}}" alt="Imagen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                
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

                <!--PARA EMAIL
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
                -->

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

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 
                    rounded-lg text-sm p-2 text-center">
                        {{ session('mensaje') }}
                     </p>
                @endif

                
                <!--PARA INNICIAR SESIÓN-->
                <input 
                    type="submit"
                    value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection
