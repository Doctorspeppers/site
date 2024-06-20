<div
{{$attributes->merge(['class'=> "mb-5 flex items-start gap-4 rounded-lg bg-white px-6 py-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"])}}>
<div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
        <img class="size-5 sm:size-6" src='/storage/images/svg/{{ $icon }}' />
    </div>
    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">{{ $title }}</h2>
    </div>
</div>
