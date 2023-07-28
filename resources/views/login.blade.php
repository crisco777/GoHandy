<!DOCTYPE html>
<html lang="en">
<head>
    <title>OFRECISIOS NAVBAR</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="http://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="text" placeholder="Nombre de usuario" required="">
                <input type="email" name="email" placeholder="Correo" required="">
                <input type="Password" name="pswd" placeholder="Contraseña" required="">
                <button>Sign Up</button>
            </form>

        </div>

        <div class="login">
            <form action="/login" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Correo" required="">
                <input type="Password" name="password" placeholder="Contraseña" required="">
                <button>Login</button>
                {{ $errors }}
            </form>

        </div>

    </div>





</body>

</html>
