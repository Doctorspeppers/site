@extends('layouts.default')

@section('content')
    <!-- Resumo Init -->
    <div
        class="grid justify-items-stretch mb-5 flex items-start gap-4 rounded-lg bg-white px-6 py-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

        <div class="justify-self-center ">
            <h2 class="text-xl font-semibold text-black dark:text-white">Projetos</h2>
        </div>
    </div>

        <div class='mb-5'>

            <div
                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
            >

                <div class="relative flex items-center gap-6 lg:items-end">
                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">

                        <div class="pt-3 sm:pt-5 lg:pt-0">
                            <h2 class="mt-4 text-xl/relaxed">
                                Aqui se encontram meus projetos, tanto de programação quanto de hospedagem, alguns feitos por puro hobbie e focando em utilidade e simplicidade, outros feitos para melhorar meu portifólio.
                            </h2>

                            <div class="">
                                <ul class="text-sky-700 text-sm leading-6">
                                    <li>
                                        <a href="#self-hosted" class="block py-1 font-medium font-medium text-sky-500 dark:text-sky-400">
                                            Self Hosted
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#home-page"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Home page
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#composer-files" class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Composer files
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#nextcloud"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Nextcloud
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#midia-stack"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Midia Stack
                                        </a>
                                    </li>

                                    <li class="ml-4">
                                        <a href="#chef"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Chef cyber swiss knives
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#scripts"
                                            class="block py-1 font-medium font-medium text-sky-500 dark:text-sky-400">Scripts
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#tag-hunter"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Tag hunter
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#system-manager"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>System Manager (EC2)
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#dumper"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Dumper
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sites"
                                            class="block py-1 font-medium font-medium text-sky-500 dark:text-sky-400">
                                            Sites
                                        </a>
                                    </li>
                                    <li class="ml-4">
                                        <a href="#pepper-org"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Pepper Org
                                        </a>
                                        <a href="#post-generator"
                                            class="group flex items-start py-1 hover:text-sky-900 dark:text-sky-400 dark:hover:text-sky-300">
                                            <svg width="3" height="24" viewBox="0 -9 3 24"
                                                class="mr-2 text-sky-400 overflow-visible group-hover:text-sky-600 dark:text-sky-600 dark:group-hover:text-sky-500">
                                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>Post generator
                                        </a>
                                    </li>
                                </ul>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!-- Resumo End -->
    <div id='self-hosted'
    class="grid justify-items-stretch mb-5 flex items-start gap-4 rounded-lg bg-white px-6 py-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

        <div class="justify-self-center ">
            <h2 class="text-xl font-semibold text-black dark:text-white">Self-hosted</h2>
        </div>
    </div>

    <!-- Formação Init -->


        <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">

            <div id='home-page'
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Home page</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Criado para termos um acesso facil as aplicações hosteadas em pepper.dev.br, atualmente estou implementando um sistema de health check para poder verificar os estados dos containers.
                    </p>
                    <a href="https://home.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Site </a>

                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

            <div id='composer-files'
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Composer files</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Criado para termos um repositório com tudo que hosteamos, isso facilita o deploy e a manutenção das imagens. Próxima atualização é planejada para adicionar um sistema de CI/CD no servidor.
                    </p>
                    <a href="https://github.com/Doctorspeppers/docker-compose-files" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Github </a>
                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

            <div id='nextcloud'
            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Nextcloud</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Um projeto open source em php com a finalidade de ter um drive completo no mesmo padrões das soluções do google, atualmente estou estudando para desenvolver um plugin que permita integração com um git local no servidor.
                    </p>
                    <a href="https://github.com/nextcloud/all-in-one" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Github </a>
                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker,php" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

            <div id='midia-stack'
            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Midia stack</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">
                        Projeto feito para entender a dinamica de volumes e redes do docker, englobando uma aplicação de streaming(jellyfin) e sua interação com as soluções do <a class='text-sky-500 dark:text-sky-400' href='https://wiki.servarr.com/'>servarr</a>, utilizando do torrent para download de midia, o projeto esta quase completo porem quero alterar o jellyfin para um sistema próprio, permitindo a pesquisa e download dos torrents todos na mesma aplicação.
                    </p>
                    <a href="https://sonarr.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Sonarr </a>

                    <a href="https://radarr.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Radarr </a>

                    <a href="https://jellyfin.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Jellyfin </a>

                    <a href="https://bazarr.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Bazarr </a>

                    <a href="https://jackett.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>jackett </a>

                    <a href="https://qbittorrent.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>qbittorrent </a>

                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

            <div id='chef'
            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Chef</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Projeto open source disponibilizado pelo sistema de segurança cybernética do reino unido, atualmente estou apenas hosteando e estudando para adicionar todas as suas funcionalidades neste meu site, esta é uma ótima forma para entender mais sobre criptografia e tratativas de estrutura de dados que ainda não me abituei, como QRCodes e compressões.
                    </p>

                    <a href="https://chef.pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Chef </a>
                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

        </div>
        <div id='scripts'
        class="mt-5 grid justify-items-stretch mb-5 flex items-start gap-4 rounded-lg bg-white px-6 py-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

            <div class="justify-self-center ">
                <h2 class="text-xl font-semibold text-black dark:text-white">Scripts</h2>
            </div>
        </div>
        <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">

            <div id='tag-hunter'
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Tag hunter</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Criado para termos um acesso facil as aplicações hosteadas em pepper.dev.br, atualmente estou implementando um sistema de health check para poder verificar os estados dos containers.
                    </p>
                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

            <div id='system-manager'
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">System manager</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Criado para termos um repositório com tudo que hosteamos, isso facilita o deploy e a manutenção das imagens. Próxima atualização é planejada para adicionar um sistema de CI/CD no servidor.
                    </p>
                    <a href="https://github.com/Doctorspeppers/docker-compose-files" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Github </a>
                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>
            <div id='system-manager'
            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Dumper</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Criado para termos um repositório com tudo que hosteamos, isso facilita o deploy e a manutenção das imagens. Próxima atualização é planejada para adicionar um sistema de CI/CD no servidor.
                    </p>
                    <a href="https://github.com/Doctorspeppers/docker-compose-files" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Github </a>
                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>
        </div>
        <div id='sites'
        class="mt-5 grid justify-items-stretch mb-5 flex items-start gap-4 rounded-lg bg-white px-6 py-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

            <div class="justify-self-center ">
                <h2 class="text-xl font-semibold text-black dark:text-white">Sites</h2>
            </div>
        </div>
        <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">

            <div id='pepper-org'
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Pepper org</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Criado para termos um acesso facil as aplicações hosteadas em pepper.dev.br, atualmente estou implementando um sistema de health check para poder verificar os estados dos containers.
                    </p>
                    <a href="https://pepper.dev.br" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Site </a>

                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

            <div id='post-generator'
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Post generator</h2>
                    (2024)
                    <p class="mt-4 text-base/relaxed">

                        Criado para termos um repositório com tudo que hosteamos, isso facilita o deploy e a manutenção das imagens. Próxima atualização é planejada para adicionar um sistema de CI/CD no servidor.
                    </p>
                    <a href="https://github.com/Doctorspeppers/docker-compose-files" class='block py-1 font-medium font-medium text-sky-500 dark:text-sky-400'>Github </a>
                    <img class="mt-4" src="https://skillicons.dev/icons?i=bash,docker,php,js,jquery,tailwind,laravel,redis" />

                </div>

                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
            </div>

        </div>
    <!-- Projetos End -->
    @endsection
