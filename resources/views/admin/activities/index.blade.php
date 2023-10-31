@include('partials.__header')

@include('partials.__sidebar')

<div class=" sm:ml-64">
   <div class=" px-4 py-6 m-4 flex justify-end">
      @include('partials.__admin_profile')
   </div>
   <div class="p-4 m-4 shadow-lg bg-white border-gray-200 rounded-lg dark:border-gray-700">
      <div class=" flex items-center py-2 mb-4 rounded bg-gray-50 dark:bg-gray-800">     
         <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items space-x-1 md:space-x-3">
               <li aria-current="page" class="inline-flex items-center">
                  <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                     <span class="px-1 material-symbols-rounded" style="font-size:20px" >meeting_room</span>
                     Attendance
                  </a>
               </li>
            </ol>
         </nav>
      </div>
      
      {{-- 1st, 3 col --}}
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <span class="material-symbols-outlined">meeting_room</span>
            <p class="text-sm text-gray-400 dark:text-gray-500">
               OSAS
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <span class="material-symbols-outlined">meeting_room</span>
            <p class="text-sm text-gray-400 dark:text-gray-500">
               Registrar
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <span class="material-symbols-outlined">meeting_room</span>
            <p class="text-sm text-gray-400 dark:text-gray-500">
               Registrar
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <span class="material-symbols-outlined">meeting_room</span>
            <p class="text-sm text-gray-400 dark:text-gray-500">
               Library
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <span class="material-symbols-outlined">meeting_room</span>
            <p class="text-sm text-gray-400 dark:text-gray-500">
               Clinic
            </p>
         </div>
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <span class="material-symbols-outlined">meeting_room</span>
            <p class="text-sm text-gray-400 dark:text-gray-500">
               Guidance
            </p>
         </div>
      </div>

      {{-- 2nd, 1 col --}}
      <div class=" flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>

      {{-- 3rd, 2 col, 2 row --}}
      <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>

      {{-- 4th, 3 col, 2 row --}}
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
   </div>
</div>

@include('partials.__footer')