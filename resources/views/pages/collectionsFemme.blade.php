<x-layouts.main-layout title="Vêtements femme">
    @include('partials.navbar._navbar')
    <x-nav-femmes/>
    <div class="mb-48 mt-28 mx-28">
            <div class="grid grid-cols-4 gap-10  ">
                @forelse ($femmes as $femme)
                    <a href="{{ route('femmes.show', $femme->id) }}">
                        <x-cards.card :url_img="$femme->url_img" :name="$femme->name" :price="$femme->price" />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
            <div class="flex justify-end">
                {{ $femmes->links('pagination::tailwind') }}
            </div>
    </div>
</x-layouts.main-layout>