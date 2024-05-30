@push('css')
    <style>
        body {
            background-color: #8BC6EC;
            background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);

        }
    </style>
@endpush


<x-layout>
    <div class="container py-4 bg.primary">
        <div class="row">
            <div class="col-6">
                <form action="updateprofile" method="post" class="input-box">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <p style="font-size: 4vh;" class="mb-1">Firstname</p>
                            <input class="btn btn-color concert fs-5 form-control"
                                style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px; with: 50px;"
                                name="firstname" :value="$user -  firstname" value={{ Auth::user()->firstname }} />
                            <p style="font-size: 4vh;" class="mb-1">Sex</p>
                            <input class="btn btn-color concert fs-5 form-control"
                                style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;"
                                label="Age" name="age" value={{ Auth::user()->sex->type }} />
                        </div>
                        <div class="col-6">
                            <p style="font-size: 4vh;" class="mb-1">Lastname</p>
                            <input class="btn btn-color concert fs-5 form-control"
                                style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;"
                                label="Last Name" name="lastname" value={{ Auth::user()->lastname }} />
                            <p style="font-size: 4vh;" class="mb-1">Age</p>
                            <input class="btn btn-color concert fs-5 form-control"
                                style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;"
                                label="Age" name="age" value={{ Auth::user()->age }} />
                        </div>
                    </div>
                    <p style="font-size: 4vh;" class="mb-1">Correo</p>
                    <input class="btn btn-color concert fs-5 form-control"
                        style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;"
                        label="Email" name="email" value={{ Auth::user()->email }} />
                    <div class="row">
                        <div class="col">
                            <p style="font-size: 4vh;" class="mb-1">Dirección</p>
                            <input class="btn btn-color concert fs-5 form-control"
                                style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;"
                                label="Age" name="age" value={{ Auth::user()->address }} />
                        </div>
                        <div class="col">
                            <p style="font-size: 4vh;" class="mb-1">Número de contacto</p>
                            <input class="btn btn-color concert fs-5 form-control"
                                style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;"
                                label="Age" name="age" value={{ Auth::user()->contact }} />
                        </div>
                    </div>

                    <p style="font-size: 4vh;" class="mb-1">Cambiar foto de perfil</p>
                    <input type="file" class="form-control"
                        style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;"
                        id="inputGroupFile01" name='img'>


                    <button type="submit" class="btn btn-color concert fs-5 mt-4"
                        style="background-color: #fff; border-color: rgba(255, 255, 255, 0); border-radius: 20px;">Save
                        Changes</button>
                </form>
            </div>

            <div class="col-md-6">
                <img class="rounded-circle mx-auto d-block" src="img/criso.jpeg"
                    style="width: 70vh; height: 70vh; margin-top:5vh">
            </div>
</x-layout>
