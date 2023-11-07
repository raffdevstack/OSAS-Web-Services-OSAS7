@include('partials.__header')


<div class="min-h-screen min-w-full flex flex-col md:flex-row  ">
    <!--left-->
    <div class="bg-white ouryellowbg shadow-lg rounded-lg md:w-1/2 sm:w-full min-h-full m-5 md:mr-0  ">
        <div class="m-3 p-3 md:p-8 rounded-lg flex flex-col relative"style=" height:96%; ">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-white">Welcome to OSAS Web Services</h1>
                
            </div>
            <div class="hidden md:block absolute inset-0 flex items-center justify-center">
                <!-- Image at the very center -->
                <img src="/images/login_image.png" alt="" class="mt-12 mx-auto w-80 ">
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
    <div
        class="shadow-lg p-8 bg-white rounded-lg min-h-full m-5 mt-0 md:w-1/2 min-h-full flex flex-col sm:w-full md:mt-5">

        <h1 class="text-2xl font-bold text-gray-900">Student Sign-up</h1>
        <div class="gap-4 my-6 mt-12 flex justify-center align-middle flex-wrap ">
            <h2 class="w-full font-semibold text-center text-lg">Welcome, {{ $student->student_fname }}!</h2>
            <img class="w-24 rounded-full border-yellow-500 border-2" src="{{ $student->student_picture }}"
                alt="">
            <div class="gap-2 w-full flex align-middle justify-center text-center">
                <h3 class="m-0 text-sm">OSAS id:</h3>
                <h3 class="m-0 text-base font-semibold">{{ str_pad($student->student_osasid, 5, '0', STR_PAD_LEFT) }}
                </h3>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('student_home') }}">
                <button type="submit"
                    class="block w-full h-10 hover:bg-red-900 text-white font-medium py-2 rounded-full text-center transition duration-300 ourmaroonbg">
                    Go to dashboard
                </button>
            </a>
        </div>


        {{-- terms and conditions and privacy policy --}}
        <div class="lg:mt-auto mt-4 text-gray-700 text-base">
            <p>By signing up, you agree to our <a href="{{ route('terms-conditions') }}" target="_blank"
                    class="ouryellow font-bold">Terms of Service</a> and <a href="{{ route('data-privacy-policy') }}"
                    target="_blank" class="ouryellow font-bold">Privacy Policy</a>.</p>
        </div>
    </div>
</div>
@include('partials.__footer')
