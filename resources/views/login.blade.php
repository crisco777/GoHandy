<x-layout>
    <form action="/login" method="POST">
        @csrf

        <x-input label="Correo electronico" name="email" type="email"/>
        <x-input label="Contraseña" name="password" type="password"/>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Loguear</button>
        </div>
    </form>
</x-layout>
