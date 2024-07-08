<link href="{{ asset("css/style.css") }}" rel="stylesheet">


<div class="container ">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 ">
        <a href="{{route('home')}}" class="navbar-brand p-0">
            <h1 class="text-primary m-0 fw-bold fw-2000 "></i>GoHandy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active fw-bold">Home</a>
                <a href="{{ route('services') }}" class="nav-item nav-link fw-bold">Services</a>
                <a href="premium.html" class="nav-item nav-link fw-bold">Premium</a>
                <a href="{{ route('viewprofile') }}" class="nav-item nav-link fw-bold">Profile</a>
                <a href="{{ route('notifications') }}" class="nav-item nav-link fw-bold">Notifications</a>
                <div class="nav-item dropdown">
                </div>
                <a href="http://127.0.0.1:8000/weare" class="nav-item nav-link fw-bold">About us</a>
            </div>
            <a href="http://127.0.0.1:8000/login" class="btn btn-primary rounded-pill py-2 px-4 fw-bold">Register</a>
        </div>
    </nav>
</div>
