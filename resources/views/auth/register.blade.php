@extends('layouts.app')

@section('titulo')
    ¡Registrate!
@endsection


@section('contenido')
    <div class="md:flex md:justify-center md:gap-11 md:items-center">

        <div class="md:w-7/12 p-5">
            <img src="{{ asset('img/registra.jpg')}}" alt="registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text"
                           name="name" 
                           id="name"
                           placeholder="ingresa tu nombre"
                           class="border p-3 w-full rounded-lg
                           @error('name') border-red-500 @enderror"
                           value="{{old('name')}}"
                           >
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror    

                </div>
                
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        usuario
                    </label>
                    <input type="text"
                           name="username" 
                           id="username"
                           placeholder="ingresa tu nombre de usuario"
                           class="border p-3 w-full rounded-lg  @error('username') border-red-500 @enderror"
                           value="{{old('name')}}">

                        @error('username')
                           <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                               {{ $message }}
                           </p>
                       @enderror           
                </div>  
                
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        email
                    </label>
                    <input type="email"
                           name="email" 
                           id="email"
                           placeholder="ingresa tu Email"
                           class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                           value="{{old('email')}}">

                        @error('email')
                           <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                               {{ $message }}
                           </p>
                       @enderror                             
                </div>   

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        password
                    </label>
                    <input type="password"
                           name="password" 
                           id="password"
                           placeholder="ingresa tu password"
                           class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                           value="{{old('password')}}">

                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror 
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        repite tu password
                    </label>
                    <input type="password"
                           name="password_confirmation" 
                           id="password_confirmation"
                           placeholder="repite tu password"
                           class="border p-3 w-full rounded-lg">
                </div>


                <input 
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer 
                    uppercase font-bold w-full p-3 text-white rounded-lg ">
            </form>
        </div>
    </div> 
@endsection