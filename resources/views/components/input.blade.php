@props(['label', 'name', 'type' => 'text', 'placeholder' => ''])

<div>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" class="form-control"
        placeholder="{{ $placeholder }}">
    @error($name)
        <span class="text-danger fw-bold">{{ $message }}</span>
    @else
        <span style="user-select: none; color: transparent;">Ofrecisios</span>
    @enderror
</div>
