<div>
    @include('livewire.personal-profile.modals.form_level_edu')
    @include('livewire.personal-profile.modals.form_teach_history')
    <form wire:submit.prevent="{{ $id > 0 ? 'updateEmployee' : 'saveEmployee' }}">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 ">
            <div class="col-span-2 md:col-span-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ route('personal-profile') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                </svg>
                                ຂໍ້ມູນສ່ວນບຸກຄົນ
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('employees') }}"
                                    class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                                    ພະນັກງານ/ຄູ ແລະ ອາຈານ
                                </a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                    ເພີ່ມຂໍ້ມູນ
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-span-2 md:col-span-4">
                <p class="text-2xl font-black dark:text-white">ຂໍ້ມູນທົວໄປ </p>
                <hr class="h-px my-2 bg-black border-0 dark:bg-gray-700">

            </div>
            <div>
                <label for="full_name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ຊື່ ແລະ ນາມສະກຸນ</label>
                <input type="text" id="full_name" wire:model="full_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('full_name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="birthday" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ວັນເດືອນປິເກີດ
                </label>
                <input type="date" id="birthday" wire:model="birthday"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('birthday')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="single" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ສະຖານະ
                </label>
                <input type="text" id="single" wire:model="single"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('single')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="ethnic" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ຊົນເຜົ່າ
                </label>
                <select id="ethnic" wire:model="ethnic"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>ເລືອກຊົນເຜົ່າ</option>
                    @foreach ($araryEthnic as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                <div>
                    @error('ethnic')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="phones" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ເບີໂທ
                </label>
                <input type="text" id="phones" wire:model="phones"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('phones')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="weight" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ນ້ຳໜັກ
                </label>
                <input type="text" id="weight" wire:model="weight"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('weight')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="height" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ສ່ວນສູງ
                </label>
                <input type="text" id="height" wire:model="height"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('height')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="clothes_size"
                    class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ເບີເສຶ້ອ
                </label>
                <input type="text" id="clothes_size" wire:model="clothes_size"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('clothes_size')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="province" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ແຂວງ
                </label>
                <select id="province" wire:model="province" wire:change="getDistrict($event.target.value)"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>ເລືອກແຂວງ</option>
                    @foreach ($provinces as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name_la }}</option>
                    @endforeach
                </select>
                <div>
                    @error('province')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="district" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ເມືອງ
                </label>
                <select id="district" wire:model="district" wire:change="getVillage($event.target.value)"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>ເລືອກເມືອງ</option>
                    @foreach ($districts as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name_la }}</option>
                    @endforeach

                </select>
                <div>
                    @error('district')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="village" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ບ້ານ
                </label>
                <select id="village" wire:model="village"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>ເລືອກບ້ານ</option>
                    @foreach ($villages as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name_la }}</option>
                    @endforeach

                </select>
                <div>
                    @error('village')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
            <div class="col-span-2 md:col-span-4">
                <p class="text-2xl font-black dark:text-white">ຂໍ້ມູນວຸດທິການສຶກສາ</p>
                <hr class="h-px my-2 bg-black border-0 dark:bg-gray-700">
            </div>
            <div class="col-span-2 md:col-span-4">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-gray-700 dark:text-white">
                            <tr>
                                <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                                    ລະດັບການສຶກສາ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ຊື່ສະຖາບັນ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ແຂວງ/ປະເທດ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ປິການສືກສາ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ຂະແໜ່ງການສືກສືກສາ/ວຸດທິໄດ້ຮັບ
                                </th>
                                <th scope="col" class="text-center text-base px-6 py-3 rounded-tr-lg">
                                    @if ($id == 0 || $update != null)
                                        <button type="button" wire:click="onModalShow"
                                            class="focus:outline-none text-white bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:focus:ring-purple-900">
                                            ເພີ່ມ
                                        </button>
                                    @endif

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($edu_level as $index => $value)
                                @if ($value['education_name'])
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value['education_name'] }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $value['institution_name'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value['country'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value['years'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value['details'] }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($id == 0 || $update != null)
                                                <button type="button"
                                                    wire:click="unsetEducational({{ $index }})"
                                                    class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:focus:ring-red-900 inline-flex items-center">
                                                    <svg class="w-6 h-6 textwhite dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @else
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value->floor->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $value->institution_name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value->country }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value->years }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value->details }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($id == 0 || $update != null)
                                                <button type="button" {{-- wire:click="deleteEducation({{ $value->id }})" --}}
                                                    onclick="confirmdelEducational({{ $value->id }})"
                                                    class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:focus:ring-red-900 inline-flex items-center">
                                                    <svg class="w-6 h-6 textwhite dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
            <div class="col-span-2 md:col-span-4">
                <p class="text-2xl font-black dark:text-white">ຂໍ້ມູນປະຫວັດການສອນ</p>
                <hr class="h-px my-2 bg-black border-0 dark:bg-gray-700">
            </div>
            <div class="col-span-2 md:col-span-4">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-[#20518d] dark:text-white">
                            <tr>
                                <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                                    ຫ້ອງທີ່ສອນ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ສາຍການສອນ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ປິທີ່ສອນ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ໂຮງຮຽນທີ່ສອນ
                                </th>
                                <th scope="col" class="text-center text-base px-6 py-3 rounded-tr-lg">
                                    @if ($id == 0 || $update != null)
                                        <button type="button" wire:click="onModalShowHistory"
                                            class="focus:outline-none text-white bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:focus:ring-purple-900">
                                            ເພີ່ມ
                                        </button>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teach_history as $index => $value)
                                @if ($value['teaching_room_name'])
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value['teaching_room_name'] }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $value['teaching'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value['teaching_years'] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value['teaching_at'] }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($id == 0 || $update != null)
                                                <button type="button"
                                                    wire:click="unsetTeachHistory({{ $index }})"
                                                    class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:focus:ring-red-900 inline-flex items-center">
                                                    <svg class="w-6 h-6 textwhite dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @else
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $value->teachingRoom->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $value->teaching }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value->teaching_years }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $value->teaching_at }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($id == 0 || $update != null)
                                                <button type="button"
                                                    onclick="confirmdelHistory({{ $value->id }})"
                                                    {{-- wire:click="deleteHistory({{ $value->id }})" --}}
                                                    class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:focus:ring-red-900 inline-flex items-center">
                                                    <svg class="w-6 h-6 textwhite dark:text-white" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-5">
            <div class="col-span-2 md:col-span-4">
                <p class="text-2xl font-black dark:text-white">ຂໍ້ມູນການເຮັດວຽກກັບໂຮງຮຽນ Liewkong school</p>
                <hr class="h-px my-2 bg-black border-0 dark:bg-gray-700">
            </div>
            <div>
                <label for="position" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ຕຳແໜ່ງ
                </label>
                <input type="text" id="position" wire:model="position"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('position')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="salary" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ເງີນເດືອນພື້ນຖານ
                </label>
                <input type="text" id="salary" wire:model="salary"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                <div>
                    @error('salary')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="date_start"
                    class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ມຶ້ເຂົ້າວຽກ
                </label>
                <input type="date" id="date_start" wire:model="date_start"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <div>
                    @error('date_start')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="date_end" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ມຶ້ສີ້ນສຸດການເຮັດວຽກ
                </label>
                <input type="date" id="date_end" wire:model="date_end"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <div>
                    @error('date_end')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
        </div>
        @if ($id == 0 || $update != null)
            <center>
                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    ບັນທືກ
                </button>
            </center>
        @endif

    </form>
