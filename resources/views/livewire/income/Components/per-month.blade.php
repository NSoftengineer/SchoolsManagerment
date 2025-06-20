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
            </th>
        </tr>
    </thead>
    <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                09 / 2025
            </td>
            <td class="px-6 py-4">
                <span
                    class="bg-purple-100 text-purple-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300">ເປີດຮຽນໃໝ່</span>

            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    <input id="default-checkbox_09" type="checkbox" value=""
                        {{ $TuitionFees != null ? ($TuitionFees->september != null ? 'checked disabled' : '') : '' }}
                        class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->september != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                10 / 2025
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->october != null)
                            <input id="default-checkbox_10" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->october != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->october != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_10" type="checkbox" wire:model="select_october"
                                wire:click="selectCost('{{ $costPermonth }}','10')"
                                {{ $TuitionFees != null ? ($TuitionFees->october != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->october != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                11 / 2025
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->november != null)
                            <input id="default-checkbox_11" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->november != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->november != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_11" type="checkbox" wire:model="select_november"
                                wire:click="selectCost('{{ $costPermonth }}','11')"
                                {{ $TuitionFees != null ? ($TuitionFees->november != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->november != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                12 / 2025
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->december != null)
                            <input id="default-checkbox_12" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->december != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->december != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_12" type="checkbox" wire:model="select_december"
                                wire:click="selectCost('{{ $costPermonth }}','12')"
                                {{ $TuitionFees != null ? ($TuitionFees->december != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->december != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                01 / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->january != null)
                            <input id="default-checkbox_01" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->january != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->january != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_01" type="checkbox" wire:model="select_january"
                                wire:click="selectCost('{{ $costPermonth }}','1')"
                                {{ $TuitionFees != null ? ($TuitionFees->january != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->january != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                02 / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->february != null)
                            <input id="default-checkbox_02" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->february != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->february != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_02" type="checkbox" wire:model="select_february"
                                wire:click="selectCost('{{ $costPermonth }}','2')"
                                {{ $TuitionFees != null ? ($TuitionFees->february != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->february != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                03 / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->march != null)
                            <input id="default-checkbox_03" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->march != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->march != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_03" type="checkbox" wire:model="select_march"
                                wire:click="selectCost('{{ $costPermonth }}','3')"
                                {{ $TuitionFees != null ? ($TuitionFees->march != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->march != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                04 / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->april != null)
                            <input id="default-checkbox_04" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->april != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->april != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_04" type="checkbox" wire:model="select_april"
                                wire:click="selectCost('{{ $costPermonth }}','4')"
                                {{ $TuitionFees != null ? ($TuitionFees->april != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->april != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                05 / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->may != null)
                            <input id="default-checkbox_05" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->may != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->may != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_05" type="checkbox" wire:model="select_may"
                                wire:click="selectCost('{{ $costPermonth }}','5')"
                                {{ $TuitionFees != null ? ($TuitionFees->may != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->may != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                06 / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->june != null)
                            <input id="default-checkbox_06" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->june != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->june != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_06" type="checkbox" wire:model="select_june"
                                wire:click="selectCost('{{ $costPermonth }}','6')"
                                {{ $TuitionFees != null ? ($TuitionFees->june != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->june != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                07 / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->july != null)
                            <input id="default-checkbox_07" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->july != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->july != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_07" type="checkbox" wire:model="select_july"
                                wire:click="selectCost('{{ $costPermonth }}','7')"
                                {{ $TuitionFees != null ? ($TuitionFees->july != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->july != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ number_format($costPermonth) }}
            </th>
            <td class="px-6 py-4">
                08/ / 2026
            </td>
            <td class="px-6 py-4">
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center mb-4">
                    @if ($TuitionFees != null)
                        @if ($TuitionFees->august != null)
                            <input id="default-checkbox_08" type="checkbox"
                                {{ $TuitionFees != null ? ($TuitionFees->august != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->august != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @else
                            <input id="default-checkbox_08" type="checkbox" wire:model="select_august"
                                wire:click="selectCost('{{ $costPermonth }}','8')"
                                {{ $TuitionFees != null ? ($TuitionFees->august != null ? 'checked disabled' : '') : '' }}
                                class="w-4 h-4 text-{{ $TuitionFees != null ? ($TuitionFees->august != null ? 'gray' : 'blue') : '' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        @endif
                    @endif

                </div>
            </td>
        </tr>
    </tbody>

</table>
