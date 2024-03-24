@props([
    'type' => null,
    'id' => null,
    'name' => null,
    'placeholder' => null,
    'withErrorMessage' => false,
    'errorMessage' => null,
    'label',
    'value' => null
])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <x-forms.input
        :type="$type"
        :id="$id"
        :name="$name"
        :placeholder="$placeholder"
        :withErrorMessage="$withErrorMessage"
        :errorMessage="$errorMessage"
        :value="$value"
    />
</div>
