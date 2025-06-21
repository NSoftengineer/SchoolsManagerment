<div class="grid grid-cols-1 md:grid-cols-5 gap-4">
    @if ($students_list > 0)
        @include('livewire.income.Components.overdue-student-list')
    @else
        @foreach ($classroomData as $key => $value)
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-end px-4 pt-4">

                </div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('assets/logo.jpg') }}"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                        {{ $value->name }}
                    </h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $value->student_count }}/30</span>
                    <div class="flex mt-4 md:mt-6">
                        <button wire:click="onClickTable('1','{{ $value->id }}')"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            ເບີງຂໍ້ມູນ
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                        <button type="button"
                            class="relative py-2 px-4 ms-2 inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            ຈຳນວນຄ້າງຊຳລະ
                            <span class="sr-only">Notifications</span>
                            <div
                                class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900">
                                20</div>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif



</div>
