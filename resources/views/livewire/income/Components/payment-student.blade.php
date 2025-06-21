<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @include('livewire.income.modals.payment-student-modal')

    <div>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <div class="flex items-center mx-auto">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full ">
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
                        <input type="text" id="searchstuden" wire:model.live="searchstuden"
                            wire:keyup.enter="selectdataclass()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="ຄົ້ນຫາ ຈາກ ຊື່ ແລະ ນາມສະກຸນ ນັກຮຽນ" />
                    </div>

                    <select id="selectClass" wire:model="selectedClass" wire:change="selectdataclass"
                        class=" me-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full m-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>ເລືອກຫ້ອງຮຽນ</option>
                        @foreach ($selectClass as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>


                    <button type="button" wire:click="selectdataclass()"
                        class="cursor-pointer p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
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
                            @foreach ($student as $key => $value)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $value->first_name }} {{ $value->last_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $value->studentclass->classroom->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($value->tuitionfees != null)
                                            <select id="small" wire:model.live="payment_of"
                                                wire:change="selectStudent('{{ $value->id }}')"
                                                class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                                <option selected>ເລືອກການຈ່າຍ</option>
                                                @if ($value->tuitionfees->payment_of == 0)
                                                    <option value="0">ເດື່ອນ ຕໍ່ ເດືອນ</option>
                                                @endif
                                                @if ($value->tuitionfees->payment_of == 1)
                                                    <option value="2">ພາກຮຽນ II</option>
                                                @endif
                                                @if ($value->tuitionfees->payment_of == 2)
                                                    <option value="3">ພາກຮຽນ I ແລະ ພາກຮຽນ II</option>
                                                @endif
                                            </select>
                                        @endif

                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center  ">
                                            @if ($value->studentclass->studycost != null)
                                                <input id="default-{{ $value->id }}" type="checkbox"
                                                    {{ $payment_of == '' ? 'disabled' : '' }}
                                                    value="{{ $value->id }}"
                                                    wire:click="selectStuden('{{ $value->id }}','{{ $value->studentclass->classroom->id }}','{{ $value->studentclass->studycost->yearstudies_id }}','{{ $value->studentclass->classroom->floorstudy->id }}')"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-{{ $value->id }}"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

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
                    <div
                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-3 py-2 rounded-sm dark:bg-green-900 dark:text-green-300">
                        <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            ຈ່າຍແລ້ວ: {{ number_format($studycost_sum) }}
                        </h5>
                    </div>
                    <div
                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-3 py-2 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                        <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            ຕ້ອງການຈ່າຍ: {{ number_format($cost) }}
                            {{-- {{ print_r($arr_month) }} --}}
                        </h5>
                    </div>
                    <div class="col-span-2">
                        <button type="button" {{ $cost > 0 ? '' : 'disabled' }}
                            wire:click="onModalShowFormPaymentStudent()"
                            class="cursor-pointer w-[100%] px-3 py-2 text-xl font-medium text-center text-white bg-{{ $cost > 0 ? 'blue' : 'gray' }}-700 rounded-lg hover:bg-{{ $cost > 0 ? 'blue' : 'gray' }}-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            ຈ່າຍຄ່າເທີ່ມ
                        </button>
                    </div>
                </div>
            </div>


            @if ($payment_of == 2 || $payment_of == 3)
                @include('livewire.income.Components.per-years')
            @elseif ($payment_of == 0)
                @include('livewire.income.Components.per-month')
            @else
                {{-- ຍັງບໍ່ພົບຂໍ້ມູນ --}}
            @endif
        </div>

    </div>
</div>
<script>
    // window.addEventListener('printbill', event => {
    //     console.log(event.detail[0]);
    //     var invoice = event.detail[0];
    //     var url = "{{ url('/') }}";
    //     window.open(`${url}/income/students-print/${invoice}`, '_blank')
    //     location.reload();
    // });

    function alertErrorStudent(texts) {
        Swal.fire({
            // title: 'ບໍ່ພົບຂໍ້ມູນ',
            title: texts,
            // text: texts,
            icon: 'error',
            confirmButtonText: 'OK'
        })
    }

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
