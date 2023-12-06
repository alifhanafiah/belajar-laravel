<x-layout>
    @include('partials/_hero')
    @include('partials/_search')

    <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">

        @if (count($listings) == 0)
            <p>No listings found</p>
        @endif

        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach

    </div>
</x-layout>
