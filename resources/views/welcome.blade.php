@include('partials.__header')

<div class="flex flex-col justify-center items-center ">
    <img src="{{ asset('images/osaslogo.png') }}" class="h-10 mt-20 sm:h-40" />
    <p class="text-dark text-5xl font-medium mt-4">OSAS</p>
    <p class="text-dark text-3xl font-medium">Management System</p>
    <a href="{{ route('student_showlogin') }}">
        <button type="button"
            class="mt-20 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            GET STARTED
        </button>
    </a>
</div>

@include('partials.__footer')
