@props(['tagsCSV'])

<ul class="flex">

    @foreach (explode(',', $tagsCSV) as $tag)
        <li class="mr-2 flex items-center justify-center rounded-xl bg-black px-3 py-1 text-xs text-white">
            <a href="/?tag={{ trim($tag) }}">{{ $tag }}</a>
        </li>
    @endforeach

</ul>
