@push('css')
    <style>
        body {
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
        }
    </style>
@endpush

@props(['user'])

<div class="comtainer mt-4">
    <div class="row row-cols-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/ale.jpeg') }}" class="img-fluid" alt="team1">
            <div class="card-body">
                <h4 style="font-family: 'Bevan'">{{ $user->firstname }} {{ $user->lastname }}</h4>
                <span>Edad: {{ $user->age }} </span>
                <span>Sexo:{{ $user->sex->type }} </span>
                <span>Servicios disponibles:
                    @foreach ($user->services as $service)
                        <span>{{ $service->type }}</span>
                    @endforeach
                </span>
                <p>Hola jaja</p>
                <span>Municipio: {{ $user->town->name }}</span>
                <p>Número de contacto:{{ $user->contact }}</p>
                <a href="{{ route('services.profile', ['user' => $user->id]) }}">
                    <button style="background-color: #050A30; color:white " type="button" class="btn">Ver
                        perfil</button>
                </a>
            </div>
        </div>
    </div>
</div>
