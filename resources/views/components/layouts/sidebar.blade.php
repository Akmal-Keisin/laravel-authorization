<div class="h-screen w-2/12 border-r bg-white border-gray-200 overflow-y-auto">
    <ul class="mt-8">
        @foreach($menus as $menu)
            <li class="my-0">
                <a
                    href="{{ route($menu['route']) }}"
                    @class([
                        'block px-4 py-4 text-gray-800 hover:bg-gray-200',
                        'bg-gray-200' => $menu['isActive']
                    ])>
                    {{ $menu['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
