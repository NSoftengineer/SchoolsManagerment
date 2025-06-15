<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @include('livewire.income.modals.register-student-modal')
    <div>
        <div class="grid grid-cols-1 gap-4">
            <div>
                <form class="flex items-center mx-auto">
                    <select id="selectedClass" wire:model="selectedClass" wire:change="selectdataclass"
                        class=" me-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>ເລືອກຫ້ອງຮຽນ</option>
                        @foreach ($selectClass as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
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
                                        @if ($value->studentclass->studycost != null)
                                            <select id="small" wire:model.live="payment_of"
                                                class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                                <option selected>ເລືອກການຈ່າຍ</option>
                                                @if ($value->studentclass->studycost->type_payment == 0)
                                                    <option value="0">ເດື່ອນ ຕໍ່ ເດືອນ</option>
                                                @endif
                                                @if ($value->studentclass->studycost->type_payment == 1)
                                                    <option value="1">ພາກຮຽນ I</option>
                                                    <option value="2">ພາກຮຽນ II</option>
                                                    <option value="3">ພາກຮຽນ I ແລະ ພາກຮຽນ II</option>
                                                @endif
                                                @if ($value->studentclass->studycost->type_payment == 2)
                                                    <option value="0">ເດື່ອນ ຕໍ່ ເດືອນ</option>
                                                    <option value="1">ພາກຮຽນ I</option>
                                                    <option value="2">ພາກຮຽນ II</option>
                                                    <option value="3">ພາກຮຽນ I ແລະ ພາກຮຽນ II</option>
                                                @endif
                                            </select>
                                        @else
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
    <div class="relative overflow-x-auto">
        <button {{ $student_id == '' ? 'disabled' : '' }} type="button" wire:click="onModalShowFormRegisterStudent"
            class="cursor-pointer px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M4 5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H4Zm0 6h16v6H4v-6Z"
                    clip-rule="evenodd" />
                <path fill-rule="evenodd"
                    d="M5 14a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Zm5 0a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z"
                    clip-rule="evenodd" />
            </svg>
            ຮັບເງີນ & ພິມໃບບີນ
            {{-- {{ $student_id }}
            {{ $classroom_id }}
            {{ $yearstudies_id }}
            {{ $floorstudy_id }} --}}
        </button>
        <button {{ $student_id == '' ? 'disabled' : '' }} type="button" wire:click="studentsprint"
            class="cursor-pointer px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z"
                    clip-rule="evenodd" />
            </svg>
            ພິມໃບບີນໃໝ່
        </button>

        <table class="my-4 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                        ລຳດັບ
                    </th>
                    <th scope="col" class="text-base px-6 py-3">
                        ລາຍການ
                    </th>
                    <th scope="col" class="text-base px-6 py-3">
                        ຈຳນວນ
                    </th>
                    <th scope="col" class="text-base px-6 py-3">
                        ຈຳນວນເງິນ
                    </th>
                    <th scope="col" class="text-base px-6 py-3">
                        ລວມ
                    </th>
                    <th scope="col" class="text-base px-6 py-3 rounded-tr-lg">
                        {{-- <div class="flex items-center">
                            <input id="default-checkbox_all" type="checkbox" value="" wire:click="clickaaa()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox_all"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                        </div> --}}
                    </th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @php $minusItem = 0; @endphp
                {{-- {{ print_r($this->Itemstudent) }} --}}
                @foreach ($Itemstudent as $key => $value)
                    @php
                        $total += $value['price'];
                        if ($value['type'] == 1) {
                            $minusItem += $value['price'];
                        }

                    @endphp
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $key + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $value['name'] }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($value['disabled'] != 'disabled')
                                <div class="grid grid-cols-3 gap-4">
                                    <div>
                                        <svg wire:click="plus('{{ $value['id'] }}')"
                                            class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        {{ $value['items'] }}
                                    </div>
                                    <div>
                                        @if ($value['items'] != 1)
                                            <svg disabled wire:click="minus('{{ $value['id'] }}')"
                                                class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                        @else
                                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                        @endif

                                    </div>
                                </div>
                            @else
                                <div class="grid grid-cols-3 gap-4">
                                    <div>

                                    </div>
                                    <div>
                                        {{ $value['items'] }}
                                    </div>
                                    <div>

                                    </div>
                                </div>
                            @endif

                        </td>
                        <td class="px-6 py-4 text-end">
                            {{ number_format($value['price']) }}
                        </td>
                        <td class="px-6 py-4 text-end">
                            {{ number_format($value['priceTotal']) }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <input id="default-checkbox_all" type="checkbox" {{ $value['disabled'] }} checked
                                    value="" wire:click="selectPrice('{{ $value['id'] }}')"
                                    class="w-4 h-4 text-{{ $value['disabled'] == 'disabled' ? 'gray' : 'blue' }}-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            <tfoot class="bg-[#20518d] text-white">
                <tr>
                    <td colspan="4" class="text-base px-6 py-4 text-end">
                        ລວມ
                    </td>
                    <td class="text-base px-6 py-4 text-end">
                        {{ number_format($ItemstudentTotal) }}
                    </td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
<script>
    window.addEventListener('printbill', event => {
        console.log(event.detail[0]);
        var invoice = event.detail[0];
        window.open(`http://127.0.0.1:8000/income/students-print/${invoice}`, '_blank')
        location.reload();
    });

    function alertErrorStudent(texts) {
        Swal.fire({
            title: 'ບໍ່ພົບຂໍ້ມູນ',
            text: texts,
            icon: 'error',
            confirmButtonText: 'OK'
        })
    }

    function modalShowFormRegisterStudent() {
        const $targetEl = document.getElementById('form_register_student');
        const modal = new Modal($targetEl);
        modal.show();
    }

    function modalcloseFormRegisterStudent() {
        const $targetEl = document.getElementById('form_register_student');
        const modal = new Modal($targetEl);
        modal.hide();
    }
</script>
