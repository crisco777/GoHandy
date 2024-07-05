<x-layout>
    @push('css')
        <style>
            body {
                background-color: #ffffff;
            }

            .card{
                border-radius: 70px; with: 10   0px;
            }
            .card:hover,
            .card:focus {
                box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
                -webkit-transform: translateY(-0.25em);
                transform: translateY(-0.25em);
            }

            .card {
                -webkit-transition: 0.25s;
                transition: 0.25s;
            }

            .card:hover,
            .card:focus {
                border-color: var(--hover);
                color: #0a2647;
            }
        </style>
    @endpush

    <div class="container-xxl py-5">
        <div class="container" style="margin-top: 75px">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/escoger servicio.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4 fw-bold">How to choose a <span class="text-primary">Service</span></h1>
                    <p class="mb-4">To choose a service on our website, first browse the available categories or use the search bar to find specific professionals. Read the profile descriptions, review the opinions and ratings of other users, and contact the professionals you are most interested in to discuss details and prices. Finally, select and hire the service that best suits your needs.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Advanced search</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Detailed Profiles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Requests and Quotes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Direct communication</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Security and Trust:</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Fast and easy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <p class="text-center fs-4" style="color: rgb(0, 0, 0); font-family: 'Bevan';"> What are you looking for today?
        </p>
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($services as $service)
                    <div class="col">
                        <br>
                        <a href="{{ route('services.index', ['service' => $service->type]) }}">
                            <div class="card mb-4">
                                <img src="/icons/{{ $service->type }}.png" class="card-img-top mx-auto mt-2 "
                                    style="width: 45%">
                                <div class="card-body text-center">
                                    <h5 style="font-family: 'Bevan';" class="card-title">{{ $service->type }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</x-layout>
