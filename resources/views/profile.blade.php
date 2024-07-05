<x-layout>
    @push('css')

    @props([])
    <div class="container wrapper ">
        <div class="row">
            <div class="col-4 " style="margin-top: 100px" >
                <img src="{{ asset('img/grupito.jpeg') }}"
                    style="width: 30vh; height:30vh" class="rounded-4">
            </div>
            <div class="col-7">

                <div style="margin-top: 100px">
                    <h4 style="font-family: 'Bevan'; ">{{ $user->firstname }} {{ $user->lastname }}</h4>
                </div>

                <div>
                    <span>Email:</span>
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
                    <span>Descripción Personal</span>
                    <span>Siempre estoy abierto/a a nuevas oportunidades y desafíos.
                        ¡No dudes en contactarme si deseas conocer más acerca de mí o explorar posibles colaboraciones!</span>
                </div>

                <div>
                    <span>Dirección:</span>
                    <span>{{ $user->address }}</span>
                </div>

                <div>
                    <span>Número de contacto:</span>
                    <p>{{ $user->contact }}</p>
                </div>

            </div>
            <div class="container row align-items-left">
                <a href="{{ route('hired') }}">
                    <button type="button" class="btn" style="background-color:#090539; color:rgb(255, 255, 255)">
                        Solicitar Servicio
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-layout>
