@push('css')
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #91c8e4;
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
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/home">
                <i class="bi bi-house-fill fs-1"></i>
              </a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" id="mision.nav" href="#mision">Misión</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="vision.nav" href="#vision">Visión</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="valores.n" href="#valores">Valores</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </section>

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
