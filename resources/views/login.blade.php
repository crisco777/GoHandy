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
                <input type="firstname" name="firstname" placeholder="Primer nombre" required="">
                <input type="lastname" name="lastname" placeholder="Apellido" required="">
                <input type="age" name="age" placeholder="Edad" required="">
                <input type="contact" name="contact" placeholder="Contacto" required="">
                <input type="sex_id" name="sex_id" placeholder="Sexo" required="">
                <input type="age" name="age" placeholder="Edad" required="">
                <input type="town_id" name="town_id" placeholder="Municipio" required="">
                <input type="address" name="address" placeholder="Dirección" required="">
                <input type="text" name="txt" placeholder="Nombre de usuario" required="">
                <input type="email" name="email" placeholder="Correo" required="">
                <input type="email_verified_at" name="email_verified_at" placeholder="Correo electronico verficado en" required="">
                <input type="Password" name="pswd" placeholder="Contraseña" required="">
                <button>Sign Up</button>
            </form>

        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Correo" required="">
                <input type="Password" name="pswd" placeholder="Contraseña" required="">
                <button>Login</button>
            </form>

        </div>

    </div>





</body>

</html>
