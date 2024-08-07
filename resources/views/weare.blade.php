<x-layout>

    @push('css')
        <style>
            #content {
                background: linear-gradient(to right, hsla(204, 63%, 72%, 0.664), hsla(210, 75%, 16%, 0.664)), url(img/grupito.png);
                height: 700px;
                background-size: cover;
                position: relative;
            }



            /* por si pongo algo abajo del acerca de nosotros
                .about-1 p{
                text-align: center;
                padding: 3px;
                color: #fff; */

            .godown {
                z-index: 10;
                position: absolute;
                bottom: 0;
                left: 0;
                border-width: 0 0 25vh calc(100vw - 18px);
                border-style: solid;
                border-color: transparent transparent white transparent;
            }

            .goup {
                z-index: 10;
                position: relative;
                bottom: 0;
                left: 0;
                border-width: 0 0 25vh calc(100vw - 37px);
                border-style: solid;
                border-color: transparent transparent #2c3a4f transparent;
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




            .about-item p {
                margin-top: 20px;
            }

            .about-item:hover {
                background-color: #2c3a4f;
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
                border-radius: 10%;
            }

            .team .member .member-info {
                padding-left: 10px;
            }

            .team .member h4 {
                font-weight: 200;
                margin-bottom: 5px;
                font-size: 20px;
                color: #2c3a4f;
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
                background-color: #2c3a4f;
            }
        </style>
    @endpush

    <div id="content" class="position-relative">
        <div class="row text-white text-center align-items-center mx-0 fw-bold"
            style="height: calc(100vh - 73px);">
            <h2>We Are <br> GoHandy</h2>
        </div>

    </div>


    <section id="about">
        <div class="about-1">
            <h1 class="text-black fw-bold" style="text-align:center">About Us</h1>
        </div>

        <div class="mt-4" id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Mision</h3>
                                <hr>
                                <p>We want to offer a space that provides a wide range of high quality domestic services to meet the needs of our customers, providing effective, affordable and reliable solutions.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Vision</h3>
                                <hr>
                                <p>To be the main online platform for hiring domestic services in the country, providing our users with a reliable, efficient and secure platform that satisfies all their needs. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-1">
            <h1 class="text-black mt-5 fw-bold" style=" text-align:center">Our Values</h1>
        </div>

        <div class="mt-4" id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Integrity</h3>
                                <hr>
                                <p>Go Handy seeks to assure its users interested in hiring that the person with whom they are establishing contact will provide them with the best quality service, working in an honest, and integral manner.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Confidence</h3>
                                <hr>
                                <p>Our site works through trust, guaranteeing both our users who are looking to hire a service and those who are offering their work. A website built on trust and that seeks to allow a safe environment for all its users.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="about-item text-center">
                                <i class=""></i>
                                <h3 style="font-family: 'bevan'">Commitment</h3>
                                <hr>
                                <p>Go Handy provides users with people who are responsible and committed to offer and perform their work in an excellent manner.</p>
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
            <h1 class="text-white" style="text-align:center">Our team</h1>
        </div>
        <div id="about-2">

            <div class="team container align-items-center">
                <div class="row  d-flex align-items-start justify-content-center">
                    <div class="row-col-2"></div>
                    <!--team member 1-->
                    <div style="border-radius: 20px" class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic"> <img src="{{ asset('img/criso.jpeg') }}" class="img-fluid"
                                    alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Ricardo Bautista</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
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
                                <p>Senior</p>
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
                                <h4>Brisslie Gonzalez</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
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
                                <p>Senior</p>
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
                                <h4>Kimberly Guzmán</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/mariela.jpg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Mariela Gómez</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
                                <p>Área: Backend</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/mandy.jpg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Amanda Hernández</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/nelly.jpg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Nelly Gomez</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/naty.jpg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Natalia Diaz</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/devora.jpg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Devora Castro</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="teampic">
                                <img src="{{ asset('img/aless.jpg') }}" class="img-fluid" alt="team1">
                            </div>
                            <div class="member-info">
                                <h4>Alessandro Linares</h4>
                                <p>Centro ¡Supérate! Fundación Poma</p>
                                <p>Senior</p>
                                <p>Área: Fronted</p>
                            </div>
                        </div>
                    </div>

    </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</x-layout>