</div>
<script>
    function modalShow() {
        const $targetEl = document.getElementById('form_level_edu');
        const modal = new Modal($targetEl);
        modal.show();
    }

    function modalclose() {
        const $targetEl = document.getElementById('form_level_edu');
        const modal = new Modal($targetEl);
        modal.hide();
    }

    function modalShowHistory() {
        const $targetEl = document.getElementById('form_teach_history');
        const modal = new Modal($targetEl);
        modal.show();
    }

    function modalcloseHistory() {
        const $targetEl = document.getElementById('form_teach_history');
        const modal = new Modal($targetEl);
        modal.hide();
    }

    function confirmdelEducational(id) {
        Swal.fire({
            title: 'ແນ່ໃຈບໍ່ວ່າຈະລົບ?',
            text: "ຫາກລົບແລ້ວບໍ່ສາມາດກູ້ໃຫ້ຄືນໄດ້!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ຕ້ອງການລົບ',
            cancelButtonText: 'ບໍ່ຕ້ອງການ'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.set('euId', id)
                Livewire.dispatch('EducationDelete');
            }
        })
    }

    function confirmdelHistory(id) {
        Swal.fire({
            title: 'ແນ່ໃຈບໍ່ວ່າຈະລົບ?',
            text: "ຫາກລົບແລ້ວບໍ່ສາມາດກູ້ໃຫ້ຄືນໄດ້!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ຕ້ອງການລົບ',
            cancelButtonText: 'ບໍ່ຕ້ອງການ'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.set('hsId', id)
                Livewire.dispatch('HistoryDelete');
            }
        })
    }
</script>
