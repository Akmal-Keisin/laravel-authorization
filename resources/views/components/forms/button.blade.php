@props([
    'appearance',
    'theme',
    'url' => null,
    'form'
])

@php
    $class = collect([]);

    switch ($theme) {
        case 'primary':
            if ($appearance === 'outlined') {
                $class = $class->merge(['border', 'border-blue-500', 'text-blue-500', 'py-2', 'px-4', 'rounded', 'hover:border-blue-400', 'hover:text-blue-400']);
            } else {
                $class = $class->merge(['bg-blue-500', 'hover:bg-blue-400', 'text-white', 'py-2', 'px-4', 'rounded', 'font-bold']);
            }
            break;

        case 'warning':
            if ($appearance === 'outlined') {
                $class = $class->merge(['border', 'border-yellow-500', 'text-yellow-500', 'py-2', 'px-4', 'rounded', 'hover:bg-yellow-500', 'hover:text-white']);
            } else {
                $class = $class->merge(['bg-yellow-500', 'hover:bg-yellow-700', 'text-white', 'py-2', 'px-4', 'rounded', 'font-bold']);
            }
            break;

        case 'danger':
            if ($appearance === 'outlined') {
                $class = $class->merge(['border', 'border-red-500', 'text-red-500', 'py-2', 'px-4', 'rounded', 'hover:bg-red-500', 'hover:text-white']);
            } else {
                $class = $class->merge(['bg-red-500', 'hover:bg-red-700', 'text-white', 'py-2', 'px-4', 'rounded', 'font-bold']);
            }
            break;

        default:
            # code...
            break;
    }
@endphp

@if($url)
    <a href="{{ $url }}" class="{{ $class->join(' ') }}">
        {{ $slot }}
    </a>
@else
    <button
        class="{{ $class->join(' ') }}"
        @isset($form)
            form="{{ $form }}"
        @endisset
        >
        {{ $slot }}
    </button>
@endif
{{-- <button class="">
    Tombol Solid
</button> --}}
