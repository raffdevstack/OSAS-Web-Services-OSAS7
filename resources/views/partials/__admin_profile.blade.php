<button type="button" {{-- fixed right-5 top-5 --}}
    class="z-40  flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
    <span class="sr-only">Open user menu</span>
    @php
        $default_profile = 'https://api.dicebear.com/7.x/initials/svg?seed=';
        if (Auth::check() && Auth::user()->admin_fname) {
            $default_profile .= Auth::user()->admin_fname;
        } else {
            // Handle the case where the user is not logged in or admin_fname is null
            $default_profile .= 'default_seed'; // You can replace "default_seed" with a default value or handle it as needed
        }
    @endphp
    <img class="h-10 w-10 rounded-full border-4"
        src="{{ Auth::check() && Auth::user()->admin_image ? asset('/storage/admin/thumbnail/' . Auth::user()->admin_image) : $default_profile }}"
        alt="user photo">
</button>
<!-- Dropdown menu -->
<div class="fixed right-5 top-15 z-40 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
    id="user-dropdown">
    <div class="px-4 py-3">
        @if (Auth::check())
            <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->admin_fname }}
                {{ Auth::user()->admin_lname }}</span>

            {{-- <span
                class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->adminType->admintype_name }}</span> --}}

            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
        @else
            <p>You are not logged in.</p>
        @endif
    </div>
    <ul class="py-2" aria-labelledby="user-menu-button">
        <li>
            <form action="/admin/logout" method="POST" class="block w-full">
                @csrf
                <input type="submit" value="Logout"
                    class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" />
            </form>
        </li>
    </ul>
</div>
