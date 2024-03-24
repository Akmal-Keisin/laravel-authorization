@props([
    'appearance',
    'theme',
    'url' => null,
    'form',
    'placeholder',
    'id',
    'class'
])

@php
    $buttonClass = collect([]);
    switch ($theme) {
        case 'primary':
            $buttonClass = $buttonClass->merge(
                $appearance === 'outlined' ?
                ['border', 'border-blue-500', 'text-blue-500', 'py-2', 'px-4', 'rounded', 'hover:border-blue-400', 'hover:text-blue-400'] :
                ['border', 'border-blue-500', 'bg-blue-500', 'hover:bg-blue-400', 'text-white', 'py-2', 'px-4', 'rounded']
            );
            break;

        case 'warning':
            $buttonClass = $buttonClass->merge(
                $appearance === 'outlined' ?
                    ['border', 'border-yellow-500', 'text-yellow-500', 'py-2', 'px-4', 'rounded', 'hover:bg-yellow-500', 'hover:text-white'] :
                    ['border', 'border-yellow-500', 'bg-yellow-500', 'hover:bg-yellow-700', 'text-white', 'py-2', 'px-4', 'rounded']
            );
            break;

        case 'danger':
            $buttonClass = $buttonClass->merge(
                $appearance === 'outlined' ?
                    ['border', 'border-red-500', 'text-red-500', 'py-2', 'px-4', 'rounded', 'hover:bg-red-500', 'hover:text-white'] :
                    ['border', 'border-red-500', 'bg-red-500', 'hover:bg-red-700', 'text-white', 'py-2', 'px-4', 'rounded']
            );
            break;

        default:
            $buttonClass = $buttonClass->merge(
                $appearance === 'outlined' ?
                ['border', 'border-blue-500', 'text-blue-500', 'py-2', 'px-4', 'rounded', 'hover:border-blue-400', 'hover:text-blue-400'] :
                ['border', 'border-blue-500', 'bg-blue-500', 'hover:bg-blue-400', 'text-white', 'py-2', 'px-4', 'rounded']
            );
            break;
    }

    if (isset($class) && $class) {
        $buttonClass->push($class);
    }
@endphp

@if($url)
    <a
        href="{{ $url }}"
        class="{{ $buttonClass->join(' ') }} inline-block leading-normal"

        @isset($id)
            id="{{ $id }}"
        @endisset
    >
        {{ $slot }}
    </a>
@else
    <button
        class="{{ $buttonClass->join(' ') }}"
        @isset($form)
            form="{{ $form }}"
        @endisset

        @isset($id)
            id="{{ $id }}"
        @endisset
        >
        {{ $slot }}
    </button>
@endif
