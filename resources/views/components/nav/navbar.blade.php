<nav class="navbar navbar-expand-lg fixed-top" style="background-color:#B1D4E0; font-family: 'Gotham';">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <img src="{{ asset('/img/logoNoBG.png') }}" height="50px" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-black fs-5 fw-bold" aria-current="page" href="weare">¿Quienes
                        somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-black fs-5 fw-bold" aria-current="page" href="{{route('profile')}}">
                        Ver perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-black fs-5 fw-bold" aria-current="page" href="login">
                        Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
