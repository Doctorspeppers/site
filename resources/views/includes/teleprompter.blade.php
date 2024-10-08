<header class="static w-[10%] bg-red-500 text-black/50 dark:bg-red container-news dark:text-white text-white w-auto">
    <p class="m-1 absolute relative  passing">
        @if(\App\Models\News::where('highlighted', 1)->count() > 0)
            @foreach (\App\Models\News::where('highlighted', 1)->orderBy('date')->paginate(50)->shuffle()->take(25) as $news)
                <a href="{{ route('news.show', ['news'=>$news->id]) }}" class="truncate"> {{ $news->title }} </a><i class="bg-white-500 icon icon-pepper-white "></i>
            @endforeach
        @endif
    </p>
</header>
