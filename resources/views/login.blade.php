<<<<<<< HEAD
<x-layout>
    <form action="/login" method="POST">
        @csrf

        <x-input label="Correo electronico" name="email" type="email"/>
        <x-input label="Contraseña" name="password" type="password"/>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <title>OFRECISIOS NAVBAR</title>
    <link rel="stylesheet" type="text/css" href="login.css">
<link href="http://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
>>>>>>> 6c5dbf2d99bfc336fd4ae3c58eb4d1b2c270cf2f

    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Sing up</label>
                <input type="text" name="txt" placeholder="Username" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
                <button>Sign Up</button>
            </form>

        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
                <button>Login</button>
            </form>

        </div>

    </div>





</body>

</html>
