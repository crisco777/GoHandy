@push('css')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ffffff font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center
        }

        main {
            padding: auto;
        }

        .container {
            padding: auto;
            width: 90px;
            max-width: 1000px;
            margin: auto;
            overflow: hidden;
        }

        .titulo {
            color: #000000;
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
            background: linear-gradient(to right, hsla(204, 41%, 47%, 0.664), hsla(210, 75%, 16%, 0.664)), url();
            background-size: cover;
            background-attachment: fixed;
            position: relative;

        }

        section{
            height: 650px;
            display: flex;
            justify-content: space-evenly;
            padding: 0 40px;
            align-content: center;
            background-image: linear-gradient(to right, #91c8e4 0%, #4682a9 100%);
        }

        section h2{
            font-size: 50px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        section h3{
            position: center;
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

        .text-header h2 {
            font-size: 40px;
            color: white
        }


        p {
            padding: 0px 0px 30px 15px;
            font-family: 'Bevan', serif;
            font-size: medium;
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
        <div class="text-header">
            <h2><b> Nosotros somos</b></h2>
            <h2><b> GoHandy</b></h2>
        </div>

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #91c8e4;"></path>
            </svg></div>

    </header>

    <body>

        <main>
            <section class="mivision">
                <div class="text-container">
                    <h2 class="titulo"> Misión</h2>

                    <p>We want to offer a space that provides a wide range of high quality domestic services to<br>
                        meet the needs of our customers, providing effective, affordable and reliable solutions.</p>
                </div>
                <div class="text-container">

                    <h2 class="titulo">Visión</h2>
                    <p> To be the main online platform for hiring domestic services in the country, providing <br>
                        our users with a reliable, efficient and secure platform that satisfies all their needs.</p>
                </div>
            </section>

            <section class="values">
                <h3 class="titulo">Valores</h3>
                <div class="text-container">
                    <h4> Integrity:</h4>
                    <p>
                        GoHandy seeks to assure its users interested in hiring that the person
                        with whom <br>
                        they are establishing contact will provide them with the best quality service, working in an
                        <br>
                        honest, conscientious and integral manner.
                    </p>

                    <h4> Confidence:</h4>
                    <p>
                        Our site works through trust, guaranteeing both our users who are looking
                        to hire a <br>
                        service and those who are offering their work. A website built on trust and that seeks to allow
                        a
                        <br>
                        safe environment for all its users.
                    </p>


                    <h4> Commitment:</h4>
                    <p>

                        To provide users with people who are responsible and committed to offer
                        and perform <br>
                        their work in an excellent manner.
                    </p>
                </div>

            </section>

        </main>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
    </body>

</x-layout>
