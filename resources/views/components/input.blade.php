@props(['label', 'name', 'type' => 'text', 'class' => '', 'required' => false, 'form' => null])

<div class="mb-2 w-100 text-start">
    <input type="{{ $type }}" class="form-control modified border-0 w-100 {{ $class }}" name="{{ $name }}"
        placeholder="{{ $label }}" @required($required) value="{{ old($name) }}">
    @error($name, $form)
        <span class="text-danger ps-2" style="font-size: 0.875rem">{{ $message }}</span>
    @else
        <span class="invisible">error {{ $form }}</span>
    @enderror
</div>

@pushonce('css')
    <style>
        .form-control.modified {
            --bs-border-radius: 8px;
            --bs-body-bg: #eee;
            --bs-border-color: #eee;
        }

        .form-control.modified:focus {
            box-shadow: 0 0 1px 2px rgb(0, 0, 0, 0.25);
        }
    </style>
@endpushonce
