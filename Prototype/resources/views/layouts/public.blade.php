<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div id="app">
      <nav class="bg-white shadow-md">
          <div class="container mx-auto flex justify-between items-center px-4 py-3">
              <a class="text-lg font-semibold text-gray-800" href="{{ url('/public/index') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="text-gray-500 focus:outline-none lg:hidden" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
              </button>

              <div class="hidden lg:flex lg:items-center lg:space-x-6" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="flex space-x-4">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="flex space-x-4">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li>
                                  <a class="text-gray-600 hover:text-gray-800" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li>
                                  <a class="text-gray-600 hover:text-gray-800" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="relative">
                              <button id="navbarDropdown" class="flex items-center text-gray-600 hover:text-gray-800 focus:outline-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  {{ Auth::user()->name }}
                                  <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                              </button>

                              <div class="absolute right-0 mt-2 bg-white border rounded-md shadow-lg z-20 hidden" aria-labelledby="navbarDropdown">
                                  <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>

      <main class="py-4">
          @yield('content')
      </main>
  </div>
</body>

</html>