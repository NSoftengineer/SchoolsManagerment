<!-- Main modal -->
<div id="form_level_edu" wire:ignore.self data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full ">
        <!-- Modal content -->
        <form wire:submit="saveEduLevel">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 border-2 border-solid border-[#20518d]">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        ຂໍ້ມູນວຸດທິການສຶກສາ
                    </h3>
                    <button type="button" wire:click="onModalClose"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="form_level_edu">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="IsId" hidden
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ID
                            </label>
                            <input hidden type="text" id="IsId"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <label for="education_level"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ລະດັບການສືກສາ
                            </label>
                            <select id="education_level" wire:model="education_level"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ລະດັບການສືກສາ</option>
                                @foreach ($floorstudy as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @error('education_level')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="institution_name"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຊື່ສະຖາບັນ</label>
                            <input type="text" id="institution_name" wire:model="institution_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('institution_name')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="country"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ແຂວງ/ປະເທດ
                            </label>
                            <input type="text" id="country" wire:model="country"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('country')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="years"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ປີການສືກສາ
                            </label>
                            <select id="years" wire:model="years"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກປີການສືກສາ</option>
                                @foreach ($yearstudy as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('years')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="details"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຂະແໜ່ງການສືກສືກສາ/ວຸດທິໄດ້ຮັບ
                            </label>
                            <input type="text" id="details" wire:model="details"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('details')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal footer -->
                <div
                    class="grid grid-flow-col justify-items-center md:justify-items-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div>

                        <button wire:click="onModalClose" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-[#a6a6a6] hover:bg-[#666666] rounded-lg border border-gray-200  hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-[#a6a6a6] dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-[#666666]">
                            ປີດ
                        </button>
                        @can('students create')
                            <button type="submit"
                                class="text-white bg-[#20518d] hover:bg-[#133053] focus:ring-4 focus:outline-none focus:ring-[#133053] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#20518d] dark:hover:bg-[#133053] dark:focus:ring-[#20518d]">
                                ບັນທຶກ
                            </button>
                        @endcan
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
