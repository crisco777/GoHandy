<x-layout>
    <form action="/SIGNUP" method="POST">
        @csrf
        <x-input label="Nombre" name="firstname" type="firstname"/>
        <x-input label="Apellido" name="lastname" type="lastname"/>
        <x-input label="Edad" name="age" type="age"/>
        <x-input label="Correo electronico" name="email" type="email"/>
        <x-input label="Correo electronico verficado en" name="email_verified_at" type="email_verified_at"/>
        <x-input label="Contraseña" name="password" type="password"/>
        <x-input label="Contacto" name="contact" type="contact"/>
        <x-input label="Id sexo" name="sex_id" type="sex_id"/>
        <x-input label="Id municipio" name="town_id" type="town_id"/>
        <x-input label="Rol" name="role" type="role"/>
        <x-input label="Dirección" name="address" type="address"/>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </div>
    </form>
</x-layout>
