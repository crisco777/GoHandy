<x-layout>
    @props([])
    <div class="container">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">

                <img src="{{ asset('img/logochiquito.jpg') }}" style="width: 30vh; height:30vh; margin-top:5vh">
            </div>
        </div>
        <div class="text-center row">
            <h4>{{ $user->firstname }} {{ $user->lastname }}</h4>
            <div class="mt-2">
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

            <div class="container row col-2 align-items-left">
                <button type="button" class="btn btn-primary">Solicitar Servicio</button>
            </div>
        </div>
    </div>
</x-layout>
