@extends('layouts.app')

@section('titulo')
      Registrate en Devstagram
@endsection

@section('contenido')
      <div class="md:flex md:justify-center md:gap-10 md:items-center">
            <div class="md:w-6/12 p-5">
                  <img src="{{ asset('img/registrar.jpg') }}" alt="imagen registro usuarios">
            </div>
            
            <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
                  <form>
                        <div class="mb-5">
                              <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                              Nombre
                              </label>
                              <input
                              id="name"
                              name="name"
                              type="text"
                              Placeholder="Tu nombre"
                              class="border p-3 w-full rounded-lg"
                              />
                        </div>
                        <div class="mb-5">
                              <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                              Username
                              </label>
                              <input
                              id="Username"
                              name="Username"
                              type="text"
                              Placeholder="Tu nombre de usuario"
                              class="border p-3 w-full rounded-lg"
                              />
                        </div>
                        <div class="mb-5">
                              <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                              Email
                              </label>
                              <input
                              id="email"
                              name="email"
                              type="email"
                              Placeholder="Tu email"
                              class="border p-3 w-full rounded-lg"
                              />
                        </div>
                        <div class="mb-5">
                              <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                              Password
                              </label>
                              <input
                              id="password"
                              name="password"
                              type="password"
                              Placeholder="Escribe tu password de registro"
                              class="border p-3 w-full rounded-lg"
                              />
                        </div>
                        <div class="mb-5">
                              <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                              Repetir password
                              </label>
                              <input
                              id="password_confirmation"
                              name="password_confirmation"
                              type="password"
                              Placeholder="Repite tu password"
                              class="border p-3 w-full rounded-lg"
                              />
                        </div>
                        
                        <input
                             type="submit"
                             value="crear Cuenta"
                             Class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                             uppercase font-bold w-full p-3 text-white rounded-lg">

                  </form>
            </div>      
      </div>
@endsection