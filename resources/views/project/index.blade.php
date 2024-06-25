@extends('layouts.default')

@section('content')
    <!-- Resumo Init -->

        <div class='mb-5'>

            <div
                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
            >

                <div class="mx-auto w-full  relative  items-center gap-6 lg:items-end">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 hidden md:block sm:size-16">
                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                        </div>

                        <div class="pt-3  sm:pt-5 lg:pt-0">
                            <h1 class=" text-2xl font-semibold text-center text-black dark:text-white mb-5">Projetos</h1>
                            <div class="w-full">
                                <a href='{{ route('projects.show', ['user'=>auth()->user()]) }}' class="text-center w-1/6 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Preview</a>

                                <button class="w-1/6  text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Admin/User </button>
                                <a href='{{ route('projects.new') }}' class="text-center w-1/8 float-right text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">+</a>
                            </div>

                            <div class="">
                                <div class="grid lg:flex-col grid-cols-4 gap-4">
                                    <div class="align-middle text-center text-xl font-semibold text-black dark:text-white" class="align-self-center">
                                        <h2>Nome</h2>
                                    </div>
                                    <div class="align-middle text-center text-xl font-semibold text-black dark:text-white">
                                        <h2>Skills</h2>
                                    </div>
                                    <div class="align-middle text-center text-xl font-semibold text-black dark:text-white">
                                        <h2>Links</h2>
                                    </div>
                                    <div class="align-middle text-center text-xl font-semibold text-black dark:text-white">
                                        <h2>Ações</h2>
                                    </div>
                                    <!-- ... -->
                                </div>

                                @foreach ($projects as $project)
                                    <x-project.index.row :project="$project" />
                                @endforeach
                                <div class="mt-5">
                                    {{ $projects->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>

    @stop
