@props([
    'type' => null,
    'id' => null,
    'name' => null,
    'placeholder' => null,
    'withErrorMessage' => false,
    'errorMessage' => null,
    'value' => null,
])

<input
    @if($type)
        type={{ $type }}
    @endif

    @if($type)
        type="{{ $type }}"
    @endif

    @if($id)
        id="{{ $id }}"
    @endif

    @if($name)
        name="{{ $name }}"
    @endif

    @if($value)
        value="{{ $value }}"
    @endif

    placeholder="{!! $placeholder !!}"

    @class([
        "mt-1 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm custom-input px-4 py-2"
    ])
/>

@if($withErrorMessage && $errorMessage)
    <span class="text-red-400">{{ $errorMessage }}</span>
@elseif ($withErrorMessage && $errors)
    <ul class="text-red-400">
        @foreach($errors->get($name) as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
