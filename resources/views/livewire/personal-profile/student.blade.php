<div>
    @include('livewire.personal-profile.modals.form_students')
    @include('livewire.personal-profile.modals.form_students_search')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="text-xl text-gray-900 text-center md:text-start dark:text-white">
            {{-- ຂໍ້ມູນສ່ວນບຸກຄົນສຳລັບນັກຮຽນ/ນັກສືກສາ --}}
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('personal-profile') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z"
                                    clip-rule="evenodd" />
                            </svg>
                            ຂໍ້ມູນສ່ວນບຸກຄົນ
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                                ນັກຮຽນ/ນັກສືກສາ
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>


        </div>
        <div class="grid grid-flow-col justify-items-center md:justify-items-end">
            @can('students create')
                <button type="button" wire:click="onModalShow"
                    class="text-base text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-1 mb-2">
                    ເພີ່ມຂໍ້ມູນ
                </button>
            @endcan
        </div>

        <div class="md:col-span-2">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-white uppercase bg-[#20518d]  dark:bg-gray-700 dark:text-gray-400">
                        <tr class="">
                            <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                                ຮູບພາບ
                            </th>
                            <th scope="col" class="text-base px-6 py-3 ">
                                ຊື່ ແລະ ນາມສະກຸນ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ຫ້ອງຮຽນ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ວັນເດືອນປິເກີດ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ບ້ານ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ເມືອງ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ແຂວງ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ຊົນເຜົ່າ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ຊື່ ພໍ່
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ເບີໂທ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ອາຊີບ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ຊື່ ແມ່
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ເບີໂທ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ອາຊີບ
                            </th>
                            <th scope="col" class="text-base px-6 py-3 rounded-tr-lg">

                            </th>
                        </tr>

                        <tr>
                            {{-- style="width: 150px" --}}
                            <td width="" class="text-base px-6 py-3 rounded-bl-lg">

                            </td>
                            <td width="" class="text-base px-6 py-3  ">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="w-[150px] block  p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[120px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[150px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[130px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[130px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3">
                                <input type="text" id="small-input" placeholder="ຄົ້ນຫາ"
                                    class="block w-[100px] p-2 text-gray-900 border border-gray-300  bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            </td>
                            <td class="text-base px-6 py-3 rounded-br-lg">

                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentData as $key => $value)
                            <tr>
                                <td class="text-base px-6 py-3">
                                    <img class="h-20 max-w-xs" src="{{ asset('assets/logo.jpg') }}"
                                        alt="image description">
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->first_name }} {{ $value->last_name }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->studentclass->classroom->name }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->birthday }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->village->name_la }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->district->name_la }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->province->name_la }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->ethnic }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->father }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->f_phone }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->f_occupation }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->mother }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->m_phone }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    {{ $value->m_occupation }}
                                </td>
                                <td class="text-base px-6 py-3">
                                    <button type="button" wire:click="onModalEdit({{ $value->id }})"
                                        class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-1 text-center inline-flex items-center dark:focus:ring-yellow-900 me-2 mb-2">
                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{-- ແກ້ໄຂ --}}
                                    </button>

                                    <button type="button" onclick="confirmDelete({{ $value->id }})"
                                        class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 me-2 mb-2 dark:focus:ring-red-900 inline-flex items-center">
                                        <svg class="w-6 h-6 textwhite dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{-- ລົບ --}}
                                    </button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<script>
    function modalShow() {
        const $targetEl = document.getElementById('form_students');
        const modal = new Modal($targetEl);
        modal.show();
    }

    function modalclose() {
        const $targetEl = document.getElementById('form_students');
        const modal = new Modal($targetEl);
        modal.hide();
    }

    function modalShowSearch() {
        const $targetEl = document.getElementById('form_students_search');
        const modal = new Modal($targetEl);
        modal.show();
    }

    function modalcloseSearch() {
        const $targetEl = document.getElementById('form_students_search');
        const modal = new Modal($targetEl);
        modal.hide();
    }

    function confirmDelete(id) {
        Swal.fire({
            title: 'ແນ່ໃຈບໍ່ວ່າຈະລົບ?',
            text: "ຫາກລົບແລ້ວບໍ່ສາມາດກູ້ໃຫ້ຄືນໄດ້!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ຕ້ອງການລົບ',
            cancelButtonText: 'ບໍ່ຕ້ອງການ'
        }).then((result) => {
            if (result.isConfirmed) {
                @this.set('isId', id)
                Livewire.dispatch('studentDelete');
            }
        })
    }
</script>
