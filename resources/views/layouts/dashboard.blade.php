<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class=" flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full  px-6 ">
                    @include('includes.header')
                    <main class="mt-6">
                        @yield('content')
                    </main>

                    @include('includes.footer')
                </div>
            </div>
        </div>
    </body>
</html>
