<div>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 pb-2">
        <div class="md:col-span-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ROLE TYPE
            </label>
            {{-- wire:model="roleuser" --}}
            <select id="countries" wire:model="roleuser" wire:click="changeEvent()"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a role type</option>
                @foreach ($title_role as $key => $value)
                    <option value="{{ $value->id }}">
                        {{ $value->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="md:col-span-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                PERMISSIONS
            </label>
            {{-- {{ print_r($permission) }} --}}
        </div>
        @foreach ($permissionData as $key => $value)
            <div>
                <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700">
                    <input type="checkbox" id="default-{{ $key }}" type="checkbox" value="{{ $value->name }}"
                        wire:model.live="permission"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-{{ $key }}"
                        class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        {{ $value->name }}
                    </label>
                </div>
            </div>
        @endforeach

    </div>
    <button type="button" wire:click="createRoleForUser"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Save
    </button>
    {{-- <button type="button" wire:click="addRole"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Add Role
    </button> --}}
</div>
