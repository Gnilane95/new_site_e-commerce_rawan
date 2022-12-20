<x-layouts.main-layout title="Vêtements enfants">
    @include('partials.navbar._navbar')
    <h1 class="lg:hidden text-center md:text-4xl sm:text-2xl text-primary-dark bg-gray-700 font-bold py-5">Vêtements Enfants</h1>
    <div class="py-36 xl:px-7 md:px-14 lg:px-8 sm:px-10">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-5 sm:gap-7">
            @forelse ($enfants as $enfant)
                <a href="{{ route('enfants.show', $enfant->id) }}">
                    <x-cards.card :url_img="$enfant->url_img" :name="$enfant->name" :price="$enfant->price" />
                </a>
            @empty
                <p>Stock épuisé</p>
            @endforelse
        </div>
        <div class="flex justify-end">
            {{ $enfants->links('pagination::tailwind') }}
        </div>
</div>
</x-layouts.main-layout>