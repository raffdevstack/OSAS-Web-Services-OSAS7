@if (session()->has('message'))
    <div x-data="{ show: true }" x-show="show" x-init="() => { setTimeout(() => { show = false; }, 5000); }"
        class="z-50 fixed right-5 top-5 bg-teal-100 border-t-4  border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
                <p class="font-bold">{{session('message')}}</p>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div x-data="{ show: true }" x-show="show" x-init="() => { setTimeout(() => { show = false; }, 5000); }"
        class="z-50 fixed right-5 top-5 w-80 opacity-85 bg-red-100 border-t-4 border-red-500 rounded-lg text-red-900 px-4 py-3 shadow-md"
        role="alert">
        <div class="text-red-900  " role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-4 w-4 text-red-500 mr-2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg></div>
                <div>
                    <p class="font-bold">Please input the correct values</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session()->has('error'))
    <div x-data="{ show: true }" x-show="show" x-init="() => { setTimeout(() => { show = false; }, 5000); }" class="z-50 fixed right-5 top-5 bg-red-100 border-t-4  border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
                <p class="font-bold">{{session('error')}}</p>
            </div>
        </div>
    </div>
@endif

@if (session()->has('success'))
    <div class=" z-50 bg-green-500 text-white px-4 py-2 mb-2 rounded">
        has success?{{session('success')}}
    </div>
@endif
