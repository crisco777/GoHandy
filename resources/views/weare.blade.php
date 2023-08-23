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
            text-align: center
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

        .text-header {
            display: flex;
            height: 430px;
            width: 100%;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .wave {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
@endpush

<x-layout>

    <header>
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
                <p class="body">To offer a space that provides a wide range of high quality domestic services to meet
                    the needs of our
                    customers, providing effective, affordable and reliable solutions.</p>
            </section>
            <section class="cont vision" id="vision">
                <h2 class="titulo">Visión</h2>
                <p class="body"> To be the main online destination for the contracting of services in the country,
                    providing our
                    users with a reliable, efficient and secure platform that satisfies all their needs.</p>
            </section>
            <section class="cont valores" id="valores">
                <h2 class="titulo">Valores</h2>
                <p class="body mb-4">
                    Valores: Integrity: Our site seeks to assure its users interested in hiring that the person with
                    whom they are establishing contact will provide them with the best quality service, working in an
                    honest, conscientious and integrated manner.
                </p >

                <p class="body mb-4">
                    Confidence: Our site works through trust, guaranteeing both our users who are looking to hire a
                    service and those who are offering their work. A website built on trust and that seeks to allow a
                    safe environment for all its users.
                </p>

                <p class="body mb-4">

                    Honesty: In our website users who offer services and those who require them have the security of
                    hiring or working with really honest people.
                </p>

                <p class="body mb-4">

                    Commitment: To provide users with people who are responsible and committed to offer and perform
                    their work in an excellent manner.
                </p>
            </section>
        </main>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
    </body>

</x-layout>
