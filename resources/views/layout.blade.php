<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" type="module"></script>
    <title>Lifetainment | @yield('title')</title>
</head>

<body>
    <nav
        class="preset-bg-white-pink flex items-center justify-between px-12 py-8 overflow-hidden h-[var(--navbar-height)] fixed top-0 left-0 z-[1] w-screen">
        <a href="/"><x-logo class="text-3xl" /></a>
        <div class="flex space-x-8 text-upperwide font-bold">
            <a href="">Login</a>
            <a href="">Register</a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </a>
        </div>
    </nav>
    <nav
        class="flex justify-center items-center w-screen space-x-8 text-upperwide h-[var(--navbar-height)] fixed top-[var(--navbar-height)] left-0 z-[1] overflow-hidden preset-bg-pink">
        <a href="/"
            class="{{ Request::path() === '/' ? 'opacity-100' : 'opacity-[0.8]' }} smooth hover:opacity-100">Home</a>
        @foreach (config('constants.CATEGORIES') as $category)
            <a href="/{{ strtolower($category) }}"
                class="{{ Request::path() === "/$category" ? 'opacity-100' : 'opacity-[0.8]' }} smooth hover:opacity-100">
                {{ $category }}
            </a>
        @endforeach
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="flex flex-col space-y-8">
        <!-- Header -->
        <div class="flex flex-col space-y-2 items-center">
            <x-logo class="text-5xl" />
            <x-tagline />
        </div>

        <!-- Body -->
        {{-- <hr>
        <div class="px-12 flex items-center justify-center">
            <div class="flex flex-col space-y-2">
                <div class="text-3xl tracking-tighter font-bold">Navigate</div>
                @foreach (config('constants.CATEGORIES') as $category)
                    <a href="/" class="text-upperwide">{{ $category }}</a>
                @endforeach
            </div>
        </div>
        <hr> --}}

        <!-- Footer -->
        <div class="text-center">
            © 2023 Lifetainment. All rights reserved.
        </div>
    </footer>
</body>

</html>
