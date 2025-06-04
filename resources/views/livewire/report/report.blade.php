<div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="text-xl text-gray-900 text-center md:text-start dark:text-white">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">ເລຶອກລາຍງານ <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ລາຍງານການລົງທະບຽນ</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ລາຍງານລາຍຮັບອື່ນໆ</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ລາຍງານລາຍຈ່າຍ</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ລາຍງານໜີ້ຄ້າງຊຳລະ</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="grid grid-flow-col justify-items-center md:justify-items-end">
            <button type="button"
                class="text-base text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                ນຳອອກລາຍງານເປັນ Excel
            </button>
        </div>

        <div class="md:col-span-2">
            <table class="  w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                            ລຳດັບ
                        </th>
                        <th scope="col" class="text-base px-6 py-3">
                            ຊັ້ນຮຽນ
                        </th>
                        <th scope="col" class="text-base px-6 py-3 text-center">
                            ຄ່າຮຽນ
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        @php $a = $i + 1;  @endphp
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $a }}
                            </th>
                            <td class="px-6 py-4">
                                {{ 'ປ 5/2' }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ '2,600,000' }}
                            </td>
                        </tr>
                    @endfor

                </tbody>
                <tfoot class="bg-[#20518d] text-white">
                    <tr>
                        <td colspan="2" class="text-base px-6 py-4 text-center">
                            ລວມທັງໝົດ
                        </td>
                        <td class="text-base px-6 py-4 text-center">
                            50,000,000
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
