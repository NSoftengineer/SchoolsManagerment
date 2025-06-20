<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                ຄ່າຮຽນ
            </th>
            <th scope="col" class="text-base px-6 py-3">
                ພາກຮຽນ
            </th>
            <th scope="col" class="text-base px-6 py-3">

            </th>
            <th scope="col" class="text-base px-6 py-3 rounded-tr-lg">
            </th>
        </tr>
    </thead>
    <tbody>
        @if ($TuitionFees != '')
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $TuitionFees != '' ? number_format($TuitionFees->midterm) : '' }}
                </th>
                <td class="px-6 py-4">
                    ພາກຮຽນ I
                </td>
                <td class="px-6 py-4">
                    <span
                        class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300">ເປີດຮຽນໃໝ່</span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox_" type="checkbox" value="" disabled checked
                            class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                    </div>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $TuitionFees != '' ? ($TuitionFees->final != '' ? number_format($TuitionFees->final) : number_format($TuitionFees->midterm)) : '' }}
                </th>
                <td class="px-6 py-4">
                    ພາກຮຽນ II
                </td>
                <td class="px-6 py-4"></td>
                <td class="px-6 py-4">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox_" type="checkbox" wire:model.live="select_final"
                            {{ $TuitionFees->final != '' ? 'disabled checked' : '' }}
                            wire:click="selectCost('{{ $TuitionFees != '' ? $TuitionFees->midterm : '' }}')"
                            class="w-4 h-4 text-{{ $TuitionFees->final != '' ? 'gray' : '' }}-600 bg-{{ $TuitionFees->final != '' ? 'gray' : '' }}-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                    </div>
                </td>
            </tr>
        @endif

    </tbody>

</table>
