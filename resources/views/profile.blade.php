<x-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    @props([])
    <div class="container wrapper mt-4 ">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">

                <img src="{{ asset('img/todos.jpeg') }}"
                    style="width: 30vh; height:30vh; margin-top:5vh, border-radius:10vh">
            </div>
        </div>
        <div class="text-center row">
            <h4 style="font-family: 'Bevan'; ">{{ $user->firstname }} {{ $user->lastname }}</h4>
            <div class="mt-2 ">
                <span>Email:</span>
                <span>{{ $user->email }}</span>
            </div>

            <div class="mt-2">
                <span>Edad:</span>
                <span>{{ $user->age }} </span>
            </div>

            <div class="mt-2">
                <span>Sexo:</span>
                <span>{{ $user->sex->type }} </span>
            </div>

            <div class="mt-2">
                <span>Servicios disponibles:
                    @foreach ($user->services as $service)
                        <span>{{ $service->type }}</span>
                    @endforeach
                </span>
            </div>
            <div class="mt-2">
                <span>Descripcion Personal</span>
                <p>Hola jaja</p>
            </div>

            <div class="mt-2">
                <span>Direccion:</span>
                <span>{{ $user->address }}</span>
            </div>

            <div class="mt-2">
                <span>Número de contacto:</span>
                <p>{{ $user->contact }}</p>
            </div>


            <div class="container row align-items-left">
                <a href="{{ route('hired') }}">
                    <button type="button" class="btn" style="background-color:#050A30; color:rgb(255, 255, 255)"> Solicitar Servicio
                    </button>
                </a>
            </div>

        </div>
    </div>
</x-layout>
