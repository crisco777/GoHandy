<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers plans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background: rgb(44, 44, 44);
        background: linear-gradient(90deg, rgba(44, 44, 44, 1) 0%, rgba(44, 58, 79, 1) 50%, rgba(44, 44, 44, 1) 100%);
    }


    .content {

        text-align: center;
        color: #ffffff;
    }

    .row {
        text-align: center;
        position: absolute;
        left: 5%;
        right: 5%;
        color: #2C3A4F;
    }

    .card {
        width: 100%;
        height: 180%;
        background-color: #ffffff;
        -webkit-box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, 0.75);
    }

    .card-body {
        color: rgb(0, 0, 0);
    }

    .btn {
        font-size: 175%;
        color: #ac3d21;
    }
</style>

<link href="{{ asset("css/style.css") }}" rel="stylesheet">


<div class="container mb-5 ">
    <nav class=" navbar navbar-expand-lg navbar-light px-4 px-lg-5">
        <a href="{{route('home')}}" class="navbar-brand p-0">
            <h1 class="m-0 fw-bold fw-2000 text-primary" style="font-family: 'Nunito', sans-serif; "></i>GoHandy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto "
            >
                <a href="{{ route('home') }}" class="nav-item nav-link fw-bold {{ request()->is('home') ? 'active' : ''}}">Home</a>
                <a href="{{ route('services') }}" class="nav-item nav-link fw-bold {{ request()->is('services') ? 'active' : ''}} ">Services</a>
                <a
                @guest
                    href="{{ route('login') }}"
                @endguest
                @auth
                    href="{{ route('plans') }}"
                @endauth
                >
                <a href="{{ route('plans') }}" class="nav-item nav-link fw-bold {{ request()->is('premium') ? 'active' : ''}}">Premium</a>
                <a href="{{ route('viewprofile') }}" class="nav-item nav-link fw-bold {{ request()->is('viewprofile') ? 'active' : ''}}">Profile</a>
                <a href="{{ route('notifications') }}" class="nav-item nav-link fw-bold {{ request()->is('notifications') ? 'active' : ''}}">Notifications</a>
                <div class="nav-item dropdown">
                </div>
                <a href="http://127.0.0.1:8000/weare" class="nav-item nav-link fw-bold {{ request()->is('weare') ? 'active' : ''}}">About us</a>
            </div>
            <a href="http://127.0.0.1:8000/login" class="btn rounded-pill py-2 px-4 fw-bold {{ request()->is('login') ? 'active' : ''}}">Register</a>
        </div>
    </nav>
</div>


<body class="" style="margin-top:18vh">
    <div class="content mt-5" style="margin-top: 50px">
        <h1 >Choose your ideal plan!</h1>
        <p>
            Enjoy all the benefits that GoHandy offers to you with these plans.
            <br>
            Connecting people and solving needs!

        </p>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn">Free Trial</a>
                    <p class="card-text">Two negotiations with up to two taskers with no time limit.</p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn">HandyPass</a>
                    <p class="card-text">Includes access to the negotiation option with all GoHandy workers within a
                        period of 30 day.</p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn">HandyVIP</a>
                    <p class="card-text">
                        -Deletes all advertisements on the website.
                        <br>
                        -Expands your subscription up to 60 days and includes all the HandyPass benefits.
                    </p>

                </div>
            </div>
        </div>
    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
