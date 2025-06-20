<!-- Main modal -->
<div id="studyroom" wire:ignore.self data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full ">
        <!-- Modal content -->
        <form wire:submit="SaveStudyRoom">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 border-2 border-solid border-[#20518d]">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        ຂໍ້ມູນຫ້ອງຮຽນ
                    </h3>
                    <button type="button" wire:click="onModalClose"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="studyroom">
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
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label for="floorstudies_id"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຊັ້ນຮຽນ
                            </label>

                            <select id="floorstudies_id" wire:model="floorstudies_id" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກຊັ້ນຮຽນ</option>
                                @foreach ($floorstudiesData as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                            <div>
                                @error('floorstudies_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="name"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຫ້ອງຮຽນ
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
                </div>

                <!-- Modal footer -->
                <div
                    class="grid grid-flow-col justify-items-center md:justify-items-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div>

                        <button wire:click="onModalClose" type="button"
                            class="cursor-pointer py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-[#a6a6a6] hover:bg-[#666666] rounded-lg border border-gray-200  hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-[#a6a6a6] dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-[#666666]">
                            ປີດ
                        </button>
                        @can('setting study room create')
                            <button type="submit"
                                class="cursor-pointer text-white bg-[#20518d] hover:bg-[#133053] focus:ring-4 focus:outline-none focus:ring-[#133053] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#20518d] dark:hover:bg-[#133053] dark:focus:ring-[#20518d]">
                                ບັນທຶກ
                            </button>
                        @endcan
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
