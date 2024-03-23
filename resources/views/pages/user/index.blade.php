<x-layouts.main>
    <x-layouts.mainbar title="Users">
        <x-units.card>
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">User List</h1>
                <x-forms.button appearance="outlined" theme="primary" url="{{ route('users.create') }}">
                    Add User
                </x-forms.button>
            </div>
            <table class="w-full table-fixed">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="w-4/12 py-2 px-4 text-left">Nama</th>
                        <th class="w-4/12 py-2 px-4 text-left">Email</th>
                        <th class="w-3/12 py-2 px-4 text-left">Role</th>
                        <th class="w-1/12 py-2 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border py-2 px-4">John Doe</td>
                        <td class="border py-2 px-4">john.doe@example.com</td>
                        <td class="border py-2 px-4">30</td>
                        <td class="border py-2 px-4">
                            <button>
                                <x-icons.trash/>
                            </button>
                            <button>
                                <x-icons.pencil-square/>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </x-units>
    </x-layouts.mainbar>
</x-layouts.main>
