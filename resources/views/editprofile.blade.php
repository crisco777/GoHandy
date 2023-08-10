<x-layout>
    <form action="/userdata" method="POST">
        @csrf

        <x-input label="Nombre" name="firstname" type="firstname"/>
        <x-input label="Apellido" name="lastname" type="lastname"/>

        <x-input label="Edad" name="age" type="age"/>
        <x-input label="Contacto" name="contact" type="contact"/>
        <x-input label="Id sexo" name="sex_id" type="sex_id"/>
        <x-input label="Id municipio" name="town_id" type="town_id"/>
        <x-input label="Dirección" name="address" type="address"/>


        @if ($userrole == 'Workergsgt')
        <x-input label="Edad1231321" name="age" type="age"/>
        @else
        <x-input label="Edad de cliente " name="age" type="age"/>
        <x-input label="L el que chambea " name="age" type="age"/>
        @endif
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </div>
    </form>
</x-layout>
