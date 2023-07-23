<x-layout>
    <p>
        @if ($user->sex->type == 'Male')
            Bienvenido
        @else
            Bienvenida
        @endif
        {{ $user->firstname }} {{ $user->lastname }}
    </p>
    <p>Tu sexo es: {{ $user->sex->type }}</p>
    Tus servicios son:
    <ul>
        @foreach ($user->subjects as $subject)
            <li>{{ $subject->name }}</li>
        @endforeach
    </ul>

    <select class="form-select" aria-label="Error al seleccionar el rol">
        <option selected>Selecciona un rol</option>
        @foreach ($subjects as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
    </select>
</x-layout>
