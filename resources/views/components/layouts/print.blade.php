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
    <script src="{{ asset('tailwindcss/sweetalert2@11.js') }}"></script>

    <script src="{{ asset('tailwindcss/Chart.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('tailwindcss/flowbite.min.css') }}">


    <script src="{{ asset('tailwindcss/tailwindcss.js') }}"></script>

</head>

<body class="bg-gray-200">
    {{ $slot }}
    <script src="{{ asset('tailwindcss/flowbite.min.js') }}"></script>


</body>

</html>
