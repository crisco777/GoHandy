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

            .team .member .social a i {
                color: red;
                font-size: 16px;
                margin: 0 2px;
            }

            .team .member .social a:hover {
                background: red;
            }

            .team .member .social a:hover i {
                background: white;
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
                color: rgb(255, 255, 255);
            }

            .section-title p {
                margin-top: 20px;
            }

            .center-img {
                text-align: center
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
