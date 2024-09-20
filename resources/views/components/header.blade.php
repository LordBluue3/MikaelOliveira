
<nav class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 justify-between">
        <div class="flex">
          <div class="-ml-2 mr-2 flex items-center md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!--
                Icon when menu is closed.

                Menu open: "hidden", Menu closed: "block"
              -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!--
                Icon when menu is open.

                Menu open: "block", Menu closed: "hidden"
              -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-shrink-0 items-center">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
          </div>
          <div class="hidden md:ml-6 md:flex md:space-x-8">
            <a href="{{ route('home') }}" class="inline-flex items-center border-b-2 {{ request()->routeIs('home') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} px-1 pt-1 text-sm font-medium">
                Home
            </a>
            <a href="{{ route('about') }}" class="inline-flex items-center border-b-2 {{ request()->routeIs('about') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} px-1 pt-1 text-sm font-medium">
                Sobre
            </a>
            <a href="{{ route('project') }}" class="inline-flex items-center border-b-2 {{ request()->routeIs('projects') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} px-1 pt-1 text-sm font-medium">
                Projetos
            </a>
            <a href="{{ route('blog') }}" class="inline-flex items-center border-b-2 {{ request()->routeIs('blog') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} px-1 pt-1 text-sm font-medium">
                Blog
            </a>
          </div>
        </div>
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="{{route('contact')}}" type="button" class="relative inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

              Entre em Contato
            </a>
          </div>
          <div class="hidden md:ml-4 md:flex md:flex-shrink-0 md:items-center">
            <a href="{{route('blog')}}#newsletter" class="relative rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </a>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 pb-3 pt-2">
            <a href="{{ route('home') }}" class="block border-l-4 {{ request()->routeIs('home') ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700' }} py-2 pl-3 pr-4 text-base font-medium sm:pl-5 sm:pr-6">
                Home
            </a>
            <a href="{{ route('about') }}" class="block border-l-4 {{ request()->routeIs('about') ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700' }} py-2 pl-3 pr-4 text-base font-medium sm:pl-5 sm:pr-6">
                Sobre
            </a>
            <a href="{{ route('project') }}" class="block border-l-4 {{ request()->routeIs('projects') ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700' }} py-2 pl-3 pr-4 text-base font-medium sm:pl-5 sm:pr-6">
                Projetos
            </a>
            <a href="{{ route('blog') }}" class="block border-l-4 {{ request()->routeIs('blog') ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700' }} py-2 pl-3 pr-4 text-base font-medium sm:pl-5 sm:pr-6">
                Blog
            </a>
        </div>


    </div>
  </nav>



