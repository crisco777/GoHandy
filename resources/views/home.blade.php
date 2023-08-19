<x-layout>
    @push('css')
    <style>
        body {
            background: #0a2647;
            background: linear-gradient(to right, #4682a9, #0a2647);
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
    <p class="text-center fs-3" style="font-family:Arial, Helvetica, sans-serif; color: aliceblue;">¿Buscas algo?
    </p>

    <p class="text-center fs-4" style="font-family: Arial, Helvetica, sans-serif; color: aliceblue;">Prueba las
        siguientes opciones
    </p>
    <div class="d-grid gap-2 col-6 mx-auto"
        style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Carpintero</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Fontanero</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Electricista</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Mecanico</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Sastrero</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Soldador</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Cerrajero</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;" type="button">Albañil</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Vidriero</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;" type="button">Pintor</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Ordenanza</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;" type="button">Tecnico</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Jardinero</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Cocinero</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Mantenimiento</button>
        <button class="btn btn-" style="background-color: #0a2647; color: aliceblue;"
            type="button">Conductor</button>

    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    </body>
</x-layout>

