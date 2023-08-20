<x-layout>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
   </head>
<body class="#">
  <div class="wrapper">
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
        <option selected>Sexo?</option>
        @foreach ($sexes as $sex)
            <option value="{{ $sex->id}}">{{$sex->type}}</option>
        @endforeach
      </select>

      <select class="form-select input-box" name="town_id">
        <option selected>De donde eri?</option>
        @foreach ($towns as $town)
            <option value="{{ $town->id }}">{{$town->name}}</option>
        @endforeach
      </select>

      <div class="input-box">
        <input type="string" name="address" placeholder="Direccion" required>
      </div>


      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
    </form>
  </div>
</body>
</html>
    <!--<form action="/userdata" method="POST">
        @csrf

        <x-input label="Id sexo" name="sex_id" type="sex_id"/>
        <x-input label="Id municipio" name="town_id" type="town_id"/>
        <x-input label="Dirección" name="address" type="address"/>


        @if ($userrole == 'Workergsgt')
        <x-input label="Edad1231321" name="age" type="age"/>
        @else
        <x-input label="Edad de cliente " name="age" type="age"/>
        <x-input label="L el que chambea " name="age" type="age"/>
        @endif
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </div>
    </form> -->
</x-layout>
