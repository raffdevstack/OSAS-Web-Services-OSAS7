<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
    <meta name="color-scheme" content="light"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0"/>
    <title>Data Privacy Statement</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .custom-bg-color {
            background-color: #630606;
        }
        body{
            margin: 0;
            padding: 0;
        }
        hr {
            border: 1px solid black;
        }
    </style>
</head>
<body>
{{--navbar--}}
<nav class="custom-bg-color border-gray-200 dark:bg-gray-900">
    <div class="items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-start">
            <img src="/images/osassys.png" class="h-15 mr-3" alt="Logo"/>
        </a>
    </div>
</nav>
{{--body--}}
<div id="main-container" class="relative">
    <img src="/images/cover.jpg" alt="Cover Image" class="w-full h-full object-cover opacity-10 absolute top-0 left-0 z-0">
    <div class="absolute top-0 left-0 right-0 h-full" style="background-color: rgba(255, 255, 255, 0.1); z-index: -1; padding: 5vw; height: 100%"></div>
    <div class="items-center justify-between mx-auto p-4">
        <h1 style="font-size: 2rem; font-weight: bold; color: #630606">Terms and Conditions</h1><br>
        <hr>
    </div>
    <br>
    {{--Content--}}
    <div class="items-center justify-between mx-auto px-24">
        <p class="text-justify text-lg">
            Welcome to the University of Southeastern Philippines - OSAS Management System. Your use of this system means that you agree
            to the terms and conditions as defined below. The university may update or modify the system from time to time without notifying
            you, therefore, your continued use of the service after such modification will constitute your acceptance.
        </p>
        <br>
        <br>
        <p class="text-2xl"><strong>DESCRIPTION OF SERVICE</strong></p>
        <p class="text-justify text-lg">
            The aim of this service is to expedite the profiling of students and improve the process in the University thru building digital assets.
        </p>
        <br>
        <br>
        <p class="text-2xl"><strong>PRIVACY</strong></p>
        <p class="text-justify text-lg">
            The information collected from this website will be viewed as strictly confidential. The University may use your contact
            information in order to send an e-mail and/or other communications regarding your status or updates about this service.
            We may also use your data for statistics, summaries, research and studies for the development of the University.
        </p>
        <br>
        <br>
        <p class="text-2xl"><strong>VIOLATIONS</strong></p>
        <p class="text-justify text-lg">
            In any case of any fraudulent, misdeclaration of the applicant in the use of these Service, the University may expel the
            applicant and prevent his/her further access to the website, at any time for breaching the terms and conditions of this
            Service or for violating the applicable laws. I HEREBY AGREE TO BE GOVERNED BY THE TERMS AND CONDITIONS OF THE USeP - OSAS
            management System AGREEMENT. I HEREBY ALSO ACKNOWLEDGE TO HAVE READ AND FULLY UNDERSTOOD THE SAID TERMS AND CONDITIONS.
        </p>
    </div>
</div>
</body>
</html>
