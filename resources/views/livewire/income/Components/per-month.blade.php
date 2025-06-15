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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
