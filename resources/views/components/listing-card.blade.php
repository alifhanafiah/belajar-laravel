@props(['listing'])

<x-card class="p-6">
    <div class="flex">
        <img class="mr-6 hidden w-48 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listing/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>

            <x-listing-tags :tagsCSV="$listing->tags" />

            <div class="mt-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
