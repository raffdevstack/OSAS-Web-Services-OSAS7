<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

    <meta name="color-scheme" content="light" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />


    <title>{{ $title !== "" ? $title : 'OSAS System' }}</title>

    @vite('resources/css/app.css')

    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    {{-- <script src="./node_modules/jquery/dist/jquery.min.js"></script> --}}
    {{-- <script src="{{ asset('./node_modules/jquery/dist/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



    <link rel="stylesheet" href="css/style.css">
    <style>
        /* our custom colors */
        .ouryellow {
            color: #FFA828;
        }

        .ouryellowbg {
            background: #FFA828;
        }

        .ourmaroonbg {
            background: #630606;
            /* background: linear-gradient(to top left, #630606, rgb(184, 0, 0)); */
        }

        .ourmaroon {
            color: #630606;
        }

        .usep_background {
            background:
                linear-gradient(0deg, rgba(255, 168, 40, 0.70) 0%, rgba(255, 168, 40, 0.70) 100%),
                url('/images/cover.jpg'),
                lightgray;
            background-position: right;
            background-size: cover;
            background-origin: content-box;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .error-border {
            border: 1px solid red !important;
        }
    </style>
</head>

<body class="min-h-screen min-w-screen bg-gray-50">
    <x-messages />
