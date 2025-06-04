<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'liewkong-chineseschool' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.jpg') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phetsarath:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Phetsarath", serif;
            /* font-weight: 400; */
            font-style: normal;
        }

        .phetsarath-regular {
            font-family: "Phetsarath", serif;
            font-weight: 400;
            font-style: normal;
        }

        .phetsarath-bold {
            font-family: "Phetsarath", serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>


    <!-- In your Blade view: -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('tailwindcss/select2.min.css') }}">
    <script src="{{ asset('tailwindcss/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('tailwindcss/select2.min.js') }}"></script> --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}


    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src="{{ asset('tailwindcss/sweetalert2@11.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> --}}
    <script src="{{ asset('tailwindcss/Chart.min.js') }}"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('tailwindcss/flowbite.min.css') }}">



    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    <script src="{{ asset('tailwindcss/tailwindcss.js') }}"></script>

</head>

<body>
    @include('components.layouts.nav')
    @include('components.layouts.slider')
    <div class="p-4 sm:ml-64">
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-14">
            {{ $slot }}
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
    <script src="{{ asset('tailwindcss/flowbite.min.js') }}"></script>

    <script>
        function alertSuccess() {
            Swal.fire({
                title: 'ບັນທຶກສໍາເລັດ',
                text: "ບັນທຶກສໍາເລັດ",
                icon: 'success',
                confirmButtonText: 'OK'
            })
        }

        function alertError() {
            Swal.fire({
                title: 'ເກີດຂໍ້ຜິດພາດ',
                text: "ເກີດຂໍ້ຜິດພາດ",
                icon: 'error',
                confirmButtonText: 'OK'
            })
        }

        function alertDelete() {
            Swal.fire({
                title: 'ລົບສໍາເລັດ',
                text: "ລົບສໍາເລັດ",
                icon: 'success',
                confirmButtonText: 'OK'
            })
        }
    </script>
</body>

</html>
