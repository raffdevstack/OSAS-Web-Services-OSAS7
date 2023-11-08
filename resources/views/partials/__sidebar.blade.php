<button id="sidebtn" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
   type="button"
   class="z-50 left-3 top-3 fixed bg-white inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd"
         d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
      </path>www
   </svg>
</button>

<aside id="logo-sidebar"
   class=" fixed top-0 left-0 mt-15 z-30 w-60 transition-transform -translate-x-full md:translate-x-0"
   aria-label="Sidebar" style="height: 96vh">
   <div class="h-full rounded-lg m-3 mr-0 shadow-lg ourmaroonbg px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <div class="flex flex-col justify-center items-center mt-9">
         <a href="{{ route('admin_dashboard') }}">
               <img src="{{ asset('images/osaslogo.png') }}" class="h-10  sm:h-16" />
         </a>
         <p class="text-white text-lg font-medium mt-1">OSAS</p>
         <p class="text-white text-sm font-medium">Management System</p>
      </div>
      <ul class="space-y-2 text-gray-100 font-medium mt-9">
         <li
               class="rounded-lg {{ request()->routeIs('admin_dashboard', 'admin.manage', 'admin.create') ? 'ouryellowbg' : '' }}">
               <a href="{{ route('admin_dashboard') }}" class="@include('partials.__navli_class')">
                  <span class="material-symbols-rounded">dashboard</span>
                  <span class="ml-3">Dashboard</span>
               </a>
         </li>
         <li class="rounded-lg {{ Route::currentRouteName() == 'admin_offices' ? 'ouryellowbg' : '' }}">
               <a href="{{ route('admin_offices') }}" class="@include('partials.__navli_class')">
                  <span class="material-symbols-rounded">meeting_room</span>
                  <span class="flex-1 ml-3 whitespace-nowrap">Offices</span>
               </a>
         </li>
         <li>
               <a href="#" class="@include('partials.__navli_class')">
                  <span class="material-symbols-rounded">
                     clear_all
                  </span>
                  <span class="flex-1 ml-3 whitespace-nowrap">Clearance</span>

               </a>
         </li>
         <li>
               <a href="#" class="@include('partials.__navli_class')">
                  <span class="material-symbols-rounded">
                     how_to_reg
                  </span>
                  <span class="flex-1 ml-3  whitespace-nowrap">Student Activities</span>
               </a>
         </li>
         <li>
               <a href="#" class="@include('partials.__navli_class')">
                  <span class="material-symbols-rounded">
                     school
                  </span>
                  <span class="flex-1 ml-3  whitespace-nowrap">Scholarship</span>
               </a>
         </li>
      </ul>
   </div>
</aside>
