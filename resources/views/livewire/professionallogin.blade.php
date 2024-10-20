<!-- Professional Login-Signup Modal -->
<div x-show="showProfessionalModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" x-data="{ isLogin: true, fileNameProfessional: '' }">
    <div class="bg-maincolor pt-3 pb-1 pr-6 pl-6 rounded-[6px] shadow-lg w-[400px]">
        <!-- Modal Header -->
        <div class="flex justify-center items-center mb-[2px]">
            <img src="{{ asset('img/ProfessionalLogo.png') }}" alt="Professional Logo" class="w-8 h-8 mr-2 mb-2">
            <h2 class="text-2xl font-bold text-[#0C3A5E]">PROFESSIONAL</h2>
        </div>

        <!-- Toggle between Login and Signup with active underline animation -->
        <div class="flex justify-center space-x-8 mb-2 text-[18px]">
            <a href="#" @click="isLogin = true" 
               :class="isLogin ? 'font-bold text-[#0C3A5E] border-b-2 border-[#0C3A5E] pb-1 no-underline transition' : 'text-hover no-underline hover:font-bold'">
               Login
            </a>
            <a href="#" @click="isLogin = false" 
               :class="!isLogin ? 'font-bold text-[#0C3A5E] border-b-2 border-[#0C3A5E] pb-1 no-underline transition' : 'text-hover no-underline hover:font-bold'">
               Sign up
            </a>
        </div>

        <!-- Login Form -->
        <form x-show="isLogin" class="space-y-1">
            <!-- Username -->
            <div class="mb-[2px]">
                <input type="text" class="mt-1 w-full p-[2px] placeholder-hover border-[2px] border-hover text-hover rounded-[2px] focus:bg-whitehover focus:border-[3px] focus:outline-none duration-100" placeholder="Username">
            </div>

            <!-- Password -->
            <div class="mb-1">
                <input type="password" class="w-full p-[2px] placeholder-hover border-[2px] border-hover text-hover rounded-[2px] focus:bg-whitehover focus:border-[3px] focus:outline-none duration-100" placeholder="Password">
            </div>

            <!-- Forgot Password (Centered, No Underline) -->
            <div class="flex justify-center items-center mt-[2px]">
                <a href="#" class="text-sm text-hover mb-3 no-underline hover:text-blue-600 hover:underline duration-150">Forgot your password?</a>
            </div>

            <!-- Login Button -->
            <div class="flex justify-center gap-12 mt-6">
                <button type="submit" class="bg-hover font-bold text-maincolor px-1 py-1 rounded-[4px] w-[130px] h-[36px] text-[18px] hover:text-hover hover:border-[1px] hover:border-hover hover:bg-whitehover">LOGIN</button>
                <button type="button" @click="showProfessionalModal = false" class="bg-[#c4eaf7] text-hover text-[18px] h-[36px] font-bold border-hover border-[1px] px-1 py-1 rounded-[4px] w-[130px] hover:border-[1px] hover:bg-whitehover hover:text-hover hover:border-hover">CANCEL</button>
            </div>
        </form>

        <!-- Sign-up Form -->
        <form x-show="!isLogin" class="space-y-1">
            <!-- Last Name -->
            <div class="mb-3 ">
                <input type="text" class="text-hover mt-1 w-full px-2 py-[1px] border-[2px] border-hover rounded-[3px] placeholder-hover text-center focus:border-hover focus:border-[3px] focus:bg-whitehover focus:outline-none" placeholder="Last Name">
            </div>

            <!-- Username (Email) -->
            <div class="mb-3">
                <input type="text" class="text-hover mt-1 w-full px-2 py-[1px] border-[2px] border-hover rounded-[3px] placeholder-hover text-center focus:border-hover focus:border-[3px] focus:bg-whitehover focus:outline-none" placeholder="Email">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <input type="password" class="text-hover mt-1 w-full px-2 py-[1px] border-[2px] border-hover rounded-[3px] placeholder-hover text-center focus:border-hover focus:border-[3px] focus:bg-whitehover focus:outline-none" placeholder="Password">
            </div>

            <!-- Upload Resume -->
            <div class="mb-4">
                <label for="file-upload-professional" class="cursor-pointer flex flex-col items-center justify-center border-[2px] border-solid border-hover rounded-[3px] h-14 hover:bg-whitehover duration-100">
                    <span class="text-hover no-underline text-sm">Upload your Resume</span>
                    <div class="flex items-center">
                        <!-- SVG icon -->
                        <svg baseProfile="tiny" height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.364,6.635c-1.561-1.559-4.1-1.559-5.658,0L8.172,11.17c-0.473,0.473-0.733,1.1-0.733,1.77   c0,0.668,0.261,1.295,0.732,1.768c0.487,0.486,1.128,0.73,1.769,0.73c0.64,0,1.279-0.242,1.767-0.73l2.122-2.121   c0.391-0.395,0.586-0.904,0.586-1.414c0-0.512-0.195-1.023-0.586-1.414l-3.536,3.535c-0.193,0.195-0.511,0.195-0.708-0.002   c-0.127-0.127-0.146-0.275-0.146-0.352c0-0.078,0.019-0.227,0.146-0.354l4.535-4.537c0.778-0.779,2.048-0.779,2.83,0   c0.779,0.779,0.779,2.049,0,2.828l-4.537,4.537l-2.535,2.535c-0.779,0.779-2.049,0.779-2.828,0c-0.78-0.779-0.78-2.049,0-2.828   l0.095-0.096c-0.451-0.6-0.702-1.359-0.702-2.125l-0.807,0.807c-1.56,1.559-1.56,4.098,0,5.656c0.779,0.779,1.804,1.17,2.828,1.17   s2.049-0.391,2.828-1.17l7.072-7.072C19.924,10.732,19.924,8.195,18.364,6.635z"/></g></svg>
                        <small x-text="fileNameProfessional ? 'Selected file: ' + fileNameProfessional : 'Click here to upload'" class="text-hover underline mt-1 block text-center"></small>
                    </div>
                    <input id="file-upload-professional" type="file" class="hidden" @change="fileNameProfessional = $event.target.files[0].name">
                </label>
                <small class="block text-center text-hover text-[12px] mt-1">Note: Verification may take 2-5 days</small>
            </div>

            <!-- Sign Up Button -->
            <div class="flex justify-center gap-12 mt-6">
                <button type="submit" class="bg-hover font-bold text-maincolor px-1 py-1 rounded-[4px] w-[130px] h-[36px] text-[18px] hover:bg-whitehover hover:border-[1px] hover:text-hover hover:border-hover duration-100">SIGN UP</button>
                <button type="button" @click="showProfessionalModal = false" class="bg-[#c4eaf7] text-hover text-[18px] h-[36px] font-bold border-hover border-[1px] px-1 py-1 rounded-[4px] w-[130px] hover:bg-whitehover hover:border-[1px] hover:text-hover hover:border-hover duration-100">CANCEL</button>
            </div>
        </form>
    </div>
</div>
