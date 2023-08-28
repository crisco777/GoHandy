<x-layout>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
   </head>
  <div class="wrapper" style="width: 100vh;">
    <h2>Registration</h2>
    <form action="/profcomplete" method="POST">
        @csrf
      <div class="input-box">
        <input type="string" name="firstname" placeholder="Nombre" required>
      </div>

      <div class="input-box">
        <input type="string" name="lastname" placeholder="Apellido" required>
      </div>

      <div class="input-box">
        <input type="number" min="0" step="1" name="age" placeholder="Edad" required>
      </div>

      <div class="input-box">
        <input type="number" name="contact" placeholder="Numero de contacto" required>
      </div>

      <select class="form-select input-box" name="sex_id">
        <option selected>Sexo</option>
        @foreach ($sexes as $sex)
            <option value="{{ $sex->id}}">{{$sex->type}}</option>
        @endforeach
      </select>

      <select class="form-select input-box" name="town_id">
        <option selected>Elije tu municipio</option>
        @foreach ($towns as $town)
            <option value="{{ $town->id }}">{{$town->name}}</option>
        @endforeach
      </select>

      <div class="input-box">
        <input type="string" name="address" placeholder="Direccion" required>
      </div>

      @if ($userrole == 1)
      <div class="input-box">
          <input type="string" name="description" placeholder="Dinos un poco acerca de tí" required>
        </div>

        <select class="form-select input-box" name="service_id">
            <option selected>Qué servicios te interesa ofrecer</option>
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{$service->type}}</option>
            @endforeach
          </select>

        @endif

      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
    </form>
</x-layout>
