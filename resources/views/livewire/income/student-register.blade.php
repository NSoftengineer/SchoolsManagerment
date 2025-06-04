<div>

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="{{ route('income') }}"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M9 15a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm3.845-1.855a2.4 2.4 0 0 1 1.2-1.226 1 1 0 0 1 1.992-.026c.426.15.809.408 1.111.749a1 1 0 1 1-1.496 1.327.682.682 0 0 0-.36-.213.997.997 0 0 1-.113-.032.4.4 0 0 0-.394.074.93.93 0 0 0 .455.254 2.914 2.914 0 0 1 1.504.9c.373.433.669 1.092.464 1.823a.996.996 0 0 1-.046.129c-.226.519-.627.94-1.132 1.192a1 1 0 0 1-1.956.093 2.68 2.68 0 0 1-1.227-.798 1 1 0 1 1 1.506-1.315.682.682 0 0 0 .363.216c.038.009.075.02.111.032a.4.4 0 0 0 .395-.074.93.93 0 0 0-.455-.254 2.91 2.91 0 0 1-1.503-.9c-.375-.433-.666-1.089-.466-1.817a.994.994 0 0 1 .047-.134Zm1.884.573.003.008c-.003-.005-.003-.008-.003-.008Zm.55 2.613s-.002-.002-.003-.007a.032.032 0 0 1 .003.007ZM4 14a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm3-2a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm6.5-8a1 1 0 0 1 1-1H18a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-.796l-2.341 2.049a1 1 0 0 1-1.24.06l-2.894-2.066L6.614 9.29a1 1 0 1 1-1.228-1.578l4.5-3.5a1 1 0 0 1 1.195-.025l2.856 2.04L15.34 5h-.84a1 1 0 0 1-1-1Z"
                            clip-rule="evenodd" />
                    </svg>
                    ບັນຊີລາຍຮັບ
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">
                        ການລົງທະບຽນຮຽນ
                    </span>
                </div>
            </li>
        </ol>
    </nav>


    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
            data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
            data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
            role="tablist">
            <li class="me-2" role="presentation">

                <a onclick="window.location.href='?tab=register-student'"
                    class="cursor-pointer inline-block p-4 border-b-2 rounded-t-lg" id="register-tab"
                    data-tabs-target="#target-tab-register" type="button" role="tab" aria-controls="profile"
                    aria-selected="{{ request()->tab == 'register-student' ? 'true' : 'false' }}">
                    ລົງທະບຽນຮຽນໃໝ່
                </a>
            </li>
            <li class="me-2" role="presentation">
                <button onclick="window.location.href='?tab=overdue-student'"
                    class="cursor-pointer relative inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="overdue-student-tab" data-tabs-target="#target-overdue-student" type="button" role="tab"
                    aria-controls="dashboard"
                    aria-selected="{{ request()->tab == 'overdue-student' ? 'true' : 'false' }}">
                    ຄ້າງຈ່າຍຄ່າຮຽນ
                    <span class="sr-only">Notifications</span>
                    <div
                        class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-0 -end-0 dark:border-gray-900">
                        9+
                    </div>
                </button>
            </li>
            <li class="me-2" role="presentation">
                <button onclick="window.location.href='?tab=payment-student'"
                    class="cursor-pointer inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="payment-student-tab" data-tabs-target="#target-payment-student" type="button" role="tab"
                    aria-controls="settings"
                    aria-selected="{{ request()->tab == 'payment-student' ? 'true' : 'false' }}">
                    ຈ່າຍຄ່າຮຽນ
                </button>
            </li>
            {{-- <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab"
                    aria-controls="contacts" aria-selected="false">
                    ຊື້ອຸປະກອນອື່ນໆ
                </button>
            </li> --}}
        </ul>
    </div>
    <div id="default-styled-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="target-tab-register" role="tabpanel"
            aria-labelledby="profile-tab">
            @livewire('income.Components.register_student')
        </div>

        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="target-overdue-student" role="tabpanel"
            aria-labelledby="dashboard-tab">
            @livewire('income.Components.overdue_student')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="target-payment-student" role="tabpanel"
            aria-labelledby="settings-tab">
            @livewire('income.Components.payment_student')
        </div>
        {{-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
        </div> --}}
    </div>
</div>
<script>
    // $(document).ready(function($) {
    //     var tabIdFromUrl = window.location.hash;
    //     if (tabIdFromUrl) {
    //         var activeTabBtn = $('[data-bs-target="' + tabIdFromUrl + '"]');
    //         if (activeTabBtn) {
    //             var tab = new bootstrap.Tab(activeTabBtn);
    //             tab.show();
    //         }
    //     }
    //     $(document).on('click', '[data-bs-toggle="tab"]', function(event) {
    //         var activeTabId = $(this).attr('data-bs-target');
    //         history.pushState(null, null, activeTabId);
    //     });
    // });
</script>
