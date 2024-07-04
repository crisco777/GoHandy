<link href="css/navbar.css" rel="stylesheet">


<div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg px-4 px-lg-5 py-3 py-lg-0">

            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0 fw-bold " style="font-weight: 600"></i>GoHandy</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('jome') }}" class="nav-item nav-option active fw-bold">Home</a>
                    <a href="{{ route('home') }}" class="nav-item nav-option fw-bold">Services</a>
                    <a href="premium.html" class="nav-item nav-option fw-bold">Premium</a>
                    <div class="nav-item dropdown">
                    </div>
                    <a href="http://127.0.0.1:8000/weare" class="nav-item nav-option fw-bold">About us</a>
                </div>

                <a href="http://127.0.0.1:8000/login"
                    class="btn btn-primary rounded-pill py-2 px-4 fw-bold">Register</a>
            </div>
        </nav>
    </div>
</div>
