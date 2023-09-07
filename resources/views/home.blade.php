<x-layout>
    @push('css')
        <style>
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

    <div class="mt-5">
        <p class="text-center fs-1" style="color: rgb(0, 0, 0); font-family: 'Bevan', serif;">¿Buscas
            algo?
        </p>
        <p class="text-center fs-4" style="color: rgb(0, 0, 0);">Prueba
            las
            siguientes opciones
        </p>
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($services as $service)
                    <div class="col">
                        <a href="{{ route('services.index', ['service' => $service->type]) }}">
                            <div class="card mb-4">
                                <img src="/icons/{{ $service->type }}.png" class="card-img-top mx-auto mt-2 "
                                    style="width: 45%">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $service->type }}</h5>
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
