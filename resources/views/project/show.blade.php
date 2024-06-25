@extends('layouts.default')

@section('content')
    <!-- Resumo Init -->
    <div
        class="grid justify-items-stretch mb-5 flex items-start gap-4 rounded-lg bg-white px-6 py-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

        <div class="justify-self-center ">
            <h2 class="text-xl font-semibold text-black dark:text-white">Projetos</h2>
        </div>
    </div>

    <!-- Formação Init -->


        <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">
            @foreach ($projects as $project)
                <x-project.show.row :project="$project" />
            @endforeach

        </div>
    <!-- Projetos End -->
    @stop
