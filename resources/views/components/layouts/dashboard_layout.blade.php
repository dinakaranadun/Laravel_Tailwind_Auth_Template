<x-layouts.layout>
  <div class="min-h-full">
    <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <!-- Logo-->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="/dashboard">
               <img class="h-8 w-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo" />
            </a>
          </div>
        </div>
        <!--  Nav Items -->
        <div class="flex items-center ">
          <div class="hidden md:block ml-10 space-x-4">
            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>
          </div>
        </div>

        <!-- Profile + Notification -->
        <div class="hidden md:flex items-center space-x-4">
          <button id="notif-btn" class="text-gray-400 hover:text-white p-1 rounded-full focus:outline-none focus:ring-2 focus:ring-white">
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>

          <div class="relative">
            <button id="profile-toggle" class="flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-white">
              <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User" />
            </button>
            <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 z-50">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 font-semibold hover:bg-gray-300 hover:text-gray-900">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 font-semibold hover:bg-gray-300 hover:text-gray-900">Settings</a>
              <form action="/logout" method="POST" class="block px-4 py-2 text-sm text-gray-700 font-semibold hover:bg-gray-300 hover:text-gray-900">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full text-left">Logout</button>
              </form>

            </div>
          </div> 
        </div>

        <!-- Mobile Button -->
        <div class="md:hidden">
          <button id="mobile-menu-button" class="text-gray-400 hover:text-white p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
            <svg id="menu-icon" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-2 pt-2 pb-3 space-y-1">
      <a href="#" class="block bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium">Dashboard</a>
      <a href="#" class="block text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Team</a>
      <a href="#" class="block text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Projects</a>
      <a href="#" class="block text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Calendar</a>
      <a href="#" class="block text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium">Reports</a>
    </div>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-6">
      <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
    </div>
  </header>

  <main>
    <div class="max-w-7xl mx-auto px-4 py-6">
      <!-- Main content -->
      {{ $slot }}
    </div>
  </main>
  </div>
</x-layouts.layout>
