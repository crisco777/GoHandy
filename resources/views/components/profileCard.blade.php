@props([ 'user' ])


<div class="col mt-4">
    <div class="member d-flex align-items-start h-100">
        <div class="teampic">
            <img src="{{ asset('img/todos.jpeg') }}" class="img-fluid" alt="team1">
        </div>
        <div class="member-info">
            <h4 style="font-family: 'Bevan'">{{ $user->firstname }} {{ $user->lastname }}</h4>
            <span>Edad: {{$user->age}} </span>
            <span>Sexo:{{$user->sex->type }} </span>
            <span>Servicios disponibles:
                @foreach ($user->services as $service)
                <span>{{ $service->type }}</span>
                @endforeach
            </span>
            <p>Hola jaja</p>
            <span>Municipio: {{$user->town->name}}</span>
            <p>Número de contacto:{{$user->contact}}</p>

            <a href="{{ route('services.profile', ['user' => $user->id]) }}">
                <button style="background-color: #050A30; color:white " type="button" class="btn">Ver perfil</button>
            </a>
        </div>
    </div>
</div>
