@include('partials.__header')

@include('partials.__sidebar')

<div class=" md:ml-64 pb-4">
    <div class=" px-4 py-6 m-4 flex justify-end">
        @include('partials.__admin_profile')
    </div>
    <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg dark:border-gray-700">
        {{-- breadcrumbs container --}}
        <div class="flex items-center py-2 mb-4 rounded  dark:bg-gray-800">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin.dashboard') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">dashboard</span>
                            Dashboard
                        </a>
                    </li>
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin.manage') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            Admins
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <p
                                class=" text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Profile
                            </p>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
         {{-- title + button container --}}
         <div class="flex items-center justify-center py-2 mb-4 rounded text-slate-800 dark:bg-gray-800">
            <h2 class=" text-lg font-bold leading-none tracking-tight text-slate-800 md:text-xl dark:text-white">
                Admin Profile
            </h2>

        </div>
        <p><strong>Name:</strong> {{ $admin->admin_fname }} {{ $admin->admin_lname }}</p>
        <p><strong>Email:</strong> {{ $admin->email }}</p>
    </div>
</div>

@include('partials.__footer')
