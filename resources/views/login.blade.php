@push('css')
    <style>
        body {
            background: linear-gradient(to right, #67b6dd, #0597e0);
        }




        .transition {
            transition: all;
            transition-duration: 300ms;
            transition-timing-function: ease-in;
        }
    </style>
@endpush

<x-layout>
    <div class="container w-75 mt-3 rounded shadow" x-data="{ showSignUp: false } " >
        <div class="row align-items-stretch" style="height: 95vh; width:150vh; background-color:white ">
            <div class="col-6 " style="margin-top: 17vh; ">
                <img src="img/logo.jpg" alt="" style="width:75vh">
            </div>
            <div class="col bg-white p-5 rounded-end transition" x-show="!showSignUp" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">

                <h2 class="fw-bold text-center mt-2 mb-4">Bienvenido</h2>



                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary mt-5">Iniciar sesión</button>
                    </div>
                </form>

                <div class="mt-3">
                    <span>No tienes cuenta? <button class="btn btn-outline-primary" x-on:click="showSignUp = true">Registrarme</button></span>
                </div>
            </div>

            <div class="col bg-white p-5 rounded-end transition" x-show="showSignUp"
                style="height: 95vh; width:150vh"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">


                <h2 class="fw-bold text-center mt-2">Bienvenida</h2>

                <form action="/signup" method="POST">
                    @csrf
                    <x-input label="Correo Electronico" name="email" type="email"/>
                    <x-input label="Contraseña" name="password" type="password"/>
                    <x-input label="Confirmacion Contraseña" name="password_confirmation" type="password"/>

                    <span>¿Qué quieres hacer?</span>
                    <br>
                    <br>
                    <div class="d-flex flex-row mb-2">
                        @foreach ($roles as $role)
                            <div class="form-check col-6">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="role_id"
                                        value="{{ $role->id }}">
                                    {{ $role->type }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                    </div>
                </form>

                <div class="my-2">
                    <span>Ya tienes cuenta? <button class="btn btn-outline-primary" x-on:click="showSignUp = false">Inicia sesion</button></span>
                </div>
            </div>
        </div>
    </div>
</x-layout>
