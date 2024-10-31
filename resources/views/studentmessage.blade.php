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

<body class="relative min-h-screen flex flex-col text-maincolor bg-gray-100 z-50 font-poppins">
    @livewireScripts
    @include('layouts.floatingorbs')

    <!-- Header Section -->
    <livewire:headertwo />

    <div class="flex justify-center items-center">
        <div
            class="bg-transparent border-maincolor text-white pb-3 rounded-lg max-w-6xl mx-auto flex flex-col w-full h-[550px]">

            <!-- User Profile Section -->
            <div class="flex justify-between items-center border-b-2 border-maincolor py-2 mb-2">
                <div class="flex items-center">
                    <!-- Profile Picture with updated person icon using Heroicons -->
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        <span class="absolute bottom-1 right-1 block h-4 w-4 rounded-full bg-green-500"></span>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-bold text-white opacity-95">{{ $name }} </h3>
                        <p class="text-sm text-white opacity-95">Active now</p>
                    </div>
                </div>
                <!-- Buttons (Call, Video, Info) -->
                <div class="flex items-center space-x-4">
                    <button class="bg-whitehover p-2 rounded-full hover:bg-maincolor">
                        <!-- Phone Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#000000" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </button>
                    <button class="bg-whitehover p-2 rounded-full hover:bg-maincolor">
                        <!-- Camera Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#000000" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </button>
                    <button class="bg-whitehover p-2 rounded-full bg-opacity-75 hover:bg-maincolor hover:bg-opacity-75">
                        <!-- Info Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#000000"
                            class="bi bi-info-lg" viewBox="0 0 16 16">
                            <path
                                d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Chat Messages Section -->
            <div class="flex-grow border-2 border-maincolor p-4 overflow-y-auto max-h-full text-sm">

                <!-- Message from Thompson (Left-aligned) -->
                <div class="flex items-start mb-6 items-end">
                    <div class="w-10 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="#FFFFFF"
                            class="mr-3 bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="inline-block bg-maincolor text-hover px-4 py-2 ml-2 rounded-2xl max-w-md">
                        <p>Yes, I have marked the parts you need to change. I have also included suggestions and
                            comments that will help you on that part.</p>
                    </div>
                </div>

                <!-- Time Indicator -->
                <p class="text-xs text-white text-center mb-2">5:35 PM</p>

                <!-- Message from User (Right-aligned) -->
                <div class="flex justify-end mb-6 relative">
                    <div class="inline-block text-hover bg-white px-4 py-2 rounded-2xl max-w-md text-start">
                        <p>Duly noted on that sir Thompson.</p>
                    </div>
                    <!-- Reaction Button (Thumbs-up) -->
                    <button
                        class="absolute -bottom-4 right-0 bg-white stroke-hover text-white p-1 rounded-full hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#000000" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                    </button>
                </div>

                <!-- Time Indicator -->
                <p class="text-xs text-white text-center mb-2">5:48 PM</p>

                <!-- Another message from User (Right-aligned) -->
                <div class="flex justify-end mb-6">
                    <div class="inline-block bg-white text-hover px-4 py-2 ml-2 rounded-2xl max-w-md">
                        <p>If it is alright with you sir, when could we schedule a meeting for the final consultation?
                        </p>
                    </div>
                </div>

                <!-- Message from Thompson (Left-aligned) -->
                <div class="flex items-start mb-6 items-end">
                    <div class="w-10 h-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="#FFFFFF"
                            class="mr-3 bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="inline-block bg-maincolor text-hover px-4 py-2 ml-2 rounded-2xl max-w-md">
                        <p>Of course, I’m available every Thursday after 7PM. You can call me then.</p>
                    </div>
                </div>
            </div>

            <!-- Input Section -->
            <div class="border-x-2 border-b-2 border-maincolor flex items-center">
                <!-- Paper Clip Icon -->
                <button class="mr-4 ml-4 text-white rounded-full hover:bg-white hover:bg-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                    </svg>
                </button>

                <!-- Input Field -->
                <input type="text" class="w-full h-5/6 bg-white text-black rounded-lg p-3 focus:outline-none"
                    placeholder="Aa">

                <!-- Send Icon -->
                <button class="ml-4 mr-4 text-white rounded-full hover:bg-white hover:bg-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


</body>

</html>