<!-- Student Login-Signup Modal -->
<div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-[#c4eaf7] p-6 rounded-lg shadow-lg w-[400px]">
        <!-- Modal Header -->
        <div class="flex justify-center items-center mb-[10px]">
            <img src="{{ asset('img/StudentLogo.png') }}" alt="Student Logo" class="w-8 h-8 mr-2 mb-2">
            <h2 class="text-2xl font-bold text-[#0C3A5E]">STUDENT</h2>
        </div>

        <!-- Toggle between Login and Signup -->
        <div class="flex justify-center space-x-8 mb-6">
            <a href="#" @click="isLogin = true" :class="isLogin ? 'font-bold text-[#0C3A5E]' : 'text-gray-400'">Login</a>
            <a href="#" @click="isLogin = false" :class="!isLogin ? 'font-bold text-[#0C3A5E]' : 'text-gray-400'">Sign up</a>
        </div>

        <!-- Login Form -->
        <form x-show="isLogin" class="space-y-4">
            <!-- Username -->
            <div class="mb-[2px]">
                <input type="text" class="mt-1 w-full p-2 border-black border-2 rounded-[4px]" placeholder="Username">
            </div>

            <!-- Password -->
            <div class="mb-1">
                <input type="password" class=" w-full p-2  border-black border-2 rounded-[4px] " placeholder="Password">
            </div>

            <!-- Forgot Password (Centered) -->
            <div class="flex justify-center items-center">
                <a href="#" class="text-sm text-blue-600 underline">Forgot your password?</a>
            </div>

            <!-- Login Button -->
            <div class="flex justify-between mt-6">
                <button type="submit" class="bg-black font-bold text-white px-4 py-2 rounded-md w-[130px]">LOGIN</button>
                <button type="button" @click="showModal = false" class="bg-[#D5EAFD] text-[#0C3A5E] border border-[#0C3A5E] px-4 py-2 rounded-md w-[130px]">CANCEL</button>
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
                <button type="button" @click="showModal = false" class="bg-[#D5EAFD] text-[#0C3A5E] border border-[#0C3A5E] px-4 py-2 rounded-md w-[130px]">CANCEL</button>
            </div>
        </form>
    </div>
</div>
