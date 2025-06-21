<!-- Main modal -->
<div id="form_students" wire:ignore.self data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full ">
        <!-- Modal content -->
        <form wire:submit="saveStudent">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 border-2 border-solid border-[#20518d]">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        ຂໍ້ມູນສ່ວນບຸກຄົນສຳລັບນັກຮຽນ/ນັກສືກສາ
                    </h3>
                    <button type="button" wire:click="onModalClose"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="form_students">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-64 h-1 my-8 bg-gray-700 border-0 rounded-sm dark:bg-gray-700">

                                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                                    <div class="text-xl text-center font-semibold">ນັກຮຽນ/ນັກສືກສາ</div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2 justify-items-center">
                            @if ($photo)
                                <img src="{{ $photo->temporaryUrl() }}" class="h-[120px] max-w-full rounded-lg ">
                            @else
                                <img src="{{ $show_photo == '' ? asset('assets/default.png') : asset('doc_upload/' . $show_photo) }}"
                                    class="h-[120px] max-w-full rounded-lg ">
                            @endif
                        </div>

                        <div>
                            <label for="IsId" hidden
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ID
                            </label>
                            <input hidden type="text" id="IsId" wire:model="isIdStudent"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />


                            <label for="first_name"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຊື່
                            </label>
                            <input type="text" id="first_name" wire:model="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('first_name')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="last_name"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ນາມສະກຸນ</label>
                            <input type="text" id="last_name" wire:model="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('last_name')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="birthday"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ວັນເດືອນປິເກີດ
                            </label>
                            <input type="date" id="birthday" wire:model="birthday"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="ethnic"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຊົນເຜົ່າ
                            </label>
                            <select id="ethnic" wire:model="ethnic"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກຊົນເຜົ່າ</option>
                                @foreach ($araryEthnic as $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('ethnic')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="province_id"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ແຂວງ
                            </label>
                            <select id="province_id" wire:model="province_id"
                                wire:change="getDistrict($event.target.value)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກແຂວງ</option>
                                @foreach ($province as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name_la }}</option>
                                @endforeach
                            </select>
                            <div>
                                @error('province_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="district_id"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ເມືອງ
                            </label>
                            <select id="district_id" wire:model="district_id"
                                wire:change="getVillage($event.target.value)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກເມືອງ</option>
                                @foreach ($district as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name_la }}</option>
                                @endforeach

                            </select>
                            <div>
                                @error('district_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="village_id"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ບ້ານ
                            </label>
                            <select id="village_id" wire:model="village_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກບ້ານ</option>
                                @foreach ($village as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name_la }}</option>
                                @endforeach

                            </select>
                            <div>
                                @error('village_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="md:col-span-3">
                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-25 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span></p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            SVG, PNG, JPG or GIF (MAX. 800x400px)
                                        </p>
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" wire:model="photo" />
                                </label>
                            </div>
                            {{-- <input type="file" wire:model="photo"> --}}

                            @error('photo')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-3">
                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-64 h-1 my-8 bg-gray-700 border-0 rounded-sm dark:bg-gray-700">

                                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                                    <div class="text-xl text-center font-semibold">ຜູ້ປົກຄອງ</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="father"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຊື່ ພໍ່
                            </label>
                            <input type="text" id="father" wire:model="father"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('father')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="f_phone"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ເບີໂທ
                            </label>
                            <input type="text" id="f_phone" wire:model="f_phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('f_phone')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="f_occupation"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ອາຊີບ
                            </label>
                            <input type="text" id="f_occupation" wire:model="f_occupation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('f_occupation')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="mother"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຊື່ ແມ່
                            </label>
                            <input type="text" id="mother" wire:model="mother"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('mother')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="m_phone"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ເບີໂທ
                            </label>
                            <input type="text" id="m_phone" wire:model="m_phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('m_phone')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="m_occupation"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ອາຊີບ
                            </label>
                            <input type="text" id="m_occupation" wire:model="m_occupation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                            <div>
                                @error('m_occupation')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-span-3">
                            <label for="address"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ທີ່ຢູ່ປະຈຸບັນ
                            </label>
                            <textarea id="address" rows="3" wire:model="address"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ທີ່ຢູ່ປະຈຸບັນ"></textarea>

                            <div>
                                @error('address')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="md:col-span-2">
                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-64 h-1 my-8 bg-gray-700 border-0 rounded-sm dark:bg-gray-700">

                                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                                    <div class="text-xl text-center font-semibold">ຫ້ອງຮຽນ</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="class_id"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ຫ້ອງຮຽນ
                            </label>
                            <select id="class_id" wire:model.live="class_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກຫ້ອງຮຽນ</option>
                                @foreach ($classroom as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                            {{-- {{ $class_id }} --}}
                            <div>
                                @error('class_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="yearstudy_id"
                                class="text-base block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ສົກຮຽນ
                            </label>
                            <select id="yearstudy_id" wire:model.live="yearstudy_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ເລືອກສົກຮຽນ</option>
                                @foreach ($yearstudy as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach

                            </select>
                            {{-- {{ $yearstudy_id }} --}}
                            <div>
                                @error('yearstudy_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div
                    class="grid grid-flow-col justify-items-center md:justify-items-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <div>

                        <button wire:click="onModalClose" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-[#a6a6a6] hover:bg-[#666666] rounded-lg border border-gray-200  hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-[#a6a6a6] dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-[#666666]">
                            ປີດ
                        </button>
                        @can('students create')
                            <button type="submit"
                                class="text-white bg-[#20518d] hover:bg-[#133053] focus:ring-4 focus:outline-none focus:ring-[#133053] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#20518d] dark:hover:bg-[#133053] dark:focus:ring-[#20518d]">
                                ບັນທຶກ
                            </button>
                        @endcan
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
