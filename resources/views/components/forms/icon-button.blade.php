@props([
  'url' => null,
  'control',
  'icon',
  'type'
])

@php
  $classes = "rounded inline-block leading-normal"
@endphp

@if ($url)
  <a
    href="{{ $url }}"
    class="{{ $classes }}"
  >
    @isset($icon)
      {{ $icon }}
    @endisset
  </a>
@else
  <button
    type="{{ isset($type) && $type === 'button' ? 'button' : 'submit' }}"
    @isset($control)
      aria-controls="{{ $control }}"
    @endisset
    class="{{ $classes }}"
  >
    @isset($icon)
      {{ $icon }}
    @endisset
  </button>
@endif
