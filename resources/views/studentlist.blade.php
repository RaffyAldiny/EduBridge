<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/heroicons@2.0.0/dist/heroicons.min.js"></script>
    @include('layouts.fadeanimation')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EduBridge</title>
</head>

<body class="relative h-screen text-maincolor bg-gray-100 z-50 font-poppins">
    @livewireScripts
    @extends('layouts.floatingorbs')
    <livewire:headerthree />

    <main class="flex flex-col px-5">
        <div class="flex flex-row items-center mb-6 float-in">
            <img src="{{ asset('img/ProfessionalLogo.png') }}" alt="Professional Icon"
                class="w-14 h-14 rounded-full bg-maincolor p-2">
            <div class="pl-2">
                <p class="font-bold text-2xl leading-tight">John Alex B. Thompson</p>
                <p class="text-maincolor text-xl">Data Analyst</p>
            </div>
        </div>

        <!-- List of Students -->
        <div class="bg-[#1e3a4e] py-6 px-8 mx-40 rounded-xl shadow-md float-in -mt-2">
            @foreach ($students as $student)
                <div class="flex items-center justify-between py-4 border-b hover:bg-hover hover:rounded-b-xl hover:p-4 duration-150 border-white">
                    <div class="flex items-center">
                        <div class="relative">
                            <img src="{{ $student['profile_picture'] }}" alt="Profile Picture"
                                class="border-2 border-white w-12 h-12 rounded-full">
                            <span
                                class="absolute bottom-0 right-0 block w-3 h-3 {{ $student['status_color'] }} rounded-full ring-2 ring-white"></span>
                        </div>
                        <div class="ml-4">
                            <p class="text-maincolor font-bold">{{ $student['name'] }}</p>
                            <p class="text-maincolor">{{ $student['message'] }} <span class="text-maincolor"> • {{ $student['time'] }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>

</html>
