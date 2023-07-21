<x-layout>
    <form action="/SIGNUP" method="POST">
        @csrf
        <x-input label="Correo electronico" name="email" type="email"/>
        

    </form>
</x-layout>
