<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @guest
                <x-nav.navlink label="Login" href="/login"/>
            @endguest

            @auth
            <x-nav.navlink label="Dashboard" href="/home"/>

            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <div class="col-auto">
                        <button type="submit" class="nav-link">Login</button>
                    </div>
                </form>
            </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
