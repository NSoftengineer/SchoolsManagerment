<div class="md:col-span-5">
    <button type="button" wire:click="onClickTable(0,0)"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2.5 me-1 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        ຍ້ອນກັບ
    </button>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-[#20518d] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-tl-lg">
                        ຫ້ອງຮຽນ
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ຊື່ ແລະ ນາມສະກຸນ
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ພາກຮຽນ I
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ພາກຮຽນ II
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ເດືອນ 09
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ເດືອນ 10
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 11
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 12
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 01
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 02
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 03
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 04
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 05
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 06
                    </th>
                    <th scope="col" class=" px-6 py-3">
                        ເດືອນ 07
                    </th>
                    <th scope="col" class="px-6 py-3  rounded-tr-lg">
                        ເດືອນ 08
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studentroomData as $key => $value)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $value->studentclass->classroom->name }}
                        </th>
                        <th class="px-6 py-4 ">
                            {{ $value->first_name }} {{ $value->last_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->midterm) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->final) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->september) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->october) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->november) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->december) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->january) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->february) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->march) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->april) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->may) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->june) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->july) : '-' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->tuitionfees != null ? number_format($value->tuitionfees->august) : '-' }}
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
