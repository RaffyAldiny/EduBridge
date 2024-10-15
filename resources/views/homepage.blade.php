<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>EduBridge</title>
</head>
<body class="bg-gradient-to-r from-blue-900 to-blue-800 text-white min-h-screen">

<!-- Header Section -->
<div x-data="{ isOpen: false }" class="relative flex items-center justify-between px-8 py-4">
  <div class="flex items-center space-x-2">
    <!-- Hamburger Button with Dropdown Control -->
    <button @click="isOpen = !isOpen" class="focus:outline-none">
      <template x-if="!isOpen">
        <!-- Hamburger Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </template>

      <template x-if="isOpen">
        <!-- Chevron Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
        </svg>
      </template>
    </button>

    <!-- Logo Text -->
    <h1 class="text-2xl mt-2 font-bold text-white">EduBridge</h1>
  </div>

  <button class="bg-white text-black px-4 py-2 rounded-lg">Login</button>

  <!-- Dropdown Menu -->
  <div 
    x-show="isOpen" 
    @click.away="isOpen = false"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform scale-95"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-95"
    class="absolute top-16 left-8 w-30 text-center bg-blue-100 text-black rounded-lg shadow-lg mt-2"
  >
      <ul class="p-4 space-y-2">
      <li>
        <button class="w-full px-4 py-2 bg-blue-100 hover:bg-blue-200 rounded">Home</button>
      </li>
      <li>
        <button class="w-full px-4 py-2 bg-blue-100 hover:bg-blue-200 rounded">About Us</button>
      </li>
      <li>
        <button class="w-full px-4 py-2 bg-blue-100 hover:bg-blue-200 rounded">Contact Us</button>
      </li>
    </ul>
  </div>
</div>

<div class="border-b-2 border-white"></div>

<main class="flex items-center justify-center h-screen">
  <div class="flex flex-col text-center space-y-8">
    <h2 class="text-4xl font-extrabold">Connecting You to Expert Solutions for Academic Success</h2>
    <div class="w-64 h-64 mx-auto">
      <img src="{{ asset('img/edubridgelogo.png') }}" alt="EduBridge Logo" class="rounded-full">
    </div>
  </div>
</main>

</body>
</html>
