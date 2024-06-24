@extends('layouts.default')

@section('content')
    <!-- Resumo Init -->

        <div class='mb-5'>

            <div
                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
            >
{{-- @if ($project) action="{{ route('projects.update', $project) }}" @else action="{{ route('projects.store') }}" @endif
            method="POST" x-on:submit.prevent="submitForm(event)" x-data="formController" --}}
            <div    class="w-full">
                <div>
                    <x-project.edit.first-step :project="$project" />
                </div>
                <div class="w-full">
                    <button class="w-1/6  text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Voltar </button>
                    <button type="submit"  class="text-center w-1/6 float-right text-white !bg-red-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"> Salvar </button>
                </div>

            </div>

            </div>
        </div>

    @stop

