<div>
    <div x-data="{ isOpen: false, currentPage: window.location.pathname }" class="relative flex items-center justify-between px-8 py-4">
        <div class="flex items-center space-x-2">
            <button 
                @click="isOpen = !isOpen" 
                class="focus:outline-none relative w-10 h-14 flex items-center justify-center rounded-md"
                :class="{ 'bg-blue-100': isOpen }"
            >
                <template x-if="!isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </template>

                <template x-if="isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="-mt-3 h-8 w-8 text-blue-800" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6-6-6z" />
                        <path d="M7.41 12.58L12 17.17l4.59-4.59L18 14l-6 6-6-6z" />
                        <path d="M7.41 16.58L12 21.17l4.59-4.59L18 18l-6 6-6-6z" />
                    </svg>
                </template>
            </button>

            <h1 class="text-2xl mt-2 font-bold text-white">EduBridge</h1>
        </div>

        <button class="text-white px-4 py-2 border-2 text-sm font-bold border-white rounded-lg">L O G I N</button>

        <div 
            x-show="isOpen" 
            @click.away="isOpen = false"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="absolute top-16 left-8 w-40 text-center text-l bg-blue-100 text-black rounded-lg shadow-lg mt-2"
        >
            <ul class="p-2 space-y-2">
                <li>
                    <button class="w-full px-2 py-2 bg-blue-100 hover:bg-blue-200 rounded" :class="{ 'font-bold': currentPage === '/' }">
                        Home
                    </button>
                </li>
                <li>
                    <button class="w-full px-2 py-2 bg-blue-100 hover:bg-blue-200 rounded" :class="{ 'font-bold': currentPage.includes('about') }">
                        About Us
                    </button>
                </li>
                <li>
                    <button class="w-full px-2 py-2 bg-blue-100 hover:bg-blue-200 rounded" :class="{ 'font-bold': currentPage.includes('contact') }">
                        Contact Us
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-b-2 mx-4 -mt-4 border-white"></div>
</div>