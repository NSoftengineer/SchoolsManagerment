<div>

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
            <p class="text-2xl font-black dark:text-white">ຂໍ້ມູນທົວໄປ</p>
            <hr class="h-px my-2 bg-black border-0 dark:bg-gray-700">

        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ຊື່ ແລະ ນາມສະກຸນ</label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ວັນເດືອນປິເກີດ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ສະຖານະ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ຊົນເຜົ່າ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ເບີໂທ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ນ້ຳນັກ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ສ່ວນສູງ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ເບີເສຶ້ອ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>

        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ແຂວງ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ເມືອງ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ບ້ານ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
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
                                <button type="button"
                                    class="focus:outline-none text-white bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:focus:ring-purple-900">
                                    ເພີ່ມ
                                </button>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ມັດທະຍົມຕອນຕົ້ນ
                            </th>
                            <td class="px-6 py-4">
                                RMUTI
                            </td>
                            <td class="px-6 py-4">
                                LAOS
                            </td>
                            <td class="px-6 py-4">
                                2025
                            </td>
                            <td class="px-6 py-4">
                                ສາມັນ
                            </td>
                            <td></td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ມັດທະຍົມຕອນປາຍ
                            </th>
                            <td class="px-6 py-4">
                                RMUTI
                            </td>
                            <td class="px-6 py-4">
                                LAOS
                            </td>
                            <td class="px-6 py-4">
                                2025
                            </td>
                            <td class="px-6 py-4">
                                ສາມັນ
                            </td>
                            <td></td>

                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ປະລີນຍາຕີ
                            </th>
                            <td class="px-6 py-4">
                                RMUTI
                            </td>
                            <td class="px-6 py-4">
                                LAOS
                            </td>
                            <td class="px-6 py-4">
                                2025
                            </td>
                            <td class="px-6 py-4">
                                computer engeneering
                            </td>
                            <td></td>

                        </tr>
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
                                <button type="button"
                                    class="focus:outline-none text-white bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:focus:ring-purple-900">
                                    ເພີ່ມ
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ປ.5/2
                            </th>
                            <td class="px-6 py-4">
                                ຄະນິດສາດ
                            </td>
                            <td class="px-6 py-4">
                                2024/2025
                            </td>
                            <td class="px-6 py-4">
                                Liewkong school
                            </td>
                            <td></td>
                        </tr>
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
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ຕຳແໜ່ງ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ເງີນເດືອນພື້ນຖານ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ມຶ້ເຂົ້າວຽກ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div>
            <label for="name" class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                ມຶ້ສີ້ນສຸດການເຮັດວຽກ
            </label>
            <input type="text" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            <div>
                @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
    </div>

    <center>
        <button type="button"
            class="  text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            ບັນທືກ
        </button>
    </center>
</div>
