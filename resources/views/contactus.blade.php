<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>
    <title>EduBridge</title>
    @include('layouts.fadeanimation')

</head>

<body class="relative h-screen text-maincolor bg-gray-100 font-poppins fade-in" x-data="floatingOrbs()" x-init="$el.classList.add('fade-in-visible')">
    
    <!-- Include Floating Orbs -->
    @include('layouts.floatingorbs')

    @livewireScripts
    <livewire:header />

    <!-- Main Content -->
    <main class="flex flex-col px-5 items-start justify-center">
        <div class="flex h-full items-center justify-between w-full">
            <!-- Text Section -->
            <div class="w-full h-full flex flex-col px-4">
                <span class="font-bold text-left text-7xl pb-4 float-in">CONTACT US</span>
                <span class="text-left text-3xl tracking-wider float-in">
                    We'd love to hear from you! Whether you have a question,
                    feedback, or need assistance, our team is here to help. Reach out to us through any of the following
                    methods:
                </span>
                <!-- Contact Information -->
                <div class="mt-8 text-2xl space-y-4 ml-10 leading-loose">
                    <div class="flex items-center float-in">
                        <i class="fa fa-phone text-xl mr-2"></i>
                        <span class="font-bold">Telephone:</span>
                        <span class="ml-2">+639 7159 2265</span>
                    </div>
                    <div class="flex items-center float-in">
                        <i class="fa fa-envelope text-xl mr-2"></i>
                        <span class="font-bold">Email:</span>
                        <a href="mailto:EduBridge2024@gmail.com"
                            class="ml-2 text-maincolor underline">EduBridge2024@gmail.com</a>
                    </div>
                    <div class="flex items-center float-in">
                        <i class="fa fa-map-marker text-xl mr-2"></i>
                        <span class="font-bold">Address:</span>
                        <span class="ml-2 underline">Gen. Luna cor. Muralla St., Intramuros Manila, Philippines
                            1002</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
