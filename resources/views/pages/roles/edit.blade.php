<x-layouts.main>
    <x-layouts.mainbar title="Users">
        <x-units.card>
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Edit User</h1>
                <div>
                    <x-forms.button appearance="outlined" theme="primary" url="{{ route('users.index') }}" class="mr-2">
                        Back
                    </x-forms.button>
                    <x-forms.button appearance="solid" theme="primary" form="add-user-form">
                        Save
                    </x-forms.button>
                </div>
            </div>
            <div class="w-4/12">
                <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST" id="add-user-form">
                    @csrf
                    @method('PUT')
                    <x-groups.input-group
                        type="text"
                        name="name"
                        placeholder="Input the user's name"
                        label="Name"
                        withErrorMessage
                        value="{{ old('name', $user->name) }}"
                    />
                    <x-groups.input-group
                        type="email"
                        name="email"
                        placeholder="Input the user's email"
                        label="Email"
                        withErrorMessage
                        value="{{ old('email', $user->email) }}"
                    />
                    <x-groups.input-group
                        type="password"
                        name="password"
                        placeholder="Left it blank to not change it"
                        label="Password"
                        withErrorMessage
                    />
                </form>
            </div>
        </x-units>
    </x-layouts.mainbar>
</x-layouts.main>
