<div>
    @include('livewire.setting.modols.study-level-modal')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">

        <div class="">

            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('setting') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            ຕັ້ງຄ່າ
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
                                ຊັ້ນຮຽນ
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="grid grid-flow-col justify-items-center md:justify-items-end">
            @can('setting study level create')
                <button type="button" wire:click="onModalShow"
                    class="cursor-pointer text-base text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    ເພີ່ມຂໍ້ມູນຊັ້ນຮຽນ
                </button>
            @endcan

        </div>


        <div class="md:col-span-2">


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-[#20518d] dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-base px-6 py-3 rounded-tl-lg">
                                ລຳດັບ
                            </th>
                            <th scope="col" class="text-base px-6 py-3">
                                ຊື່ຊັ້ນຮຽນ
                            </th>
                            <th scope="col" class="text-base px-6 py-3 rounded-tr-lg">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($FloorstudyData as $key => $value)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 ">
                                    {{ $key + 1 }}
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $value->name }}
                                </td>
                                <td class="px-6 py-4 text-end">
                                    @can('setting study room update')
                                        <button type="button" wire:click="onModalShow('{{ $value->id }}')"
                                            class="cursor-pointer text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-1 text-center inline-flex items-center dark:focus:ring-yellow-900 me-2 mb-2">
                                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                                    clip-rule="evenodd" />
                                                <path fill-rule="evenodd"
                                                    d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    @endcan
                                    @can('setting study room delete')
                                        <button type="button" onclick="confirmDelete('{{ $value->id }}')"
                                            class="cursor-pointer focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:focus:ring-red-900 inline-flex items-center">
                                            <svg class="w-6 h-6 textwhite dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" colspan="3" class="px-6 py-4 text-center">
                                    ບໍ່ມີຂໍ້ມຸນຫ້ອງຮຽນ
                                </th>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
<script>
    function modalShow() {
        const $targetEl = document.getElementById('studylevel');
        const modal = new Modal($targetEl);
        modal.show();
    }

    function modalclose() {
        const $targetEl = document.getElementById('studylevel');
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
                Livewire.dispatch('deleteStudyLevel');
            }
        })
    }
</script>
