@push('css')
    <style>
        body {
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
        }

        .card {

            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.25);
            cursor: default;
            transition: all 400ms ease;
        }

        .card:hover {
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0, 4);
            transform: translateY(-3%)
        }

        .card .contenido {
            padding: 15px;
            text-align: center;
        }

    </style>
@endpush

@props(['user'])

<div class="col-6 col-md-4">
        <div class="card w-100 h-100">
            <figure>
                <img src="{{ asset('img/grupito.jpeg') }}" class="rounded-5 w-100 h-auto" alt="team1"
                    style="padding: 2vh">
            </figure>

            <div class="contenido">
                <h3 style="font-family: bevan" >{{ $user->firstname }} {{ $user->lastname }}</h3>
                <h6>Edad: {{ $user->age }} </h6>
                <h6>Sexo: {{ $user->sex->type }} </h6>
                <h6 class="my-1">Servicios disponibles: </h6>
                    @foreach ($user->services as $service)
                        <p class="my-0"> {{ $service->type }}</p>
                    @endforeach
                <h6>Municipio: {{ $user->town->name }}</h6>
                <h6>Número de contacto: {{ $user->contact }}</h6>
                <a href="{{ route('services.profile', ['user' => $user->id]) }}">
                    <button style="background-color: #090539" type="button" class="btn text-white my-3">Ver
                        perfil</button>
                </a>
            </div>
    </div>
</div>
