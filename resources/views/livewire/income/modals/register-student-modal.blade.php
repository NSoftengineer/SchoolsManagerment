<div id="form_register_student" wire:ignore.self data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full ">
        <!-- Modal content -->
        <form wire:submit="paymentSave">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 border-2 border-solid border-[#20518d]">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        ຮັບເງີນ & ພິມໃບບີນ
                    </h3>
                    <button type="button" wire:click="onModalCloseFormRegisterStudent"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="form_register_student">
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
                        <div class="md:col-span-2">
                            <h5
                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                ຮັບເງິນການເສຍຄ່າເທີ່ມ
                            </h5>
                        </div>
                        <div class="md:col-span-2">
                            <div
                                class="text-center mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                                ຈຳນວນທີ່ຕ້ອງຈ່າຍ: {{ number_format($ItemstudentTotal) }}
                            </div>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700">
                            <input id="payment-1" type="radio" value="3" name="payment" wire:model.live="payment"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="payment-1"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                ຮັບເງີນສົດ
                            </label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700">
                            <input checked id="payment-2" type="radio" value="1" name="payment"
                                wire:model.live="payment"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="payment-2"
                                class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                ຮັບເງີນໂອນ
                            </label>
                        </div>
                        {{-- <div class="mb-6 md:col-span-2">
                            <label for="large-input"
                                class="text-2xl block mb-2 font-medium text-gray-900 dark:text-white">
                                ຈຳນວນທີ່ຮັບເງິນ
                            </label>
                            <input type="text" id="large-input"
                                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div> --}}
                        {{-- <div class="mb-6 md:col-span-2">
                            <label for="large-input"
                                class="text-2xl block mb-2 font-medium text-gray-900 dark:text-white">
                                ຈຳນວນເງິນທີ່ທອນຄືນ
                            </label>
                            <input type="text" id="large-input" readonly
                                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div> --}}
                    </div>

                </div>

                <!-- Modal footer -->
                <div
                    class="grid grid-flow-col justify-items-center md:justify-items-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div>

                        <button wire:click="onModalCloseFormRegisterStudent" type="button"
                            class="py-2.5 px-5 ms-3 text-xl font-medium text-white focus:outline-none bg-[#a6a6a6] hover:bg-[#666666] rounded-lg border border-gray-200  hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-[#a6a6a6] dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-[#666666]">
                            ປີດ
                        </button>
                        @can('income create')
                            <button type="submit"
                                class="text-white bg-[#20518d] hover:bg-[#133053] focus:ring-4 focus:outline-none focus:ring-[#133053] font-medium rounded-lg text-xl px-5 py-2.5 text-center dark:bg-[#20518d] dark:hover:bg-[#133053] dark:focus:ring-[#20518d]">
                                ບັນທຶກການຈ່າຍ & ພີມບີນ
                            </button>
                        @endcan
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
