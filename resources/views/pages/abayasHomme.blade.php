<x-layouts.main-layout title="Abayas homme">
    @include('partials.navbar._navbar')
    <h1 class="lg:hidden text-center text-4xl text-primary-dark bg-gray-700 font-bold py-5">Abayas Homme</h1>
    <div class="lg:py-36 sm:py-10 lg:px-28 md:px-10 sm:px-14">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 lg:gap-10 sm:gap-7">
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