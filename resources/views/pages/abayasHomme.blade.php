<x-layouts.main-layout title="Abayas homme">
    @include('partials.navbar._navbar')
    <h1 class="lg:hidden text-center md:text-4xl sm:text-2xl text-primary-dark bg-gray-700 font-bold py-5">
        Abayas Homme
    </h1>
    <div class="py-36 xl:px-7 md:px-14 lg:px-8 sm:px-10">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-5 sm:gap-7">
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