<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head/>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center  dark:bg-dots-lighter  bg-gradient bg-red-900/80 bg-orange-900/80   selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-fit mx-auto p-6">
                <div class="w-50 flex justify-center">
                    <img src = "./images/chili-pepper-chili-svgrepo-com.svg" class="h-16 w-auto " alt="Pepper"/>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">


                        <div class="w-4/5 justify-center mx-auto p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-black/5 rounded-lg shadow-2xl shadow-gray-800 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 grid grid-flow-row auto-rows-max">
                            <div class="grid p-6 grid-cols-6 gap-4">
                                <div class="h-16 w-16 col-start-1 col-span-1 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img src = "./images/chili-pepper-svgrepo-com.svg" class="w-7 h-7 stroke-red-500 " alt="Pepper"/>
                                </div>
                                <div class=' col-start-1 col-span-5'>
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Pedro Antonio Dos Santos</h2>

                                    <p class="mt-4  align-text-top text-gray-500 dark:text-gray-400 text-md">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit id vel iure fuga consectetur esse distinctio dolores, modi dolorum perferendis enim ab aliquam, aspernatur accusamus quia debitis fugiat perspiciatis iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam delectus voluptas ipsum, laudantium sequi atque eveniet labore. Similique ipsum reprehenderit tempore, corporis amet qui optio, non in nobis, ut repellat?Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia asperiores fugit corporis. Necessitatibus, dolores repellat maxime repellendus dolorem, provident deleniti ipsum, fugit esse laboriosam minima. Temporibus consectetur aliquid tempora asperiores?
                                    </p>
                                </div>
                                <img src = "./images/eu.jpg" class=" align-text-top sm:flex sm:justify-center w-80 sm:mr-10 md:mr-10 h-auto stroke-red-500 " alt="Pepper"/>

                            </div>
                            <x-carousel/>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
    <x-footer/>

</html>
