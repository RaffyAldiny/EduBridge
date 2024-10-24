<div class="relative px-4 pt-4">
    <!-- Sticky background image -->
    <div class="fixed inset-0 bg-cover bg-center z-[-1]"
        style="background-image: url('{{ asset('img/edubridgebg.png') }}');"></div>

    <!-- Header -->
    <div x-data="{ isOpen: false, currentPage: window.location.pathname }"
        x-cloak
        class="relative flex items-center justify-between px-4 py-4 z-50">
        <!-- Left Side (Hamburger + EduBridge logo) -->
        <div class="flex items-center justify-center space-x-2">
            <!-- Hamburger Icon -->
            <button @click="isOpen = !isOpen"
                class="focus:outline-none relative w-10 h-14 flex items-center justify-center rounded-md"
                :class="{ 'bg-maincolor': isOpen }">
                <!-- Hamburger icon -->
                <template x-if="!isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-maincolor" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </template>

                <!-- Chevron icon -->
                <template x-if="isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="-mt-3 h-8 w-8 text-hover" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6-6-6z" />
                        <path d="M7.41 12.58L12 17.17l4.59-4.59L18 14l-6 6-6-6z" />
                        <path d="M7.41 16.58L12 21.17l4.59-4.59L18 18l-6 6-6-6z" />
                    </svg>
                </template>
            </button>

            <!-- EduBridge logo -->
            <div class="">
                <h1 class="text-2xl font-bold text-maincolor">EduBridge</h1>
            </div>
        </div>

        <!-- Right Side (Notification icon + Logout button) -->
        <div class="flex items-center justify-center space-x-3">
            <!-- Notification Icon with red badge -->
            <button class="relative focus:outline-none w-10 h-10 flex items-center justify-center">
                <!-- Notification Image -->
                <img src="{{ asset('img/MessageLogo.png') }}" alt="Notifications" class="w-10 h-10 mb-2">

                <!-- Red Badge for Notification Count -->
                <span
                    class="absolute -top-1 -right-1 flex items-center justify-center w-5 h-5 bg-red-500 rounded-full text-white text-xs font-bold">
                    {{ $unreadNotifications }}
                </span>
            </button>

            <!-- Logout Button -->
            <a href="{{ route('homepage') }}" class="no-underline">
                <button
                    class="text-maincolor px-4 py-2 mb-2 hover:bg-whitehover duration-200 hover:border-hover hover:text-hover border-2 text-sm font-bold border-maincolor rounded-lg">
                    L O G O U T
                </button>
            </a>
        </div>

        <!-- Dropdown Menu (Hamburger expanded) -->
        <div x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="absolute top-16 left-6 w-40 text-center text-l bg-maincolor text-black rounded-lg mt-2 z-50"
            style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
            
            <ul class="p-2 space-y-2">
                <li>
                    <a href="{{ url('/studentlist') }}">
                        <button class="text-black w-full pb-2 bg-maincolor hover:font-bold rounded"
                            :class="{ 'font-bold': currentPage === '/' }">
                            Inbox
                        </button>
                    </a>
                </li>
                {{--
                <li>
                    <a href="{{ url('/about') }}">
                        <button class="text-black w-full py-2 bg-maincolor hover:font-bold rounded"
                            :class="{ 'font-bold': currentPage.includes('about') }">
                            About Us
                        </button>
                    </a>
                </li>
                <li>
                    <button class="w-full pb-2 bg-maincolor hover:font-bold rounded"
                        :class="{ 'font-bold': currentPage.includes('contact') }">
                        Contact Us
                    </button>
                </li>
            </ul>
        --}}
        </div>
    </div>

    <!-- Divider -->
    <div class="border-b-2 mx-4 -mt-6 border-maincolor"></div>
</div>
