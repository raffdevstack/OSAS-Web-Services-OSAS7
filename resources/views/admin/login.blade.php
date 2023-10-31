@include('partials.__header')


<div class="min-h-screen min-w-full flex flex-col md:flex-row  ">
    <!--left-->
    <div class="bg-white shadow-lg rounded-lg md:w-1/2 sm:w-full min-h-full m-5 md:mr-0  ">
        <div class="m-3 p-3 md:p-8 rounded-lg flex flex-col relative usep_background"style=" height:96%; ">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Welcome OSAS System Admin</h1>
                <p class="mt-4 text-white text-xl">To get started, please provide the following information to create
                    your admin account.</p>
            </div>
            <div class="hidden md:block inset-0 flex items-center justify-center">
                <!-- Image at the very center -->
                <img src="/img/Ellips.png" alt="" class="mt-12 mx-auto w-80 ">
            </div>
            <div class="flex justify-center mt-auto">
                <div class="w-12 h-12 rounded-full ouryellowbg flex items-center justify-center">
                    <i class='bx bxl-facebook-square' style='color:#ffffff; font-size: 30px;'></i>
                </div>
                <div class="w-12 h-12 rounded-full ouryellowbg flex items-center justify-center ml-4">
                    <i class='bx bx-world' style="color:#ffffff; font-size: 30px;"></i>
                </div>
                <div class="w-12 h-12 rounded-full ouryellowbg flex items-center justify-center ml-4">
                    <i class='bx bxl-gmail' style='color:#ffffff; font-size: 30px;'></i>
                </div>
            </div>
        </div>
    </div>
    <!--right-->
    <div class="shadow-lg p-8 bg-white rounded-lg min-h-full m-5 mt-0 md:w-1/2 min-h-full flex flex-col sm:w-full md:mt-5">
        <div>
            <form action="/admin/login/process" method="POST" class=" flex flex-col">
                @csrf
                <h1 class="text-2xl font-bold text-gray-900">Admin Login</h1>
                <div class="mt-4">
                    <label for="email" class="block text-gray-600 font-bold text-sm">Email </label>
                    <input type="email" name="email" id="email" required
                        class="h-10 mt-1 px-4 py-2 w-full rounded-full border border-gray-300 focus:outline-none focus:border-yellow-400">
                </div>
                <div class="mt-4">
                    <label for="password" class="block text-gray-600 text-sm font-bold">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 h-10 px-4 py-2 w-full rounded-full border
                        border-gray-300 focus:outline-none focus:border-yellow-400">
                </div>
                <div class="mt-6">
                    <input type="submit"
                        class="block w-full bg-red-800 hover:bg-red-900 text-white font-medium py-2 rounded-full text-center transition duration-300"
                        value="Login">
                </div>
                <a href="#" class="ml-2 mt-4 text-blue-500 text-sm  hover:text-blue-400">Forgot Password?</a>
            </form>
            <div class="w-full flex flex-col items-center ">
                <p>or</p>
                <a href="/auth/google/redirect" class="w-full">
                    <button
                        class="flex gap-2 items-center justify-center mt-2 h-10 w-full bg-white-900 text-sm text-gray-600 hover:bg-gray-200 rounded-full outline outline-gray-600  outline-1 px-4 py-1">
                        Login with Google
                        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 19">
                            <path fill-rule="evenodd"
                                d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>

        {{-- terms and conditions and privacy policy --}}
        <div class="lg:mt-auto mt-4 text-gray-700 text-base">
            <p>By signing up, you agree to our <a href="{{ route('terms-conditions') }}" target="_blank" class="ouryellow font-bold">Terms of Service</a> and <a
                    href="{{ route('data-privacy-policy') }}" target="_blank" class="ouryellow font-bold">Privacy Policy</a>.</p>
        </div>

    </div>
</div>
@include('partials.__footer')
