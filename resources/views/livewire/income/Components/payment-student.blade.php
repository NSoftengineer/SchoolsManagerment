<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @include('livewire.income.modals.payment-student-modal')

    <div>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <form class="flex items-center mx-auto">
                    <select id="countries"
                        class=" me-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>ເລືອກຫ້ອງຮຽນ</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>

                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.4472 2.10557c-.2815-.14076-.6129-.14076-.8944 0L5.90482 4.92956l.37762.11119c.01131.00333.02257.00687.03376.0106L12 6.94594l5.6808-1.89361.3927-.13363-5.6263-2.81313ZM5 10V6.74803l.70053.20628L7 7.38747V10c0 .5523-.44772 1-1 1s-1-.4477-1-1Zm3-1c0-.42413.06601-.83285.18832-1.21643l3.49538 1.16514c.2053.06842.4272.06842.6325 0l3.4955-1.16514C15.934 8.16715 16 8.57587 16 9c0 2.2091-1.7909 4-4 4-2.20914 0-4-1.7909-4-4Z" />
                                <path
                                    d="M14.2996 13.2767c.2332-.2289.5636-.3294.8847-.2692C17.379 13.4191 19 15.4884 19 17.6488v2.1525c0 1.2289-1.0315 2.1428-2.2 2.1428H7.2c-1.16849 0-2.2-.9139-2.2-2.1428v-2.1525c0-2.1409 1.59079-4.1893 3.75163-4.6288.32214-.0655.65589.0315.89274.2595l2.34883 2.2606 2.3064-2.2634Z" />
                            </svg>

                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search branch name..." required />
                    </div>
                    <button type="submit"
                        class="cursor-pointer p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
            <div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-white dark:text-gray-400">
                            <tr>
                                <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                                    ຊື່ ແລະ ນາມສະກຸນ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ຫ້ອງ
                                </th>
                                <th scope="col" class="text-base px-6 py-3">
                                    ການຈ່າຍ
                                </th>
                                <th scope="col" class="text-base px-6 py-3  rounded-tr-lg">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ທ້າວ ບຸນຄ້ຳ ບຸນຍືນ
                                </th>
                                <td class="px-6 py-4">
                                    ປ 5/2
                                </td>
                                <td class="px-6 py-4">
                                    <select id="small"
                                        class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                        <option selected>ເລືອກການຈ່າຍ</option>
                                        <option value="US">ພາກຮຽນ I</option>
                                        <option value="CA">ພາກຮຽນ II</option>
                                        <option value="FR">ເດື່ອນ ຕໍ່ ເດືອນ</option>
                                    </select>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center  ">
                                        <input id="default-checkbox_all" type="checkbox" value=""
                                            wire:click="clickbbb()"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-checkbox_all"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
    <div>
        <div class="relative overflow-x-auto">
            <div
                class="p-3 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-2">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <button type="button" wire:click="onModalShowFormPaymentStudent()"
                            class="cursor-pointer w-[100%] px-3 py-2 text-xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            ຈ່າຍຄ່າເທີ່ມ
                        </button>
                    </div>
                    <div
                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-3 py-2 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                        <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            ທີ່ຕ້ອງຈ່າຍ: 1,500,000 ₭
                        </h5>
                    </div>
                    <div
                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-3 py-2 rounded-sm dark:bg-green-900 dark:text-green-300">
                        <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            ຈ່າຍແລ້ວ: 1,500,000 ₭
                        </h5>
                    </div>
                    <div
                        class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-3 py-2 rounded-sm dark:bg-purple-900 dark:text-purple-300">
                        <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            ຍອດທີ່ເຫຼືອ: 1,500,000 ₭
                        </h5>
                    </div>
                </div>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                            ຄ່າຮຽນ
                        </th>
                        <th scope="col" class="text-base px-6 py-3">
                            ເດືອນ/ປິ
                        </th>
                        <th scope="col" class="text-base px-6 py-3">

                        </th>
                        <th scope="col" class="text-base px-6 py-3 rounded-tr-lg">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox_all" type="checkbox" value="" wire:click="clickbbb()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox_all"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 8; $i < 12; $i++)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                1,500,000
                            </th>
                            <td class="px-6 py-4">
                                @php $months = $i + 1;  @endphp
                                @if ($months < 10)
                                    0{{ $months }}
                                @else
                                    {{ $months }}
                                @endif
                                / 2025
                            </td>
                            <td class="px-6 py-4">
                                @if ($months == 9)
                                    <span
                                        class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300">ເປີດຮຽນໃໝ່</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox_{{ $i }}" type="checkbox"
                                        {{ $months == 9 ? 'checked' : '' }} value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox_{{ $i }}"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                </div>
                            </td>
                        </tr>
                    @endfor
                    @for ($ii = 0; $ii < 8; $ii++)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                1,500,000
                            </th>
                            <td class="px-6 py-4">
                                @php $months_2 = $ii + 1;  @endphp
                                @if ($months_2 < 10)
                                    0{{ $months_2 }}
                                @else
                                    {{ $months_2 }}
                                @endif
                                / 2026
                            </td>
                            <td class="px-6 py-4">
                                @if ($months == 9)
                                    <span
                                        class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300">ເປີດຮຽນໃໝ່</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox_{{ $ii }}" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox_{{ $ii }}"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>

            </table>
        </div>

    </div>
</div>
<script>
    function modalShowFormPaymentStudent() {
        const $targetEl = document.getElementById('form_payment_student');
        const modal = new Modal($targetEl);
        modal.show();
    }

    function modalcloseFormPaymentStudent() {
        const $targetEl = document.getElementById('form_payment_student');
        const modal = new Modal($targetEl);
        modal.hide();
    }
</script>
