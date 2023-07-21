@props(['label', 'name', 'type' => 'text'])

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" id="exampleFormControlInput1"
        placeholder="name@example.com">
        @error($name)
            <span class="text-danger fw-bold">{{ $message }}</span>
        @enderror
</div>
