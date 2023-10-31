@include('partials.__header', ['$title'])

@include('partials.__sidebar')

<div class=" md:ml-64 pb-4">
    <div class=" px-4 py-6 m-4 flex justify-end">
        @include('partials.__admin_profile')
    </div>

    {{-- main content --}}
    <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg dark:border-gray-700" style="min-height: 85vh">
        {{-- breadcrumb container --}}
        <div class=" flex items-center py-2 mb-4 rounded  dark:bg-gray-800">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items space-x-1">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin.dashboard') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <span class="px-1 material-symbols-rounded" style="font-size:20px">dashboard</span>
                            Dashboard
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
                                Admins
                            </p>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        {{-- title + button container --}}
        <div class="flex items-center justify-center py-2 mb-4 rounded text-slate-800 dark:bg-gray-800">
            <h2 class=" text-lg font-bold leading-none tracking-tight text-slate-800 md:text-xl dark:text-white">
                Manage Admins
            </h2>
            {{-- for medium --}}
            <form action="{{ route('admin.create') }}" method="GET" class="block absolute right-8 md:right-10">
                @csrf
                <button type="submit"
                    class="hidden md:inline-flex items-center px-1 py-1 text-sm font-medium text-center bg-gray-200 rounded-lg hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <div
                        class="relative inline-flex items-center px-1 py-1 text-sm font-medium text-center text-white ouryellowbg rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="material-symbols-rounded">
                            add
                        </span>
                    </div>
                    <h3 class="px-1 ">Add Admin</h3>
                </button>
                {{-- for small --}}
                <button type="submit"
                    class="md:hidden  inline-flex items-center px-1 py-1 text-sm font-medium text-center bg-gray-200 rounded-lg hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <div
                        class="relative inline-flex items-center px-1 py-1 text-sm font-medium text-center text-white ouryellowbg rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="material-symbols-rounded">
                            add
                        </span>
                    </div>
                </button>
            </form>
        </div>

        <div class=" flex flex-col lg:flex-row lg:flex-wrap items-center mb-4 rounded dark:bg-gray-800">
            @foreach ($admins as $admin)
                @php $default_profile = "https://api.dicebear.com/7.x/initials/svg?seed=".$admin->admin_fname."" @endphp
                <a href="{{ route('admin.profile', ['admin' => $admin->admin_id]) }}"
                    class="border-box lg:w-80 truncate w-full m-2 bg-white border border-gray-300 rounded-lg hover:shadow-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center p-2">
                        <img class="mr-2 border-4 h-10 w-10 rounded-full"
                            src="{{ $admin->admin_image ? asset('/storage/admin/thumbnail/' . $admin->admin_image) : "$default_profile" }}">
                        <div>
                            <h5 class=" text-lg font-semibold tracking-tight text-gray-700 dark:text-white">
                                {{ $admin->admin_fname }} {{ $admin->admin_lname }}
                            </h5>
                            <p class="text-ellipsis font-normal text-sm text-gray-500 dark:text-gray-600">
                                {{ $admin->email }}
                            </p>
                        </div>
                    </div>
                    <div class="p-1 px-2 pt-0 flex flex-row justify-between text-gray-500">
                        <div class="flex items-center">
                            <span class="text-sm material-symbols-outlined mr-1 text-md">
                                admin_panel_settings
                            </span>
                            <p class=" font-normal text-sm  dark:text-gray-600">
                                {{ $admin->adminType->admintype_name ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm material-symbols-outlined mr-1">
                                meeting_room
                            </span>
                            <p class=" font-normal text-sm  dark:text-gray-600">
                                {{ $admin->office->office_name ?? 'N/A' }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        // Function to show the modal
        function showModal() {
            $('#authentication-modal').removeClass('hidden');
        }

        // Function to hide the modal
        function hideModal() {
            $('#authentication-modal').addClass('hidden');
        }

        // Show the modal when the "Toggle modal" button is clicked
        $('[data-modal-toggle="authentication-modal"]').on('click', function() {
            showModal();
        });

        // Hide the modal when the close button is clicked
        $('[data-modal-hide="authentication-modal"]').on('click', function() {
            hideModal();
        });
    });
</script>




@include('partials.__footer')
