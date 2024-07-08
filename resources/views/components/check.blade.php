@props(['label', 'value', 'name', 'type' => 'checkbox'])

<div class="form-check mb-3">
    <label class="form-check-label">
        {{ $label }}
        <input class="form-check-input modified" type="{{ $type }}" value="{{ $value }}" name="{{ $name }}">
    </label>
</div>

@pushonce('css')
    <style>
        .form-check-input.modified:checked {
            background-color: #4aa1a2;
            border-color: #418c8c;
        }
    </style>
@endpushonce
