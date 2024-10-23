<div class="z-100">
    <!-- Trigger button (Three Dots) with Tooltip -->
    <div x-data="{ tooltip: false, showPopup: false }" x-cloak class="relative">
        <!-- Tooltip -->
        <div x-show="tooltip"
        x-cloak
             class="absolute z-20 bg-gray-700 text-white text-xs text-center rounded py-2 px-4 mb-10"
             style="bottom: 10%;">
            Show Credentials
        </div>

        <!-- Three Dots Button -->
        <button @mouseover="tooltip = true"
                @mouseleave="tooltip = false"
                @click="showPopup = true"
                class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-10 hover:size-8 z-10 duration-100">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>

        <!-- Popup -->
        <div x-show="showPopup"
             class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
            <div class="relative bg-black pt-6 pb-6 px-8 rounded-lg shadow-lg w-1/2 text-white">
                <!-- X Button to close modal -->
                <button @click="showPopup = false" class="absolute top-4 right-3 text-gray-500 hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Modal Content -->
                <div class="flex items-center mb-2 ml-3">
                    <img src="{{ asset('img/ProfessionalLogo.png') }}" alt="Professional Logo" class="w-12 h-12 mr-4 rounded-full bg-maincolor p-1">
                    <div>
                        <h2 class="text-2xl font-bold text-maincolor">John Alex B. Thompson</h2>
                        <p class="text-sm text-green-400">Active</p>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="border-gray-600 border-5 mb-2">

                <!-- Contact Information -->
                <div class="mb-4">
            <h3 class="text-lg font-semibold text-maincolor">Contact Information</h3>
    
                <!-- Email and Phone Information next to each other -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Email Section -->
                    <div class="flex items-center space-x-2 ml-10">
                        <div>
                        <svg fill="#ffffff" width="32" height="32" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 75.294 75.294" xml:space="preserve" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path d="M66.097,12.089h-56.9C4.126,12.089,0,16.215,0,21.286v32.722c0,5.071,4.126,9.197,9.197,9.197h56.9 
                                        c5.071,0,9.197-4.126,9.197-9.197V21.287C75.295,16.215,71.169,12.089,66.097,12.089z M61.603,18.089L37.647,33.523L13.691,18.089 
                                        H61.603z M66.097,57.206h-56.9C7.434,57.206,6,55.771,6,54.009V21.457l29.796,19.16c0.04,0.025,0.083,0.042,0.124,0.065 
                                        c0.043,0.024,0.087,0.047,0.131,0.069c0.231,0.119,0.469,0.215,0.712,0.278c0.025,0.007,0.05,0.01,0.075,0.016 
                                        c0.267,0.063,0.537,0.102,0.807,0.102c0.001,0,0.002,0,0.002,0c0.002,0,0.003,0,0.004,0c0.27,0,0.54-0.038,0.807-0.102 
                                        c0.025-0.006,0.05-0.009,0.075-0.016c0.243-0.063,0.48-0.159,0.712-0.278c0.044-0.022,0.088-0.045,0.131-0.069 
                                        c0.041-0.023,0.084-0.04,0.124-0.065l29.796-19.16v32.551C69.295,55.771,67.86,57.206,66.097,57.206z"></path>
                                </g>
                            </g>
                        </svg>

                        </div>
                        <!-- Email Information -->
                        <div class="flex flex-col">
                            <span class="text-sm">Email</span>
                            <span class="text-m font-bold text-maincolor">jabthompson@plm.edu.ph</span>
                        </div>
                    </div>

                    <!-- Phone Section -->
                    <div class="flex items-center space-x-2">
                        <!-- Heroicon for Phone -->
                        <div>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" class="w-8 h-8">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.73268 2.043C6.95002 0.832583 8.95439 1.04804 9.9737 2.40962L11.2347 4.09402C12.0641 5.20191 11.9909 6.75032 11.0064 7.72923L10.7676 7.96665C10.7572 7.99694 10.7319 8.09215 10.76 8.2731C10.8232 8.6806 11.1635 9.545 12.592 10.9654C14.02 12.3853 14.8905 12.7253 15.3038 12.7887C15.4911 12.8174 15.5891 12.7906 15.6194 12.78L16.0274 12.3743C16.9026 11.5041 18.2475 11.3414 19.3311 11.9305L21.2416 12.9691C22.8775 13.8584 23.2909 16.0821 21.9505 17.4148L20.53 18.8273C20.0824 19.2723 19.4805 19.6434 18.7459 19.7119C16.9369 19.8806 12.7187 19.6654 8.28659 15.2584C4.14868 11.144 3.35462 7.556 3.25415 5.78817L4.00294 5.74562L3.25415 5.78817C3.20335 4.89426 3.62576 4.13796 4.16308 3.60369L5.73268 2.043ZM8.77291 3.30856C8.26628 2.63182 7.322 2.57801 6.79032 3.10668L5.22072 4.66737C4.8908 4.99542 4.73206 5.35695 4.75173 5.70307C4.83156 7.10766 5.47286 10.3453 9.34423 14.1947C13.4057 18.2331 17.1569 18.3536 18.6067 18.2184C18.9029 18.1908 19.1975 18.0369 19.4724 17.7636L20.8929 16.3511C21.4704 15.777 21.343 14.7315 20.5252 14.2869L18.6147 13.2484C18.0871 12.9616 17.469 13.0562 17.085 13.438L16.6296 13.8909L16.1008 13.359C16.6296 13.8909 16.6289 13.8916 16.6282 13.8923L16.6267 13.8937L16.6236 13.8967L16.6171 13.903L16.6025 13.9166C16.592 13.9262 16.5799 13.9367 16.5664 13.948C16.5392 13.9705 16.5058 13.9959 16.4659 14.0227C16.3858 14.0763 16.2801 14.1347 16.1472 14.1841C15.8764 14.285 15.5192 14.3392 15.0764 14.2713C14.2096 14.1384 13.0614 13.5474 11.5344 12.0291C10.0079 10.5113 9.41194 9.36834 9.2777 8.50306C9.20906 8.06061 9.26381 7.70331 9.36594 7.43225C9.41599 7.29941 9.47497 7.19378 9.5291 7.11389C9.5561 7.07405 9.58179 7.04074 9.60446 7.01368C9.6158 7.00015 9.6264 6.98817 9.63604 6.9777L9.64977 6.96312L9.65606 6.95666L9.65905 6.95363L9.66051 6.95217C9.66122 6.95146 9.66194 6.95075 10.1908 7.48258L9.66194 6.95075L9.94875 6.66556C10.3774 6.23939 10.4374 5.53194 10.0339 4.99297L8.77291 3.30856Z" fill="#ffffff"></path>
                            </g>
                        </svg>
                        </div>
                        <!-- Phone Information -->
                        <div class="flex flex-col">
                            <span class="text-sm">Mobile</span>
                            <span class="text-m text-maincolor font-bold">09671592265</span>
                        </div>
                    </div>
                </div>
            </div>
                            <!-- Divider -->
                <hr class="border-gray-600 border-5 mb-2">

                <!-- Credentials -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2 text-maincolor">Credentials</h3>
                    <div class = "ml-10">  
                    <p>Worked at <strong class="text-maincolor">Pamantasan ng Lungsod Maynila</strong> for 10 years</p>
                    <p class="ml-5">- Financial Management and Statistics Professor</p>
                    <p>Worked at <strong class="text-maincolor">Converged Networking Co.</strong> for <strong class="text-maincolor"> 5 years</strong></p>
                    <p class="ml-5">- Data Analyst</p>
                    <a href="#" class="text-maincolor hover:underline">Show more credentials</a>
                    </div>
                </div>

                <!-- Divider -->
                <hr class="border-gray-600 border-5 mb-2">

                <!-- Work History -->
                <div>
                    <h3 class="text-lg font-semibold mb-2 text-maincolor">Work History within EduBridge</h3>
                    <p class="mb-2 text-center">Work History in Total: <strong class="text-maincolor"> 12 </strong></p>
                    <div class="ml-10">
                    <ul class="list-disc list-inside">
                        <li>Helped <strong class="text-maincolor">John Lester D. Ramonel</strong> in <strong class="text-maincolor">Data Analysis</strong></li>
                        <li>Helped <strong class="text-maincolor">Sean John C. Cadag</strong> in <strong class="text-maincolor">Statistics</strong></li>
                        <li>Helped <strong class="text-maincolor">Christian Hans Y. Yap</strong> in <strong class="text-maincolor">Accounting</strong></li>
                    </ul>
                    <a href="#" class="text-maincolor hover:underline ml-3">Show more work history</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
