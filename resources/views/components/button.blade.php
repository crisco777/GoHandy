@props(['label', 'id' => '','type' => 'button'])

<button type="{{ $type }}" id="{{ $id }}" class="btn btn-primary modified border-0 w-100">{{ $label }}</button>

@pushonce('css')
    <style>
        .btn-primary.modified {
            --bs-btn-border-radius: 15px;
            --bs-btn-bg: #ac3d21;
            --bs-btn-hover-bg: #d65a31;
            --bs-btn-active-bg: #dd876b;
        }

        .btn-primary.modified:active {
            scale: 95%;
        }
    </style>
@endpushonce
