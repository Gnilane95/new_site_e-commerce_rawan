<x-layouts.main-layout title="Aciers Inoxydables">
    @include('partials.navbar._navbar')
    <x-nav-bijou/>
        <div class="py-36 lg:px-28 md:px-10 sm:px-14">
            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 lg:gap-10 sm:gap-7">
                @forelse ($bijoux as $bijou)
                    <a href="{{ route('bijoux.show', $bijou->id) }}">
                        <x-cards.card :url_img="$bijou->url_img" :name="$bijou->name" :price="$bijou->price" />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
        </div>
</x-layouts.main-layout>