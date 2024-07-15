<link href="{{ asset('css/style.css') }}" rel="stylesheet">


<div class="container ">
    <nav class=" navbar navbar-expand-lg navbar-light px-4 px-lg-5 ">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img class="img-fluid" src="{{ asset('img/logo- blanco.png') }}" alt=""> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto ">
                <a href="{{ route('home') }}"
                    class="nav-item nav-link fw-bold {{ request()->is('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('services') }}"
                    class="nav-item nav-link fw-bold {{ request()->is('services') ? 'active' : '' }} ">Services</a>


                    <a @guest
                    href="{{ route('login') }}" @endguest

                    href="{{ route('plans') }}"
                        class="nav-item nav-link fw-bold {{ request()->is('premium') ? 'active' : '' }}">Premium</a>
                <a href="{{ route('viewprofile') }}"
                    class="nav-item nav-link fw-bold {{ request()->is('viewprofile') ? 'active' : '' }}">Profile</a>
                <a href="{{ route('notifications') }}"
                    class="nav-item nav-link fw-bold {{ request()->is('notifications') ? 'active' : '' }}">Notifications</a>
                <div class="nav-item dropdown">
                </div>
                <a href="http://127.0.0.1:8000/weare"
                    class="nav-item nav-link fw-bold {{ request()->is('weare') ? 'active' : '' }}">About us</a>
            </div>
            <a href="http://127.0.0.1:8000/login"
                class="btn  rounded-pill py-2 px-4 fw-bold {{ request()->is('login') ? 'active' : '' }}">Register</a>
        </div>
    </nav>
</div>
