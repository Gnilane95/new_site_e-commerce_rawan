<x-layouts.main-layout title="Abayas homme">
    @include('partials.navbar._navbar')
    <div class="mb-48 mt-28 mx-28">
        <h1 class="text-center text-4xl text-secondary-dark font-bold pb-28">Abayas Homme</h1>
        <div class="grid grid-cols-4 gap-10  ">
            @forelse ($hommes as $homme)
                <a href="{{ route('hommes.show', $homme->id) }}">
                    <x-cards.card :url_img="$homme->url_img" :name="$homme->name" :price="$homme->price" />
                </a>
            @empty
                <p>Stock épuisé</p>
            @endforelse
        </div>
        <div class="flex justify-end">
            {{ $hommes->links('pagination::tailwind') }}
        </div>
</div>
</x-layouts.main-layout>