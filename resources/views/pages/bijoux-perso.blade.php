<x-layouts.main-layout title="Bijoux personalisés">
    @include('partials.navbar._navbar')
    <x-nav-bijou/>
        <div class="py-36 xl:px-7 md:px-14 lg:px-8 sm:px-10">
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-5 sm:gap-7">
                @forelse ($bijoux as $bijou)
                    <a href="{{ route('bijoux.show', $bijou->id) }}">
                        <x-cards.card :url_img="$bijou->url_img" :name="$bijou->name" :price="$bijou->price" />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
        </div>
</x-layouts.main-layout>