<div>
    @include('livewire.personal-profile.modals.form')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">


        <div class=" bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('students') }}">
                <img class="rounded-t-lg w-[100%] " src="{{ asset('/assets/student.jpg') }}" alt="student" />
            </a>
            <div class="p-5">
                <a href="{{ route('students') }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        ຂໍ້ມູນສ່ວນບຸກຄົນສຳລັບນັກຮຽນ/ນັກສືກສາ
                    </h5>
                </a>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                <a href="{{ route('students') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    ເບີງຂໍ່ມູນ
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>



        <div class=" bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('employees') }}">
                <img class="rounded-t-lg w-[100%]" src="{{ asset('/assets/teacher.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('employees') }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        ຂໍ້ມູນສ່ວນບຸກຄົນສຳລັບພະນັກງານ/ຄູ ແລະ ອາຈານ
                    </h5>
                </a>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                <a href="{{ route('employees') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    ເບີງຂໍ່ມູນ
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
</div>
<script>
    // function modalShow() {
    //     const $targetEl = document.getElementById('modal_user');
    //     const modal = new Modal($targetEl);
    //     modal.show();
    // }

    // function modalclose() {
    //     const $targetEl = document.getElementById('modal_user');
    //     const modal = new Modal($targetEl);
    //     modal.hide();
    // }
</script>
