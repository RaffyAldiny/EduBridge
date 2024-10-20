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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.2/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>EduBridge</title>
  @include('layouts.fadeanimation')

</head>

<body class="relative h-screen text-maincolor bg-gray-100 font-poppins">
  @livewireScripts
  @extends('layouts.floatingorbs')
 <livewire:headertwo />

 <!-- Main Content -->
<main class="flex flex-col px-5">
 <div class="flex flex-row float-in">
    <img src="{{ asset('img/StudentLogo.png') }}" alt="Student Icon" class="w-14 h-14 rounded-full bg-maincolor p-2">
    <span class="font-bold pl-2 text-left text-2xl pb-4 mt-2 pt-1">SELECT YOUR PREFERENCE ...</span>
 </div>

 <!--profession-->
 <div class="mt-3 flex flex-col float-in">
    <!--first row-->
    <div class="flex flex-row justify-center mx-4">
    <a href="{{ url('/studentpreference/dataanalyst') }}" class="flex items-center justify-start bg-maincolor  text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
        <img src="{{ asset('img/DataAnalystLogo.png') }}" alt="Data Analyst Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">DATA ANALYST</span> 
    </a>
    <span class="text-hover text-transparent">
        filler space fgdg
    </span> 
    <button class="flex items-center justify-start bg-maincolor text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
    <img src="{{ asset('img/PsychometricianLogo.png') }}" alt="PSYCHOMETRICIAN Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">PSYCHOMETRICIAN</span>
      </button>
    </div>

    <!--second row-->
    <div class="flex flex-row justify-center mx-4 mt-3">
    <button class="flex items-center justify-start bg-maincolor text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
    <img src="{{ asset('img/EditorLogo.png') }}" alt="EDITORS Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">EDITORS/LINGUISTS</span>
      </button>
    <span class="text-hover text-transparent">
        filler space fgdg
    </span> 
    <button class="flex items-center justify-start bg-maincolor text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
    <img src="{{ asset('img/PeerReviewerLogo.png') }}" alt="PEER REVIEWER Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">PEER REVIEWER</span>
      </button>
    </div>

    <!--third row-->
    <div class="flex flex-row justify-center mx-4 mt-3">
    <button class="flex items-center justify-start bg-maincolor text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
    <img src="{{ asset('img/EthicistLogo.png') }}" alt="ETHICIST Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">ETHICIST</span>
      </button>
    <span class="text-hover text-transparent">
        filler space fgdg
    </span> 
    <button class="flex items-center justify-start bg-maincolor text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
    <img src="{{ asset('img/StatisticianLogo.png') }}" alt="STATISTICIAN Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">STATISTICIAN</span>
      </button>
    </div>

    <!--fourth row-->
    <div class="flex flex-row justify-center mx-4 mt-3">
    <button class="flex items-center justify-start bg-maincolor text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
    <img src="{{ asset('img/MethodologistLogo.png') }}" alt="ETHICIST Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">METHODOLOGIST</span>
      </button>
    <span class="text-hover text-transparent">
        filler space fgdg
    </span> 
    <button class="flex items-center justify-start bg-maincolor text-white text-5xl font-bold rounded-lg p-4 shadow-md w-1/2 hover:bg-white duration-200 ease-in">
    <img src="{{ asset('img/AccountantLogo.png') }}" alt="STATISTICIAN Icon" class="w-14 h-14 mr-4">
        <span class="text-hover">ACCOUNTANT</span>
      </button>
    </div>
 </div>
</main>
</body>
</html>