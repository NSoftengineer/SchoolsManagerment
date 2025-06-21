<div>
    <center class="pt-0">
        <div id="print" style="width: 210mm;height: 297mm;border: 1px solid #f1f1f1;background: #FFFFFF">
            <div class="flex ...">
                <div class="w-1/4 ...">
                    <img src="{{ asset('assets/logo.jpg') }}" class="rounded-full w-40 h-40">
                </div>
                <div class="w-3/4 grid justify-items-start pt-5">
                    <div class="text-xl">
                        <div class="grid justify-items-start">ໂຮງຮຽນລາວ ຈີນລຽວກົງ 寮龚华文学校</div>
                        <div class="grid justify-items-start">ທີ່ຢູ່: ບ້ານ ນາຫ້ອມ, ເມືອງ ຫລວງນໍ້າທາ, ແຂວງ ຫລວງນໍ້າທາ
                        </div>
                        <div class="grid justify-items-start">ເບີໂທ: +856 20 92010816</div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 ">
                <div class="grid justify-items-center col-span-2">
                    <div class="text-2xl font-semibold">ໃບຮັບເງີນ/Receipt</div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 pl-5 pr-5 pt-2">
                {{-- <div class="grid justify-items-start"> --}}
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-900 border border-gray-900">
                        <tbody>
                            <tr>
                                <th class="px-6 py-1 border border-gray-900 text-gray-900">ນັກຮຽນ</th>
                                <td class="px-6 py-1 border border-gray-900 text-gray-900">
                                    {{ $infomation->student->first_name }} {{ $infomation->student->last_name }}
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <th class="px-6 py-1 border border-gray-900 text-gray-900">ຊັ້ນຮຽນ</th>
                                <td class="px-6 py-1 border border-gray-900 text-gray-900">
                                    {{ $infomation->classroom->floorstudy->name }}
                                </td>
                            </tr>
                            <tr class="bg-white">
                                <th class="px-6 py-1 border border-gray-900 text-gray-900">ໃບບີນ</th>
                                <td class="px-6 py-1 border border-gray-900 text-gray-900">{{ $invoice }}</td>
                            </tr>
                            <tr class="bg-white">
                                <th class="px-6 py-1 border border-gray-900 text-gray-900">ວັນທີ</th>
                                <td class="px-6 py-1 border border-gray-900 text-gray-900">
                                    {{ Carbon\carbon::parse($infomation->created_at)->format('d/m/Y ') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- </div> --}}
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-900 border border-gray-900">
                        <table class="w-full text-sm text-left text-gray-900 border border-gray-900">
                            <tbody>
                                <tr>
                                    <th class="px-6 py-1 border border-gray-900 text-gray-900">ສົກຮຽນ</th>
                                    <td class="px-6 py-1 border border-gray-900">
                                        {{ $infomation->yearstudy->name }}
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <th class="px-6 py-1 border border-gray-900 text-gray-900">ຫ້ອງຮຽນ</th>
                                    <td class="px-6 py-1 border border-gray-900 text-gray-900">
                                        {{ $infomation->classroom->name }}
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <th class="px-6 py-1 border border-gray-900 text-gray-900">ຄ່າຮຽນ ເດືອນ/ພາກ</th>
                                    <td class="px-6 py-1 border border-gray-900 text-gray-900">
                                        {{ $infomation->tuitionfees->type_payment }}
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <th class="px-6 py-1 border border-gray-900 text-gray-900">ການຈ່າຍ</th>
                                    <td class="px-6 py-1 border border-gray-900 text-gray-900">
                                        {{ $infomation->tuitionfees->type_payment_label }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 pl-5 pr-5 pt-2">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-900 border border-gray-900">
                        <table class="w-full text-sm text-left text-gray-900 border border-gray-900">
                            <thead class="text-xs text-gray-900 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border border-gray-900">ລຳດັບ</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-900">ລາຍການ</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-900">ຈຳນວນ</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-900">ຈຳນວນເງິນ</th>
                                    <th scope="col" class="px-6 py-3 border border-gray-900">ລວມຈຳນວນເງິນ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $value)
                                    <tr class="bg-white">
                                        <td class="px-6 py-1 border border-gray-900 text-gray-900 text-center">
                                            {{ $key + 1 }}
                                        </td>
                                        <td class="px-6 py-1 border border-gray-900 text-gray-900">
                                            {{ $value->items_title }}</td>
                                        <th class="px-6 py-1 border border-gray-900 text-center">
                                            {{ $value->amount }}
                                        </th>
                                        <th class="px-6 py-1 border border-gray-900 text-end">
                                            {{ number_format($value->amount_per_unit) }}
                                        </th>
                                        <th class="px-6 py-1 border border-gray-900 text-end">
                                            {{ number_format($value->total_amout) }}
                                        </th>
                                    </tr>
                                @endforeach

                                <tr class="bg-white">
                                    <td class="px-6 py-1 border border-gray-900 text-gray-900" colspan="4">
                                        ລວມເປັນເງິນ</td>
                                    <th class="px-6 py-1 border border-gray-900 text-end">
                                        {{ number_format($infomation->receive_amount) }}
                                    </th>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-1 border border-gray-900 text-gray-900" colspan="4">
                                        ລວມຈ່າຍເປັນເງິນທັງໝົດ
                                    </td>
                                    <th class="px-6 py-1 border border-gray-900 text-end">
                                        {{ number_format($infomation->receive_amount) }}
                                    </th>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-1 border border-gray-900 text-gray-900" colspan="4">
                                        ຍອດຄົງເຫຼືອ</td>
                                    <th class="px-6 py-1 border border-gray-900 text-end">
                                        {{ number_format($infomation->over_amount) }}
                                    </th>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-1 border border-gray-900 text-gray-900" colspan="5">
                                        <strong>ໝາຍເຫດ:</strong> ກະລຸນາເກັບໃບບິນໄວ້ ທຸກຄັ້ງເພື່ອຢັ້ງຢືນການຈ່າຍ
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 pl-5 pr-5 pt-10">
                <div>
                    ລາຍເຊັນຜູ້ຈ່າຍ
                    <div class="pt-10">..........................................................</div>
                </div>
                <div>
                    ລາຍເຊັນຜູ້ຮັບ
                    <div class="pt-10">..........................................................</div>
                </div>
            </div>
            {{-- <div>
                {{ $infomation->items }}
            </div> --}}
        </div>
        <div class="pb-5"></div>
    </center>

    <script>
        var printContents = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    </script>
</div>
