
<x-layouts.main-layout title="Robes et jupes">
    @include('partials.navbar._navbar')
    <x-nav-femmes/>
    <div class="py-36 lg:px-28 md:px-10 sm:px-14">
            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 lg:gap-10 sm:gap-7">
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