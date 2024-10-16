<!-- Student Login-Signup Modal -->
<div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-maincolor pt-3 pb-1 pr-6 pl-6 rounded-[6px] shadow-lg w-[400px]">
        <!-- Modal Header -->
        <div class="flex justify-center items-center mb-[2px]">
            <img src="{{ asset('img/StudentLogo.png') }}" alt="Student Logo" class="w-8 h-8 mr-2 mb-2">
            <h2 class="text-2xl font-bold text-[#0C3A5E]">STUDENT</h2>
        </div>

        <!-- Toggle between Login and Signup with active underline animation -->
        <div class="flex justify-center space-x-8 mb-2 text-[18px]">
            <a href="#" @click="isLogin = true" 
               :class="isLogin ? 'font-bold text-[#0C3A5E] border-b-2 border-[#0C3A5E] pb-1 no-underline  transition duration-150 ease-in-out' : 'text-hover no-underline'">
               Login
            </a>
            <a href="#" @click="isLogin = false" 
               :class="!isLogin ? 'font-bold text-[#0C3A5E] border-b-2 border-[#0C3A5E] pb-1 no-underline transition duration-150 ease-in-out' : 'text-hover no-underline'">
               Sign up
            </a>
        </div>

        <!-- Login Form -->
        <form x-show="isLogin" class="space-y-1">
            <!-- Username -->
            <div class="mb-[2px]">
                <input type="text" class="mt-1 w-full p-[2px] placeholder-hover border-hover border-[2px] rounded-[2px] text-hover" placeholder="Username">
            </div>

            <!-- Password -->
            <div class="mb-1">
                <input type="password" class=" w-full p-[2px] placeholder-hover border-hover border-[2px] rounded-[2px] text-hover " placeholder="Password">
            </div>

            <!-- Forgot Password (Centered, No Underline) -->
            <div class="flex justify-center items-center mt-[2px]">
                <a href="#" class="text-sm text-hover mb-3 no-underline">Forgot your password?</a>
            </div>

            <!-- Login Button -->
            <div class="flex justify-center gap-12 mt-6">
                <button type="submit" class="bg-hover font-bold text-white px-1 py-1 rounded-[4px] w-[130px] h-[36px] text-[18px]">LOGIN</button>
                <button type="button" @click="showModal = false" class="bg-[#c4eaf7] text-hover text-[18px] h-[36px] font-bold border-hover border-[1px] px-1 py-1 rounded-[4px] w-[130px]">CANCEL</button>
            </div>
        </form>

        <!-- Sign-up Form -->
        <form x-show="!isLogin" class="space-y-4">
            <!-- Last Name -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Enter your last name">
            </div>

            <!-- Username -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Enter your username">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Enter your password">
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" class="mt-1 w-full p-2 border border-gray-300 rounded-md" placeholder="Confirm your password">
            </div>

            <!-- Upload ID -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Upload your School ID</label>
                <div class="flex items-center">
                    <a href="#" class="text-blue-600 text-sm underline">Click here to upload</a>
                </div>
                <small class="text-gray-500">Note: Verification may take 1-2 days</small>
            </div>

            <!-- Sign Up Button -->
            <div class="flex justify-between mt-6">
                <button type="submit" class="bg-[#0C3A5E] text-white px-4 py-2 rounded-md w-[130px]">SIGN UP</button>
                <button type="button" @click="showModal = false" class="bg-[#D5EAFD] text-[#0C3A5E] border-[12px] border-[#0C3A5E] px-4 py-2 rounded-[2px] w-[130px]">CANCEL</button>
            </div>
        </form>
    </div>
</div>
