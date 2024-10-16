<html>
<head>
    <title>Edubridge Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<!-- Main View (e.g., login.blade.php) -->
<body class="relative h-screen text-maincolor font-poppins" x-data="{ showModal: false, isLogin: true }">
    <livewire:header />

    <!-- Main Content -->
    <div class="flex flex-col items-center">
        <h1 class="text-white text-3xl md:text-7xl font-bold text-center mb-8 mt-8">
            Connecting You to Expert <span class="block mt-4">Solutions for Academic</span> <span class="block mt-4">Success</span>
        </h1>
        <!-- Button Section -->
        <div class="flex space-x-[68px] mt-4">
            <!-- Student Button -->
            <button class="flex items-center justify-center w-[360px] h-[76px] bg-white text-blue-900 text-[32px] font-bold rounded-2xl shadow-md"
                @click="showModal = true; isLogin = true">
                <img src="{{ asset('img/StudentLogo.png') }}" alt="Student Icon" class="w-[52px] h-[52px] mr-4">
                STUDENT
            </button>

            <!-- Professional Button (Can trigger a different modal) -->
            <button class="flex items-center justify-center w-[360px] h-[76px] bg-white text-blue-900 text-[32px] font-bold rounded-2xl shadow-md">
                <img src="{{ asset('img/ProfessionalLogo.png') }}" alt="Professional Icon" class="w-[52px] h-[52px] mr-4">
                PROFESSIONAL
            </button>
        </div>
    </div>

    <!-- Student Login-Signup Modal -->
    <livewire:studentlogin />

    @livewireScripts
</body>

</html>
