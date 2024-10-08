<div class="leading-relaxed relative flex text-wrap">
    <p>
    <b class="text-wrap text-sm p-2 bg-rounded-lg bg-gray-950 text-gray-300">{{ $date->toDateString() }}</b>

    <b class="w-auto text-lg">{{ $title }}</b>
    {{ $abstract }}

    <a href="{{ route('news.show',$id) }}" class="text-[#FF2D20]">Saiba mais</a>
    </p>

</div>
