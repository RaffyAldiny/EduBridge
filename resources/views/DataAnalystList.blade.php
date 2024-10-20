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

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>EduBridge</title>
</head>

<body class="relative h-screen text-maincolor bg-gray-100 font-poppins">
  @livewireScripts
  @extends('layouts.floatingorbs')
  <livewire:header />

  <main class="flex flex-col px-5">
    <div class="flex flex-row items-center mb-6 float-in">
      <img src="{{ asset('img/StudentLogo.png') }}" alt="Student Icon" class="w-14 h-14 -mt-3 -pt-1 rounded-full bg-maincolor p-2">
      <span class="font-bold pl-2 text-left text-2xl pb-4 mt-2 pt-1">Lists of Data Analyst Professionals</span>
    </div>

    <!-- List of Professionals -->
    <div class="bg-gray-900 p-6 mx-5 rounded-xl shadow-md float-in">
      <!-- List Item -->
      <div class="flex items-center justify-between py-4 border-b border-gray-700">
        <div class="flex items-center">
          <div class="relative">
            <img src="https://via.placeholder.com/40" alt="Profile Picture" class="w-10 h-10 rounded-full">
            <span class="absolute bottom-0 right-0 block w-3 h-3 bg-green-500 rounded-full ring-2 ring-white"></span>
          </div>
          <div class="ml-4">
            <p class="text-white font-bold">John Cris A. Demafeliz</p>
            <p class="text-gray-400">Active</p>
          </div>
        </div>
        <!-- Three Dots Icon -->
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12h.01M12 12h.01M18 12h.01" />
          </svg>
        </button>
      </div>

      <!-- Next List Item -->
      <div class="flex items-center justify-between py-4 border-b border-gray-700">
        <div class="flex items-center">
          <div class="relative">
            <img src="https://via.placeholder.com/40" alt="Profile Picture" class="w-10 h-10 rounded-full">
            <span class="absolute bottom-0 right-0 block w-3 h-3 bg-red-500 rounded-full ring-2 ring-white"></span>
          </div>
          <div class="ml-4">
            <p class="text-white font-bold">Ella Marie Juan John D. Dinglasan</p>
            <p class="text-gray-400">Active 3 hours ago</p>
          </div>
        </div>
        <!-- Three Dots Icon -->
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12h.01M12 12h.01M18 12h.01" />
          </svg>
        </button>
      </div>

      <!-- Add more items here following the same structure -->
      
    </div>
  </main>
</body>
</html>
