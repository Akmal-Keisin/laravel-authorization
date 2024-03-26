<x-layouts.main>
    <x-layouts.mainbar title="Permissions">
        <x-units.card>
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Edit Permission</h1>
                <div>
                    <x-forms.button appearance="outlined" theme="primary" url="{{ route('permissions.index') }}" class="mr-2">
                        Back
                    </x-forms.button>
                    <x-forms.button appearance="solid" theme="primary" form="add-permission-form">
                        Save
                    </x-forms.button>
                </div>
            </div>
            <div class="w-4/12">
                <form action="{{ route('permissions.update', ['permission' => $permission->id]) }}" method="POST" id="add-permission-form">
                    @csrf
                    @method('PUT')
                    <x-groups.input-group
                        type="text"
                        name="name"
                        placeholder="Input the permission name"
                        label="Name"
                        value="{{ $permission->name }}"
                        withErrorMessage
                    />
                </form>
            </div>
        </x-units>
    </x-layouts.mainbar>
</x-layouts.main>
