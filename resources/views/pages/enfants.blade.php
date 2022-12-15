<x-layouts.main-layout title="Vêtements enfants">
    @include('partials.navbar._navbar')
    <h1 class="lg:hidden text-center text-4xl text-primary-dark bg-gray-700 font-bold py-5">Vêtements Enfants</h1>
    <div class="py-36 lg:px-28 md:px-10 sm:px-14">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 lg:gap-10 sm:gap-7">
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