<!doctype html>
<html lang="en">

<head>
    <!-- Head content remains the same -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/heroicons@2.0.0/dist/heroicons.min.js"></script>
    @include('layouts.fadeanimation')
    <!-- Include Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>EduBridge - {{ ucfirst($profession) }} Professionals</title>
</head>

<body class="relative h-screen text-maincolor bg-gray-100 z-100 font-poppins">
    @livewireScripts
    @include('layouts.floatingorbs')
    <livewire:headertwo />

    <main class="flex flex-col px-5">
        <div class="flex flex-row items-center mb-6 float-in">
            <img src="{{ asset('img/StudentLogo.png') }}" alt="Student Icon"
                class="w-14 h-14 -mt-3 -pt-1 rounded-full bg-maincolor p-2">
            <span class="font-bold pl-2 text-left text-2xl pb-4 mt-2 pt-1">List of {{ ucfirst($profession) }}
                Professionals</span>
        </div>

        <!-- List of Professionals -->
        <div class="bg-[#1e3a4e] py-6 px-8 mx-40 rounded-xl shadow-md float-in -mt-6">
            @foreach ($professionals as $professional)
                @php
                    // Determine the status color based on the sorted data
                    $statusColor = $professional['is_active']
                        ? 'bg-green-500'
                        : (str_contains($professional['last_active'], 'hours')
                            ? 'bg-red-500'
                            : 'bg-gray-500');
                @endphp
                <div
                    class="flex items-center justify-between py-4 border-b hover:bg-hover hover:rounded-b-xl hover:p-4 duration-150 border-white">
                    <a href="{{ route('studentmessage', ['name' => urlencode($professional['name'])]) }}"
                        class="flex items-center flex-1">
                        <div class="flex items-center">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                                <span
                                    class="absolute bottom-0 right-0 block w-3 h-3 {{ $statusColor }} rounded-full ring-2 ring-white"></span>
                            </div>
                            <div class="ml-4">
                                <p class="text-maincolor font-bold">{{ $professional['name'] }}</p>
                                <p class="text-maincolor">
                                    {{ $professional['is_active'] ? 'Active' : 'Last active ' . $professional['last_active'] }}
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- Three Dots Icon (Popup Component) -->
                    <livewire:professionalpopup :professional="$professional" />
                </div>
            @endforeach
        </div>

    </main>
</body>

</html>
