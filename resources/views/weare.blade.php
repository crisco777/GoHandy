<x-layout>
    @push('css')
        <style>
            #content {
                background: hsla(212, 75%, 16%, 0.685);
                background: -webkit-linear-gradient(to right, hsla(204, 41%, 47%, 0.658), hsla(212, 75%, 16%, 0.692));
                background: linear-gradient(to right, hsla(204, 41%, 47%, 0.664), hsla(210, 75%, 16%, 0.664)), url();
            }

            .bg-color {
                background-image: linear-gradient(to right, #91c8e4 0%, #4682a9 100%);
            }

            .wave {
                position: absolute;
                bottom: 0;
                width: 100%;
            }
        </style>
    @endpush

    <div id="content" class="position-relative">
        <div class="row text-white text-center align-items-center mx-0" style="height: calc(100vh - 73px); font-family: 'Bevan', serif">
            <h2>Nosotros somos <br> GoHandy</h2>
        </div>

        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150"
                 preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                      style="stroke: none; fill: #91c8e4;"></path>
            </svg>
        </div>
    </div>

    <div class="bg-color">
        <div class="container">
            <section class="row align-items-center" style="height: calc(100vh - 73px)">
                <div class="col-6">
                    <h2>Misión</h2>
                    <p>We want to offer a space that provides a wide range of high quality domestic services to<br>
                        meet the needs of our customers, providing effective, affordable and reliable solutions.</p>
                </div>

                <div class="col-6">
                    <h2>Visión</h2>
                    <p> To be the main online platform for hiring domestic services in the country, providing <br>
                        our users with a reliable, efficient and secure platform that satisfies all their needs.</p>
                </div>
            </section>

            <section class="row align-items-center" style="height: calc(100vh - 73px)">
                <h3 class="col-4">Valores</h3>
                <div class="col-8">
                    <h4> Integrity:</h4>
                    <p>
                        GoHandy seeks to assure its users interested in hiring that the person
                        with whom they are establishing contact will provide them with the best quality service, working
                        in
                        an
                        honest, conscientious and integral manner.
                    </p>

                    <h4> Confidence:</h4>
                    <p>
                        Our site works through trust, guaranteeing both our users who are looking
                        to hire a service and those who are offering their work. A website built on trust and that seeks
                        to
                        allow
                        a safe environment for all its users.
                    </p>

                    <h4> Commitment:</h4>
                    <p>
                        To provide users with people who are responsible and committed to offer
                        and perform their work in an excellent manner.
                    </p>
                </div>

            </section>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</x-layout>
