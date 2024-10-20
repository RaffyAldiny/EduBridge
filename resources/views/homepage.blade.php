<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @livewireStyles
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>EduBridge</title>
</head>
<body class="relative h-screen text-maincolor font-poppins">
  @extends('layouts.floatingorbs')
  <livewire:header />
  @livewireScripts

  <!-- Main Content Section -->
  <main class="flex justify-center h-3/4">
    <div class="flex flex-row items-center w-full">
      <!-- add shadow: style="text-shadow: 4px 8px 8px rgba(0, 0, 0, 0.7); -->
    <h2 class="w-1/2 text-[84px] font-bold pl-24">
      Connecting You to Expert Solutions for Academic Success</h2>
      <div class="w-1/2 flex justify-center">
        <img src="{{ asset('img/edubridgelogo.png') }}" alt="EduBridge Logo" class="z-1 rounded-full w-3/4 h-3/4">
      </div>
    </div>
  </main>
</body>
</html>
