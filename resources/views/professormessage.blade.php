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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EduBridge</title>
</head>

<body class="relative h-screen text-maincolor bg-gray-100 z-50 font-poppins">
    @livewireScripts
    @extends('layouts.floatingorbs')

    <!-- Header Section -->
    <livewire:headerthree />

    <!-- Main Message Box Section -->
    <div class="h-full bg-white"> <!-- Set the height to 100% of the screen -->
        <div class="bg-gray-800 text-white p-6 rounded-lg shadow-md max-w-4xl mx-auto h-full flex flex-col">
            <!-- User Profile Section -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <!-- Profile Picture with updated person icon using Heroicons -->
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-500"></span>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold">Earvin John T. Dela Cruz</h3>
                        <p class="text-sm text-gray-400">Active now</p>
                    </div>
                </div>
                <!-- Buttons (Call, Video, Info) -->
                <div class="flex items-center space-x-4">
                    <button class="bg-gray-700 p-2 rounded-full hover:bg-gray-600">
                        <!-- Phone Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </button>
                    <button class="bg-gray-700 p-2 rounded-full hover:bg-gray-600">
                        <!-- Camera Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </button>
                    <button class="bg-gray-700 p-2 rounded-full hover:bg-gray-600">
                        <!-- Info Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Chat Messages Section -->
            <div class="flex-grow bg-gray-900 rounded-lg p-4">
                <!-- Message 1 -->
                <div class="mb-4">
                    <p class="text-xs text-gray-500 mb-1 text-center">5:35 PM</p>
                    <div class="text-right">
                        <div class="inline-block bg-blue-600 px-4 py-2 rounded-md max-w-md">
                            <p>Yes, I have marked the parts you need to change. I have also included suggestions and comments that will help you on that part.</p>
                        </div>
                    </div>
                </div>

                <!-- Message 2 -->
                <div class="mb-4">
                    <p class="text-xs text-gray-500 mb-1 text-center">5:48 PM</p>
                    <div>
                        <div class="inline-block bg-gray-700 px-4 py-2 rounded-md max-w-md">
                            <p>Duly noted on that sir Thompson.</p>
                        </div>
                    </div>
                </div>

                <!-- Message 3 -->
                <div class="mb-4">
                    <p class="text-xs text-gray-500 mb-1 text-center">5:48 PM</p>
                    <div>
                        <div class="inline-block bg-gray-700 px-4 py-2 rounded-md max-w-md">
                            <p>If it is alright with you sir, when could we schedule a meeting for the final consultation?</p>
                        </div>
                    </div>
                </div>

                <!-- Message 4 -->
                <div class="mb-4">
                    <p class="text-xs text-gray-500 mb-1 text-center">5:48 PM</p>
                    <div class="text-right">
                        <div class="inline-block bg-blue-600 px-4 py-2 rounded-md max-w-md">
                            <p>Of course, I’m available every Thursday after 7PM. You can call me then.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Input Section -->
            <div class="mt-6 flex items-center">
                <!-- Paper Clip Icon -->
                <button class="mr-4 bg-gray-700 text-white p-2 rounded-full hover:bg-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                    </svg>
                </button>

                <!-- Input Field -->
                <input type="text" class="w-full bg-gray-700 text-white rounded-lg p-3 focus:outline-none" placeholder="Type your message here...">

                <!-- Send Icon -->
                <button class="ml-4 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</body>

</html>
