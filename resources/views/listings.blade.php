@extends('layout')

@section('content')
    <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">

        @if (count($listings) == 0)
            <p>No listings found</p>
        @endif

        @foreach ($listings as $listing)
            <div class="rounded border border-gray-200 bg-gray-50 p-6">
                <div class="flex">
                    <img class="mr-6 hidden w-48 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="/listing/{{ $listing->id }}">{{ $listing->title }}</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
                        <ul class="flex">

                            @foreach (explode(',', $listing->tags) as $tags)
                                <li
                                    class="mr-2 flex items-center justify-center rounded-xl bg-black px-3 py-1 text-xs text-white">
                                    <a href="#">{{ $tags }}</a>
                                </li>
                            @endforeach

                        </ul>
                        <div class="mt-4 text-lg">
                            <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
