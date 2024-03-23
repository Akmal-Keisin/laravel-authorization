@props([
    'title'
])
<div class="bg-gray-800 py-4 px-6 text-white font-bold flex justify-between">
    {{ $title }}
    <form action="{{ route('auth-logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</div>
