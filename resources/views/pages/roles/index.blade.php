<x-layouts.main>
    <x-layouts.mainbar title="Roles">
        <x-units.card>
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Role List</h1>
                <x-forms.button appearance="solid" theme="primary" url="{{ route('roles.create') }}">
                    Add Role
                </x-forms.button>
            </div>
            <table class="w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left w-3/4">Name</th>
                        <th class="py-2 px-4 text-left w-1/4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td class="border py-2 px-4">{{ $role->name }}</td>
                            <td class="border py-2 px-4">
                                <div class="flex items-center space-x-2">
                                    <form action="{{ route('roles.destroy', ['role' => $role->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-forms.icon-button>
                                            <x-slot name="icon">
                                                <x-icons.trash/>
                                            </x-slot>
                                        </x-forms.icon-button>
                                    </form>
                                    <x-forms.icon-button url="{{ route('roles.edit', ['role' => $role->id]) }}">
                                        <x-slot name="icon">
                                            <x-icons.pencil-square/>
                                        </x-slot>
                                    </x-forms.icon-button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="border py-2 px-4 text-center">Empty</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </x-units>
    </x-layouts.mainbar>
</x-layouts.main>
