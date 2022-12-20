
<x-layouts.main-layout title="Pulls et Hauts">
    @include('partials.navbar._navbar')
    <x-nav-femmes/>
    <div class="py-36 xl:px-7 md:px-14 lg:px-8 sm:px-10">
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-5 sm:gap-7">
                @forelse ($femmes as $femme)
                    <a href="{{ route('femmes.show', $femme->id) }}">
                        <x-cards.card :url_img="$femme->url_img" :name="$femme->name" :price="$femme->price" />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
    </div>
</x-layouts.main-layout>