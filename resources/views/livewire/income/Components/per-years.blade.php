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
                {{-- <div class="flex items-center mb-4">
                    <input id="default-checkbox_all" type="checkbox" value="" wire:click="clickbbb()"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox_all"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                </div> --}}
            </th>
        </tr>
    </thead>
    <tbody>
        {{-- @php $studycost = 0; @endphp
        @php $numb = 0; @endphp --}}
        @foreach ($TuitionFees as $key => $value)
            {{-- @php $numb = $key+1; @endphp --}}
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{-- @php $studycost = $value->student->studentclass->studycost->price; @endphp --}}
                    {{ number_format($value->student->studentclass->studycost->price) }}
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
        @endforeach

        @if ($numb == 1)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ number_format($studycost) }}
                </th>
                <td class="px-6 py-4">
                    ພາກຮຽນ II
                </td>
                <td class="px-6 py-4">
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox_" type="checkbox" value=""
                            wire:click="selectCost('{{ $studycost }}')"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox_"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                    </div>
                </td>
            </tr>
        @endif

    </tbody>

</table>
