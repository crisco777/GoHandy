<x-layout>
    @push('css')
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background: linear-gradient(to right, #ffffff, #ffffff);

            }

            .team .member {
                position: relative;
                padding: 30px;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                background: #fff;
                border: #130458
            }

            .team .member .teampic {
                overflow: hidden;
                width: 50px;
                border-radius: 50%;
            }

            .team .member .member-info {
                padding-left: 10px;
            }

            .team .member h4 {
                font-weight: 200;
                margin-bottom: 5px;
                font-size: 20px;
                color: rgb(7, 7, 7);
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
                width: 415px;
                height: 2px;
                background: black;
                bottom: 0;
                left: 0;
            }

        </style>
    @endpush

    <div class="team">
        <div class="container">
            <div class="text-center pt-4">
                <h1>{{ $service }}</h1>
            </div>
            <div class="row row-cols-3">
                @foreach ($users as $user)
                    <x-profileCard :user="$user" />
                @endforeach
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
            </script>
        </div>
    </div>
</x-layout>
