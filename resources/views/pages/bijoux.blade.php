<x-layouts.main-layout title="Bijoux">
    <x-bkgdBijou-show/>
        <div class=" py-48 px-36 my-48l opacity-90 sticky z-50 left-0 right-0">
            <div class="grid grid-cols-4 gap-10  ">
                @forelse ($bijoux as $bijou)
                    <x-cards.bijou-card :url_img="$bijou->url_img" :name="$bijou->name" :price="$bijou->price" />
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
        </div>
</x-layouts.main-layout>