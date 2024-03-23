@props([
    'type' => null,
    'id' => null,
    'name' => null,
    'placeholder' => null,
    'withErrorMessage' => false,
    'errorMessage' => null,
    'label'
])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <x-forms.input
        :type="null"
        :id="null"
        :name="null"
        :placeholder="null"
        :withErrorMessage="false"
        :errorMessage="null"
    />
</div>
