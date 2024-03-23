@props([
    'title'
])
<x-layouts.header :$title/>

<div class="flex-1 bg-gray-100 p-8">

    @session('error')
        <div class="bg-red-100 border border-red-500 p-8 rounded-lg shadow-lg mb-4">
            <div class="text-red-500 font-bold">Error :</div>
            <div class="text-red-500">{{ $value }}</div>
        </div>
    @endsession

    @session('success')
        <div class="bg-green-100 border border-green-500 p-8 rounded-lg shadow-lg mb-4">
            <div class="text-green-500 font-bold">Success</div>
            <div class="text-green-500">{{ $value }}</div>
        </div>
    @endsession

    @if ($errors->any())
        <div class="bg-red-100 border border-red-500 p-8 rounded-lg shadow-lg mb-4">
            <div class="text-red-500 font-bold">Error :</div>
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    {{ $slot }}
</div>

