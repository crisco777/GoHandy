<x-layout>
    @push('css')
        <style>
            #content {
                background: hsla(212, 75%, 16%, 0.685);
                background: -webkit-linear-gradient(to right, hsla(204, 41%, 47%, 0.658), hsla(212, 75%, 16%, 0.692));
                background: linear-gradient(to right, hsla(204, 41%, 47%, 0.664), hsla(210, 75%, 16%, 0.664)), url(img/grupito.jpeg);
                height: 700px;
                background-size: cover;
                position: relative;
            }

            .bg-color {
                background-image: linear-gradient(to right, #91c8e4 0%, #4682a9 100%);

            }

            /* por si pongo algo abajo del acerca de nosotros
                                                                .about-1 p{
                                                                    text-align: center;
                                                                    padding: 3px;
                                                                    color: #fff;
                                                                }
                                                                */
            .godown {
                z-index: 10;
                position: absolute;
                bottom: 0;
                left: 0;
                border-width: 0 0 25vh 100vw;
                border-style: solid;
                border-color: transparent transparent white transparent;
            }

            .goup {
                z-index: 10;
                position: relative;
                bottom: 0;
                left: 0;
                border-width: 0 0 25vh 100vw;
                border-style: solid;
                border-color: transparent transparent #4682a9 transparent;
            }

            .about-item {
                margin-bottom: 20px;
                margin-top: 20px;
                background-color: none;
                padding: 80px, 30px;
                box-shadow: 0 0 9px rgba(0, 0, 0, .6);
            }

            .about-item h3 {
                font-size: 25px;
                margin-bottom: 10px;
            }

            .about-item hr {
                width: 46px;
                height: 3px;
                background-color: #5fbff9;
                margin: 0 auto;
                border: none;
            }

            .about-item p {
                margin-top: 20px;
            }

            .about-item:hover {
                background-color: #5fbff9;
            }

            .about-item:hover i,
            .about-item:hover h3,
            .about-item:hover p {
                color: #fff;
            }

            .about-item:hover hr {
                background-color: #fff;
            }

            .about-item:hover i {
                transform: translateY(-20px);
            }

            .about-item:hover i,
            .about-item:hover h3,
            .about-item:hover hr {
                transition: all 400ms ease-in-out;
            }

            footer {
                background: #212226;
                padding: 20px;
            }

            footer p {
                color: #fff;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .team .member {
                position: relative;
                padding: 30px;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
                border-radius: 20px;
                background: #fff;
            }

            .team .member .teampic {
                overflow: hidden;
                width: 150px;
                border-radius: 50%;
            }

            .team .member .member-info {
                padding-left: 10px;
            }

            .team .member h4 {
                font-weight: 200;
                margin-bottom: 5px;
                font-size: 20px;
                color: #2c74b3;
            }

            .team .member span {
                display: block;
                font-size: 15px;
                padding-bottom: 10px;
                position: 500;
            }

            .team .member span::after {
                content: "";
                position: absolute;
                display: block;
                width: 50px;
                height: 2px;
                background: black;
                bottom: 0;
                left: 0;
            }

            .team .memberp {
                margin: 10px 0 0 0;
                font-size: 14px;
            }

            .team .member .social {
                margin-top: 12px;
                display: flex;
                align-items: center;
                justify-content: flex-start;
            }

            .team .member .social a {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 32px;
                height: #eff2f8;
            }

            .team .member .social a+a {
                margin-left: 8px;
            }

            section {
                padding: 60px 0;
                overflow: hidden;
            }

            .section-title {
                text-align: center;
                padding-bottom: 30px;
            }

            .underline {
                width: 150px;
                height: 1px;
                background-color: black;
                margin: auto;
                margin-top: -30px;
            }

            .section-title h2 {
                font-size: 32px;
                font-weight: bold;
                margin-bottom: 20px;
                padding-bottom: 20px;
                position: relative;
                color: red;
            }

            .section-title p {
                margin-top: 20px;
            }

            .cards {
                background-color: #4682a9;
            }
        </style>
    @endpush

    <div id="content" class="position-relative">
        <div class="row text-white text-center align-items-center mx-0"
            style="height: calc(100vh - 73px); font-family: 'Bevan', serif">
            <h2>Nosotros somos <br> GoHandy</h2>
        </div>
        <div class="godown"></div>

    </div>


    <section id="about">
        <div class="about-1">
            <h1 class="text-black" style="font-family: 'bevan'; text-align:center">Quienes somos</h1>
        </div>

        <div class="mt-4" id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Misión</h3>
                                <hr>
                                <p>Ofrecer un espacio que brinde una amplia gama de servicios domésticos de alta
                                    calidad para satisfacer las necesidades de nuestros clientes, brindando
                                    soluciones efectivas, accesibles y confiables.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Visión</h3>
                                <hr>
                                <p>Ser la principal plataforma en línea para la contratación de servicios en el
                                    pais, brindando a nuestros usuarios una plataforma confiable, eficiente y segura
                                    que satisfaga todas sus necesidades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-1">
            <h1 class="text-black mt-5" style="font-family: 'bevan'; text-align:center">Nuestros valores</h1>
        </div>

        <div class="mt-4" id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Integridad</h3>
                                <hr>
                                <p>Go Handy busca asegurar a sus usuarios interesados en contratar que la persona
                                    con la que están estableciendo contacto les brindará un servicio de la mejor
                                    calidad, trabajando de manera honesta, consciente e integral.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Confianza</h3>
                                <hr>
                                <p>El sitio trabaja a través de la confianza, garantizando tanto a nuestros usuarios
                                    que buscan contratar un servicio como a los que están ofreciendo su trabajo. Un
                                    sitio web construido en la confianza y que busca permitir un entorno seguro a
                                    todos sus usuarios.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Compromiso</h3>
                                <hr>
                                <p>Brindar a los usuarios personas con responsabilidad y comprometidos a ofrecer y
                                    realizar su trabajo de manera excelente</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="goup"></div>
    <section class="cards">

        <div class="about-1">
            <h1 class="text-white" style="font-family: 'bevan';text-align:center">Conoce a nuestro equipo</h1>
        </div>
        <div id="about-2">

            <div class="team container align-items-center">
                <div class="row  d-flex align-items-start justify-content-center">
                    <div class="row-col-2"></div>
                    <!--team member 1-->
                    <div style="border-radius: 20px" class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/criso.jpeg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Ricardo Bautista</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Junior</p>
                                <p>Área: Backend</p>
                            </div>
                        </div>
                    </div>

                    <!--team member 2-->
                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/nestor.jpeg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Nestor Ayala</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Junior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

                    <!--team member 3-->
                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/briss.jpeg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Brisslie Itzel</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Junior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

                    <!--team member 4-->
                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/ale.jpeg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Alexandra Rodriguez</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Junior</p>
                                <p>Área: Marketing</p>
                            </div>
                        </div>
                    </div>

                    <!--team member 2-->
                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/kim.jpeg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Kimberly Guzman</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Junior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</x-layout>
