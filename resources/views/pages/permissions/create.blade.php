<x-layouts.main>
    <x-layouts.mainbar title="Permissions">
        <x-units.card>
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Add Permission</h1>
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
                <form action="{{ route('permissions.store') }}" method="POST" id="add-permission-form" autocomplete="off">
                    @csrf
                    <x-groups.input-group
                        type="text"
                        name="name"
                        placeholder="Input the permission name"
                        label="Name"
                        withErrorMessage
                    />
                </form>
            </div>
        </x-units>
    </x-layouts.mainbar>
</x-layouts.main>
