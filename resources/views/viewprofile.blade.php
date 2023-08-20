<x-layout>
    @push('css')
    <style>
        .background {
            background-color: rgb(255, 255, 255);
            padding: 20px;
            border-radius: 20px;
            margin-top: 20px;
            border: 10px;
        }

        .format,
        .format2,
        .format3 {
            list-style: none;
        }

        .format li,
        .format2 li,
        .format3 li {
            display: inline-block;
            margin: 5px;
            padding: 2px;
            font-size: 20px;
        }
    </style>
       @endpush

       <nav class="navbar bg-body-tertiary" style="background: linear-gradient(to right, #91c8e4, #91c8e4)">
        <a class="nav-link" href="/home">
            <i class="bi bi-house-fill fs-1"></i>
        </a>
        <a class="nav-link d-flex justify-content-start" href="/weare"
            style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
            <b> ¿Quienes somos?</b>
        </a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <a class="nav-link" href="/viewprofile"
            style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
            <b> Ver perfil</b>
        </a>
        <a class="nav-link" href="/login"
        style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:large;">
        <b>Logout</b>
    </a>
    </nav>
    <div class="body">
        <div class="container align-items-center justify-content-center">

            <div class="row justify-content-between">
                <div class="col row align-self-center justify-content-center">
                    <h4 style="color:rgb(9, 53, 104)" class="col row align-self-center justify-content-center">INFORMATION
                    </h4>
                    <img src="{{ asset('imgprofile/vegeta.jpg') }}" alt="" srcset="" class="rounded-circle">
                    <br>
                </div>
                <div class="format col-8">
                    <br>
                    <ul>
                        <form action="updateprofile" method="post" class="">
                            @csrf
                            <x-input label="First Name" name="firstname" :value="$user->firstname" />
                            <x-input label="Last Name" name="lastname" :value="$user->lastname" />
                            <x-input label="Email" name="email" :value="$user->email" />
                            <x-input label="Age" name="age" :value="$user->age" />
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Select Image</label>
                                <input type="file" class="form-control" id="inputGroupFile01" name='img'>
                            </div>
                            <button type="submit" class="btn btn-danger">Save Changes</button>
                        </form>
                        <!--agregar el x-input de rol-->

                    </ul>
                </div>


            </div>

        </div>
    </div>
    <br>
</x-layout>
