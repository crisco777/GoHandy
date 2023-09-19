@push('css')
    <style>
        body {
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .continer {
            width: 100%;
            display: flex;
            max-width: 1100;
        }

        .card {
            width: 100%;
            margin: 20px;
            border-radius: 6px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0, 2);
            cursor: default;
            transition: all 400ms ease;
        }

        .card:hover {
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0, 4);
            transform: translateY(-3%)
        }

        .card img {
            width: 500px;
            height: 300%;
        }

        .card .contenido {
            padding: 15px;
            text-align: center;
        }

        .card .contenido h6 {
            line-height: -6;
            color: black;
        }

        .card .contenido h3 {
            font-weight: 400;
            margin-bottom: 15px;
        }
    </style>
@endpush

@props(['user'])

<div class="row row-cols-1">

    <div class="container">
        <div class="card">
            <figure>
                <img src="{{ asset('img/grupito.jpeg') }}" class="img-fluid " alt="team1" style="padding: 2vh">
            </figure>
            <div class="contenido">
                <h3 style="font-family: bevan">{{ $user->firstname }} {{ $user->lastname }}</h3>
                <h6>Edad: {{ $user->age }} </h6>
                <h6>Sexo:{{ $user->sex->type }} </h6>
                <h6>Servicios disponibles:
                    @foreach ($user->services as $service)
                        <span>{{ $service->type }}</span>
                    @endforeach
                </h6>
                <h6>Hola jaja</h6>
                <h6>Municipio: {{ $user->town->name }}</h6>
                <h6>Número de contacto:{{ $user->contact }}</h6>
                <a href="{{ route('services.profile', ['user' => $user->id]) }}">
                    <button style="background-color: #050A30; color:white " type="button" class="btn">Ver
                        perfil</button>
                </a>
            </div>
        </div>
    </div>
</div>
