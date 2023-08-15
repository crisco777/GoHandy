<x-layout>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#">
      <div class="input-box">
        <input type="firstname" name="firstname" placeholder="Nombre" required>
      </div>

      <div class="input-box">
        <input type="lastname" name="lastname" placeholder="Apellido" required>
      </div>

      <div class="input-box">
        <input type="number" name="age" placeholder="Edad" required>
      </div>

      <div class="input-box">
        <input type="number" name="contact" placeholder="Numero de contacto" required>
      </div>

      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3>
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
