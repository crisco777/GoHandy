<x-layout>
    @push('css')
        <style>
            .card:hover,
            .card:focus{
                box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
                -webkit-transform: translateY(-0.25em);
                transform: translateY(-0.25em);
            }

                .card {
                    --color:  #4682a9;
                    --hover:  #0a2647;
                }

                .card {
                    color: var(--color);
                    -webkit-transition: 0.25s;
                    transition: 0.25s;
                }

                .card:hover,
                .card:focus {
                    border-color: var(--hover);
                    color:#0a2647;
                }


                .container {
                    background-color: #91c8e4;
                }
        </style>
    @endpush

    <div class="mt-5">
        <p class="text-center fs-1" style="color: rgb(0, 0, 0); font-family: 'Bevan', serif;">¿Buscas
            algo?
        </p>
        <p class="text-center fs-4" style="color: rgb(0, 0, 0); font-family: 'Bevan';">Prueba
            las
            siguientes opciones
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
