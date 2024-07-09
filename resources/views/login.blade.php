@push('css')
    <style>
        body {
            background: #ffff;

            /*font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;*/
        }

        .form-container, .overlay-container, .overlay {
            transition: all 0.6s ease-in-out;
        }

        .login-container {
            z-index: 2;
        }

        .register-container {
            opacity: 0;
            z-index: 1;
        }

        .card-body.right-panel-active .login-container {
            transform: translateX(100%);
            opacity: 0;
        }

        .card-body.right-panel-active .register-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }
            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .card-body.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background-image: url(images/Alumni/senior2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
        }

        .overlay::before {
            content: "";
            position: absolute;
            inset: 0;
            background: #2c3a4f;
        }

        .card-body.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .card-body.right-panel-active .overlay-left, .overlay-right, .overlay {
            transform: translateX(0);
        }

        .card-body.right-panel-active .overlay-right {
            transform: translateX(20%);
        }
    </style>
@endpush

@push('js')
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const registerButton = document.getElementById("register");
        const loginButton = document.getElementById("login");
        const container = document.getElementById("container");

        registerButton.addEventListener("click", () => setPanelClass(true));
        loginButton.addEventListener("click", () => setPanelClass(false));

        function setPanelClass(add = true) {
            if (add)
                container.classList.add("right-panel-active");
            else
                container.classList.remove("right-panel-active");

            urlParams.set('register', add ? 'true' : 'false');
            window.history.replaceState(null, '', `${window.location.origin}${window.location.pathname}?${urlParams}`);
        }

        if (urlParams.get('register') === 'true')
            setPanelClass(true);
    </script>
@endpush

<x-layout title="Login">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="card border-0 rounded-4 shadow-lg mw-100" style="width: 768px;">
                <div class="card-body position-relative rounded-4" id="container"
                     style="overflow: hidden; min-height: 500px;">
                    <!-- LOGIN -->
                    <div class="form-container login-container position-absolute top-0 start-0 w-50 h-100">
                        <form action="/login" method="POST"
                              class="px-5 d-flex flex-column justify-content-center align-items-center text-center"
                              style="min-height: 100%">
                            @csrf
                            <h1 class="mb-4">Login Here</h1>
                            <x-input label="Email" name="email" type="email" form="login" required/>
                            <x-input label="Password" name="password" type="password" form="login"/>
                            <x-check label="Remember me" value="false" name="remember" form="login"/>
                            <x-button label="Login" type="submit"/>
                        </form>
                    </div>

                    <!-- SIGNUP -->
                    <div class="form-container register-container position-absolute top-0 start-0 w-50 h-100">
                        <form action="/signup" method="POST" autocomplete="off"
                              class="px-5 d-flex flex-column justify-content-center align-item-center text-center"
                              style="min-height: 100%">
                            @csrf
                            <h1 class="mb-4">Register Here</h1>
                            <x-input label="Email" name="email" type="email" form="register"/>
                            <x-input label="Password" name="password" type="password" form="register"/>
                            <x-input label="Password Confirmation" name="password_confirmation" type="password" form="register"/>
                            <span class="mb-4">¿Qué quieres hacer?</span>

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
                            <x-button label="Register" type="submit"/>
                        </form>
                    </div>



                    <!-- IMAGE OVERLAY -->
                    <div class="overlay-container position-absolute top-0 start-50 w-50 overflow-hidden h-100"
                         style="z-index: 100">
                        <div class="overlay">
                            <div
                                class="overlay-panel overlay-left px-5 position-absolute d-flex flex-column
                                    justify-content-center align-items-center text-center top-0 w-50 h-100">
                                    <div class="mt-5">
                                        <h1 class="title pt-1 mt-2"> Welcome to <br> GoHandy</h1>
                                        <p class="pb-5">If You Have An Account, Login Here And Have Fun!</p>
                                        <x-button label="Login" id="login"/>
                                    </div>
                            </div>
                            <div
                                class="overlay-panel overlay-right px-5 position-absolute d-flex flex-column
                                    justify-content-center align-items-center text-center top-0 w-50 h-100 end-0">
                                    <div class="mt-4 " @csrf>
                                        <h1 class="title mt-2">Start Your <br> Journy Now</h1>
                                        <p class="pb-5">If You Don't Have An Account Yet, Join Us And Start Your Journey</p>
                                        <x-button label="Register" id="register" type="submit"/>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $errors }}
</x-layout>
