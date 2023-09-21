@push('css')
    <style>
        body {
            background: #090539;
            overflow-y: hidden;
        }

        .transition {
            transition: all;
            transition-duration: 300ms;
            transition-timing-function: ease-in;
        }
    </style>
@endpush

<x-layout>
    <div class="container w-75" x-data="{ showSignUp: false }">
        <div class="row align-items-center  justify-content-center align-items-center  rounded-4"
            style="height: 80vh; width:150vh; background-color:white">

            <img src="img/logo 2.png" alt="" style="width:50vh; height:auto">

            <div class="col-6 bg-white p-5 rounded-4 transition align-items-center" x-show="!showSignUp"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-0"
                x-transition:leave-start="opacity-0" x-transition:leave-end="opacity-0">

                <h2 style="font-family: bevan" class="fw-bold text-center mt-2 mb-5">Bienvenido</h2>

                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div>
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-grid mb-2">
                        <button type="submit" style="background-color: #090539; color:white" class="btn mt-3">Iniciar
                            sesión</button>
                    </div>
                </form>

                <div class="mt-4">
                    <span>No tienes cuenta? <button style="background-color: #090539; color:white" class="btn"
                            x-on:click="showSignUp = true">Registrarme</button></span>
                </div>
            </div>

            <div class="col-5 bg-white rounded-4 transition align-items-center" x-show="showSignUp"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-0"
                x-transition:leave-start="opacity-0" x-transition:leave-end="opacity-0">


                <h2 style="font-family: bevan" class="fw-bold text-center mt-2 mb-5">Bienvenido</h2>

                <form action="/signup" method="POST">
                    @csrf
                    <input class="form-control mb-3" placeholder="Email" label="Correo Electronico" name="email"
                        type="email" />
                    <input class="form-control mb-3" placeholder="Password" label="Contraseña" name="password"
                        type="password" />
                    <input class="form-control mb-3" placeholder="Confirm password" label="Confirmacion Contraseña"
                        name="password_confirmation" type="password" />

                    <span class="mb-4">¿Qué quieres hacer?</span>
                    <div class="d-flex flex-row mt-3 mb-3">
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
                        <button type="submit" style="background-color: #090539; color:white" class="btn">Crear
                            Cuenta</button>
                    </div>
                </form>

                <div class="mt-3">
                    <span>Ya tienes cuenta? <button style="background-color: #090539; color:white" class="btn"
                            x-on:click="showSignUp = false">Inicia sesion</button></span>
                </div>
            </div>
        </div>
    </div>
</x-layout>
