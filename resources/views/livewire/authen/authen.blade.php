<div>
    <div class="md:w-[450px] w-[320px] max-w-md bg-white p-8 rounded-lg shadow-lg">
        <center>
            <img src="{{ asset('assets/logo.jpg') }}" class="w-[200px] h-[200px]" alt="logo">
        </center>
        <h2 class="text-2xl font-semibold text-center mb-6 phetsarath-bold">
            ຍີນດີຕ້ອນຮັບເຂົ້າສູ່ການນຳໃຊ້ລະບົບຈັດການໂຮງຮຽນ
        </h2>

        <form wire:submit="login">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700 phetsarath-bold">ຊື່/ອີເມວ</label>
                <input type="text" id="username" name="username" wire:model="username" required
                    class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>


            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 phetsarath-bold">ລະຫັດຜ່ານ</label>
                <input type="password" id="password" name="password" wire:model="password" required
                    class="w-full p-3 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" wire:loading.remove
                class="w-full py-3 bg-[#20518d] text-white rounded-md hover:bg-[#20518d] focus:outline-none focus:ring-2 focus:ring-[#20518d] phetsarath-bold">
                ເຂົ້າໃຊ້ລະບົບ
            </button>

            <div wire:loading class="w-[100%]">
                <button type="submit" disabled
                    class="flex items-center justify-center w-full text-white bg-[#20518d] hover:bg-[#20518d] focus:ring-4 focus:outline-none focus:ring-[#20518d] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#20518d] dark:hover:bg-[#20518d] dark:focus:ring-[#20518d]">

                    <div role="status">
                        <svg aria-hidden="true"
                            class="w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>
                        <span class="sr-only">
                            ກຳລັງກາດສອບການນຳໃຊ້
                        </span>
                    </div>
                    ກຳລັງກາດສອບການນຳໃຊ້
                </button>
            </div>
        </form>
    </div>
</div>
