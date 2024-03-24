<x-layouts.main>
    <x-layouts.mainbar title="Users">
        <x-units.card>
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">User List</h1>
                <x-forms.button appearance="solid" theme="primary" url="{{ route('users.create') }}">
                    Add User
                </x-forms.button>
            </div>
            <table class="w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left">Nama</th>
                        <th class="py-2 px-4 text-left">Email</th>
                        <th class="py-2 px-4 text-left">Role</th>
                        <th class="py-2 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td class="border py-2 px-4">{{ $user->name }}</td>
                            <td class="border py-2 px-4">{{ $user->email }}</td>
                            <td class="border py-2 px-4">roles</td>
                            <td class="border py-2 px-4">
                                <div class="flex items-center space-x-2">
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-forms.icon-button>
                                            <x-slot name="icon">
                                                <x-icons.trash/>
                                            </x-slot>
                                        </x-forms.icon-button>
                                    </form>
                                    <x-forms.icon-button url="{{ route('users.edit', ['user' => $user->id]) }}">
                                        <x-slot name="icon">
                                            <x-icons.pencil-square/>
                                        </x-slot>
                                    </x-forms.icon-button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="border py-2 px-4">Empty</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </x-units>
    </x-layouts.mainbar>
</x-layouts.main>
