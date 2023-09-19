<x-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    @props([])
    <div class="container wrapper mt-5 ">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('img/grupito.jpeg') }}"
                    style="width: 30vh; height:30vh">
            </div>
            <div class="col-7">

                <div>
                    <h4 style="font-family: 'Bevan'; ">{{ $user->firstname }} {{ $user->lastname }}</h4>
                </div>

                <div>
                    <span class="lead">Email:</span>
                    <span>{{ $user->email }}</span>
                </div>

                <div>
                    <span>Edad:</span>
                    <span>{{ $user->age }} </span>
                </div>

                <div>
                    <span>Sexo:</span>
                    <span>{{ $user->sex->type }} </span>
                </div>

                <div>
                    <span>Servicios disponibles:
                        @foreach ($user->services as $service)
                            <span>{{ $service->type }}</span>
                        @endforeach
                    </span>
                </div>

                <div>
                    <span>Descripcion Personal</span>
                    <p>Hola jaja</p>
                </div>

                <div>
                    <span>Direccion:</span>
                    <span>{{ $user->address }}</span>
                </div>

                <div>
                    <span>Número de contacto:</span>
                    <p>{{ $user->contact }}</p>
                </div>

            </div>
            <div class="container row align-items-left">
                <a href="{{ route('hired') }}">
                    <button type="button" class="btn" style="background-color:#050A30; color:rgb(255, 255, 255)">
                        Solicitar Servicio
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-layout>
