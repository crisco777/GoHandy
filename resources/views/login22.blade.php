<!DOCTYPE html>
<html lang="en">

<head>
    <title>OFRECISIOS NAVBAR</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="http://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" class="customStyle" aria-hidden="true">

        <div class="signup">
            <form action="/signup" method="POST">
                @csrf
                <label class="customStyleLabel" for="chk" aria-hidden="true">Sign up</label>
                <input class="customStyleInput"  type="email" name="email" placeholder="Correo" required>
                <input class="customStyleInput"  type="Password" name="password" placeholder="Contraseña" required>
                <input class="customStyleInput"   type="Password" name="password_confirmation" placeholder="Confirmacion Contraseña" required>

                <div>
                    @foreach ($roles as $role)
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="role_id" value="{{ $role->id }}">
                            {{ $role->type }}
                        </label>
                    </div>
                    @endforeach
                </div>
                <button>Sign Up</button>
                {{ $errors }}
            </form>

        </div>

        <div class="login">
            <form action="/login" method="POST">
                @csrf
                <label class="customStyleLabel"  for="chk" aria-hidden="true">Login</label>
                <input class="customStyleInput"  type="email" name="email" placeholder="Correo" required>
                <input class="customStyleInput"  type="Password" name="password" placeholder="Contraseña" required>
                <button>Login</button>
                {{ $errors }}
            </form>

        </div>

    </div>





</body>

</html>
