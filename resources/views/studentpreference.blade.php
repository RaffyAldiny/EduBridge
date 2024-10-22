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
        <div class="flex flex-row float-in mb-2">
            <img src="{{ asset('img/StudentLogo.png') }}" alt="Student Icon" class="w-14 h-14 rounded-full bg-maincolor p-2">
            <span class="font-bold pl-2 text-left text-2xl pb-4 mt-2 pt-1">SELECT WHAT YOU NEED:</span>
        </div>

        <!-- Profession Selection Grid -->
        <div class="grid grid-cols-2 gap-x-16 px-10 gap-y-4 float-in">
            <!-- Loop through professions -->
            @foreach ([
                ['href' => 'dataanalyst', 'icon' => 'DataAnalystLogo.png', 'text' => 'DATA ANALYST'],
                ['href' => 'psychometrician', 'icon' => 'PsychometricianLogo.png', 'text' => 'PSYCHOMETRICIAN'],
                ['href' => 'editors', 'icon' => 'EditorLogo.png', 'text' => 'EDITORS/LINGUISTS'],
                ['href' => 'peerreviewer', 'icon' => 'PeerReviewerLogo.png', 'text' => 'PEER REVIEWER'],
                ['href' => 'ethicist', 'icon' => 'EthicistLogo.png', 'text' => 'ETHICIST'],
                ['href' => 'statistician', 'icon' => 'StatisticianLogo.png', 'text' => 'STATISTICIAN'],
                ['href' => 'methodologist', 'icon' => 'MethodologistLogo.png', 'text' => 'METHODOLOGIST'],
                ['href' => 'accountant', 'icon' => 'AccountantLogo.png', 'text' => 'ACCOUNTANT']
            ] as $item)
                <a href="{{ url('/studentpreference/' . $item['href']) }}" class="flex items-center h-[90px]  justify-start bg-maincolor text-white text-[44px] font-bold rounded-lg p-4 shadow-md hover:bg-white duration-200 ease-in">
                    <img src="{{ asset('img/' . $item['icon']) }}" alt="{{ $item['text'] }} Icon" class="w-14 h-14 mr-4 ">
                    <span class="text-hover">{{ $item['text'] }}</span>
                </a>
            @endforeach
        </div>
    </main>
</body>

</html>
