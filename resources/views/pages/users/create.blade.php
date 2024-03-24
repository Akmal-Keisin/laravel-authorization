<x-layouts.main>
    <x-layouts.mainbar title="Users">
        <x-units.card>
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Add User</h1>
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
                <form action="{{ route('users.store') }}" method="POST" id="add-user-form">
                    @csrf

                    <x-groups.input-group
                        type="text"
                        name="name"
                        placeholder="Input the user's name"
                        label="Name"
                        withErrorMessage
                    />
                    <x-groups.input-group
                        type="email"
                        name="email"
                        placeholder="Input the user's email"
                        label="Email"
                        withErrorMessage
                    />
                    <x-groups.input-group
                        type="password"
                        name="password"
                        placeholder="Input the user's name"
                        label="Password"
                        withErrorMessage
                    />
                </form>
            </div>
        </x-units>
    </x-layouts.mainbar>
</x-layouts.main>