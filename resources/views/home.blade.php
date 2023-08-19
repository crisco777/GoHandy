<x-layout>
    @push('css')
        <style>
            body {
                background: linear-gradient(to right, #4682a9, #2265b1);
            }

            .raise:hover,
            .raise:focus {
                box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
                -webkit-transform: translateY(-0.25em);
                transform: translateY(-0.25em);
            }

            .raise {
                --color: #2c74b3;
                --hover: #91c8e4;
            }

            button {
                color: var(--color);
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            button:hover,
            button:focus {
                border-color: var(--hover);
                color: #2c74b3;
            }

            button {
                background: none;
                border: 2px solid;
                font: inherit;
                line-height: 1;
                margin: 0.5em;
                padding: 1em 2em;
                width: 50%;
                left: 50%;

            }

            h1 {
                font-weight: 400;
            }

            code {
                color: #2c74b3;
                font: inherit;
            }
        </style>
    @endpush

    <body>
        <nav class="navbar bg-body-tertiary">
            <a class="nav-link" href="/home">
                <i class="bi bi-house-fill fs-1"></i>
            </a>
            <a class="nav-link d-flex justify-content-start" href="/weare"
                style="color: rgb(5, 114, 187); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
                <b> ¿Quienes somos?</b>
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
            <a class="nav-link" href="/viewprofile"
                style="color: rgb(5, 114, 187); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
                <b> Ver perfil</b>
            </a>
        </nav>

        <div>
            <p class="text-center fs-3" style="font-family:Arial, Helvetica, sans-serif; color: aliceblue;">¿Buscas
                algo?
            </p>

            <p class="text-center fs-4" style="font-family: Arial, Helvetica, sans-serif; color: aliceblue;">Prueba las
                siguientes opciones
            </p>

            <div class="buttons">
                <button class="raise"> Jardinería</button>
                <button class="raise"> Fontanería</button>
                <button class="raise"> Electricidad</button>
                <button class="raise"> Mecanica</button>
                <button class="raise"> Sastrería</button>
                <button class="raise"> Soldador</button>
                <button class="raise"> Cerrajería</button>
                <button class="raise"> Albañilería</button>
                <button class="raise"> Vidriería</button>
                <button class="raise"> Pintura</button>
                <button class="raise"> Ordenanza</button>
                <button class="raise"> Tecnico</button>
                <button class="raise"> Cocina</button>
                <button class="raise"> Mantenimiento</button>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
    </body>
</x-layout>
