@push('css')
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #ffffff;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.container {
    padding: 60px 0;
    width: 90px;
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
}

.titulo {
    color: #0a2647;
    font-size: 30px;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 60px;
}

header {
    width: 100%;
    height: 600px;
    background: hsla(212, 75%, 16%, 0.685);
    background: -webkit-linear-gradient(to right, hsla(204, 41%, 47%, 0.658), hsla(212, 75%, 16%, 0.692));
    background: linear-gradient(to right, hsla(204, 41%, 47%, 0.664), hsla(210, 75%, 16%, 0.664)), url(pic2.jpg);
    background-size: cover;
    background-attachment: fixed;
    position: relative;

}

section .navbar {
   position: fixed;
   width: 100%;
   z-index: 100;
}

.text-header{
    display: flex;
    height: 430px;
    width: 100%;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.wave{
    position: absolute;
    bottom: 0;
    width: 100%;
}
    </style>
@endpush

<x-layout>

    <header>
        <section id="navbar">
            <nav class="navbar bg-body-tertiary" style="background: linear-gradient(to right, #91c8e4, #91c8e4)">
                <a class="nav-link" href="/home">
                    <i class="bi bi-house-fill fs-1"></i>
                </a>
                <a class="nav-link d-flex justify-content-start" href="/weare"
                    style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
                    <b> ¿Quienes somos?</b>
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
                <a class="nav-link" href="/viewprofile"
                    style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
                    <b> Ver perfil</b>
                </a>
                <a class="nav-link" href="/login"
                style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
                <b>Logout</b>
            </a>
            </nav>

        <section class="text-header" style="color: antiquewhite;">
          <h2><b> Nosotros somos</b></h2>
          <h1><b> GoHandy</b></h1>
        </section>

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
              style="stroke: none; fill: #91c8e4;"></path>
          </svg></div>

      </header>

      <body>

        <main>
          <section class="cont mision" id="mision">
            <h2 class="titulo"> Misión</h2>
          </section>
          <section class="cont vision" id="vision">
            <h2 class="titulo">Visión</h2>
          </section>
          <section class="cont valores" id="valores">
            <h2 class="titulo">Valores</h2>
          </section>
        </main>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
          crossorigin="anonymous"></script>
      </body>

</x-layout>
