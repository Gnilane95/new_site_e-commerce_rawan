<x-layouts.main-layout title="Vêtements enfants">
    @include('partials.navbar._navbar')
    <div class="mb-48 mt-20 mx-28">
        <h1 class="text-center text-4xl text-secondary-dark font-bold pb-28">Vêtements Enfants</h1>
        <div class="grid grid-cols-4 gap-10  ">
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