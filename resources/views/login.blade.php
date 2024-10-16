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
<body class="relative h-screen text-maincolor font-poppins p-4">
    {{-- @extends('layouts.floatingorbs') --}}
    @livewireScripts
    <livewire:header/>

    <!-- Main Content -->
    <div class="flex flex-col items-center">
        <h1 class="text-white text-3xl md:text-7xl font-bold text-center mb-8 mt-8">
            Connecting You to Expert <br> Solutions for Academic <br> Success
        </h1>
        <!-- Button Section -->
        <div class="flex space-x-6">
            <!-- Student Button -->
            <button class="flex items-center bg-white text-blue-900 font-bold py-3 px-6 rounded-lg shadow-md hover:bg-blue-500 hover:text-white transition duration-300">
                <img src="student-icon.png" alt="Student Icon" class="w-6 h-6 mr-2">
                STUDENT
            </button>

            <!-- Professional Button -->
            <button class="flex items-center bg-white text-blue-900 font-bold py-3 px-6 rounded-lg shadow-md hover:bg-blue-500 hover:text-white transition duration-300">
                <img src="professional-icon.png" alt="Professional Icon" class="w-6 h-6 mr-2">
                PROFESSIONAL
            </button>
        </div>
    </div>
</body>
</html>
