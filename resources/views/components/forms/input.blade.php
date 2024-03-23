@props([
    'type' => null,
    'id' => null,
    'name' => null,
    'placeholder' => null,
    'withErrorMessage' => false,
    'errorMessage' => null
])

<input
    @isset($type)
        type={{ $type }}
    @endisset

    @isset($type)
        type="{{ $type }}"
    @endisset

    @isset($id)
        id="{{ $id }}"
    @endisset

    @isset($name)
        name="{{ $name }}"
    @endisset

    placeholder="{{ $placeholder }}"

    @class([
        "mt-1 block w-full border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm custom-input px-4 py-2"
    ])
/>

@if($withErrorMessage && $errorMessage)
    <span class="text-pink-400">test 123 123</span>
@elseif ($withErrorMessage && $errors)
    <ul class="text-pink-400">
        <li>test 123 123</li>
    </ul>
@endif
