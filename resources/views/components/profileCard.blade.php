@props([ 'user' ])

<div class="col mt-4">
    <div class="member d-flex align-items-start h-100">
        <div class="teampic">
            <img src="{{ asset('imgprofile/vegeta.jpg') }}" class="img-fluid" alt="team1">
        </div>
        <div class="member-info">
            <h4>{{ $user->firstname }} {{ $user->lastname }}</h4>
            <span>Email:{{$user->email}}</span>
            <span>Edad: {{$user->age}} </span>
            <span>Sexo:{{$user->sex->type }} </span>
            <span>Servicios disponibles:
                @foreach ($user->services as $service)
                <span>{{ $service->type }}</span>
                @endforeach
            </span>
            <p>Hola jaja</p>
            <span>Dirección:{{$user->address}}</span>
            <p>Número de contacto:{{$user->contact}}</p>
            <a href="{{ route('services.profile', ['user' => $user->id]) }}">
                <button type="button" class="btn btn-primary">Ver perfil</button>
            </a>
        </div>
    </div>
</div>
