<header class="static w-[10%] bg-red-500 text-black/50 dark:bg-red container-news dark:text-white text-white w-auto">
    <p class="m-1 absolute relative  passing">
        @if(\App\Models\News::where('highlighted', 1)->count() > 0)
            @foreach (\App\Models\News::where('highlighted', 1)->orderBy('date')->paginate(50)->shuffle()->take(25) as $news)
                <a href="{{ route('news.show', ['news'=>$news->id]) }}" class="truncate"> {{ str_replace(':', '', $news->title) }} </a>
                <i class=" icon mt-1 icon-pepper-white ">
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg fill="#F5F5F5" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 viewBox="0 0 454.534 454.534" xml:space="preserve">
<path id="XMLID_1303_" d="M448.009,47.797l-44.137-13.324c-2.533-0.765-5.277-0.39-7.521,1.013c-2.243,1.403-3.775,3.703-4.2,6.314
	c-6.702,41.179-19.042,72.54-27.15,89.937c-28.099-9.925-58.994-4.815-84.689,27.648c-11.573,14.621-58.154,130.555-114.494,155.38
	c-61.425,27.066-121.233,13.823-153.569,2.385c-3.768-1.333-7.964-0.076-10.379,3.108c-2.415,3.184-2.499,7.569-0.198,10.836
	c19.93,28.289,63.431,72.699,145.863,86.544c111.557,18.737,216.083-59.631,259.635-131.396
	c24.371-40.158,34.049-86.894,4.915-121.502c23.175-35.736,37.234-86.089,42.175-105.936
	C455.443,54.051,452.699,49.213,448.009,47.797z"/>
</svg>

                </i>
            @endforeach
        @endif
    </p>
</header>
