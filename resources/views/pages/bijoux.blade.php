<x-layouts.main-layout title="Bijoux">
    @include('partials.navbar._navbar')
    <x-nav-bijou/>
        <div class=" py-36 px-28">
            <div class="grid grid-cols-4 gap-10  ">
                @forelse ($bijoux as $bijou)
                    <a href="{{ route('bijoux.show', $bijou->id) }}">
                        <x-cards.bijou-card :url_img="$bijou->url_img" :name="$bijou->name" :price="$bijou->price" />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
            <div class="flex justify-end">
                {{ $bijoux->links('pagination::tailwind') }}
            </div>
        </div>
</x-layouts.main-layout>