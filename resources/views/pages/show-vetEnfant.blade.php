<x-layouts.main-layout title="Vêtement enfant">
    @include('partials.navbar._navbar')
    {{-- section product --}}
    <div class="xl:my-28 sm:mb-28 xl:flex gap-10d text-gray-700">
        {{-- for lg --}}
        @if (count($enfant->images) != 0)
            <div class="sm:hidden xl:flex xl:flex-col xl:space-y-5 xl:bg-gradient-to-b xl:from-gray-50 xl:via-gray-200 xl:to-white xl:px-5 xl:py-36">
                @foreach ($enfant->images as $image)
                    <img src="{{ asset($image->slug) }}" alt="" class="w-28">
                @endforeach
            </div>
        @endif
        <img src="{{ asset('storage/'.$enfant->url_img) }}" alt="{{ $enfant->name }}" class="sm:max-w-[80%] md:max-w-sm lg:max-w-md md:mx-10 md:my-5 sm:m-5 lg:mx-48f xl:mx-5">
        {{-- for sm --}}
        @if (count($enfant->images) != 0)
            <div class="xl:hidden sm:flex sm:justify-around sm:bg-gradient-to-b sm:from-gray-50 sm:via-gray-200 sm:to-white sm:px-5 lg:px-16 sm:py-5 sm:mb-14">
                @foreach ($enfant->images as $image)
                    <img src="{{ asset($image->slug) }}" alt="" class="md:w-28 sm:w-5">
                @endforeach
            </div>
        @endif
        {{-- Infos card --}}
        <div class="sm:mx-5 md:mx-10">
            <h1 class="lg:text-5xl sm:text-xl md:text-3xl pb-3">{{ $enfant->name }}</h1>
            <div class="md:flex md:space-x-3 items-center mt-3">
                <div class="">
                    <i class="fa-regular fa-star sm:text-xs md:text-lg"></i>
                    <i class="fa-regular fa-star sm:text-xs md:text-lg"></i>
                    <i class="fa-regular fa-star sm:text-xs md:text-lg"></i>
                    <i class="fa-regular fa-star sm:text-xs md:text-lg"></i>
                    <i class="fa-regular fa-star sm:text-xs md:text-lg"></i>
                </div>
                <p class="text-primary-light sm:text-xs md:text-lg">Soyez le premier à donner votre avis</p>
            </div>
            <p class="text-primary text-xl font-semibold pt-5">€{{ $enfant->price }}</p>
            <hr class="mt-5 mb-5 border-2">
            <h2 class="text-xl font-semibold pb-3">Description</h2>
            <p class="pb-5">{{ $enfant->desc }}</p>
            <span class="text-xl font-bold">Stock :</span> <span>{{ $enfant->stock }}</span>
            <div class="mt-5">
                <select class="rounded-md" name="qty" id="qty">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <button type="submit" class="py-4 px-4 mt-5 w-full rounded-lg text-xl bg-primary-dark border-none text-white">
                Ajouter au panier
            </button>
        </div>
    </div>

    {{-- Section avis --}}
    <div class="mb-28 bg-gray-100 py-10">
        <h2 class="text-center pb-10 text-2xl text-primary-dark font-bold">Avis clients</h2>
        <div class="xl:flex xl:gap-20">
            <div class="sm:px-5 md:px-20 xl:pl-10 sm:pb-10 lg:pb-0">
                @forelse ($enfant->avis as $avi)
                    <div class="mb-5">
                        <p class="">
                            <span class="text-gray-500 text-xl font-bold">{{ $avi->name }} |</span> 
                            <span class="text-gray-400">{{ $avi->created_at }}</span>
                        </p>
                        <div class="">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>
                            {{ $avi->avis }}
                        </p>
                    </div>
                @empty
                    <p class="">Soyez le premier à donner votre avis</p>
                @endforelse
            </div>
            <div class="sm:px-5 md:px-20 xl:pr-10 border-l-4 border-b-4 pb-5 lg:border-white sm:border-none">
                <p class="text-xl font-bold text-gray-700 pb-5">Ajouter un avis</p>
                <form action="{{ route('avi.store', $enfant->id) }}" method="POST">
                    @csrf
                    <div class="">
                        {{-- note --}}
                        <div class="flex gap-3 pb-5">
                            <p class="font-semibold text-gray-500">Votre note :</p>
                            <div>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        {{-- avis --}}
                        <div class="">
                            <label for="avis" class="font-semibold text-gray-500 pb-2">Votre avis</label>
                            <textarea name="avis" id="" cols="30" rows="10" class="sm:w-[250px] md:w-[300px] lg:w-[500px] block"></textarea>
                            <x-error-msg name="avis"/>
                        </div>
                        {{-- name --}}
                        <div class="mt-5">
                            <label for="name" class="font-semibold text-gray-500 pb-2">Nom</label>
                            <input type="text" name="name" id="" class="sm:w-[250px] md:w-[300px] lg:w-[500px] block">
                            <x-error-msg name="name"/>
                        </div>
                        {{-- email --}}
                        <div class="mt-5">
                            <label for="email" class="font-semibold text-gray-500 pb-2">E-mail</label>
                            <input type="text" name="email" id="" class="sm:w-[250px] md:w-[300px] lg:w-[500px] block">
                            <x-error-msg name="email"/>
                        </div>
                    </div>
                    <button class="btn mt-5" type="submit">Soumettre</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Voir aussi --}}
    <div class="py-36 lg:px-28 xl:px-10 sm:px-7">
        <h1 class="text-5xl pb-16 font-bold text-center">Produits similaires</h1>
        <div class="md:grid xl:grid-cols-4 lg:gap-10 sm:grid md:grid-cols-2 md:gap-8">
            @forelse ($allVetEnfants as $enfant)
                <a href="{{ route('enfants.show', $enfant->id) }}">
                    <x-cards.card :url_img="$enfant->url_img" :name="$enfant->name" :price="$enfant->price"/>
                </a>
            @empty
                <p>Aucune proposition disponible !</p>
            @endforelse
        </div>
    </div>
</x-layouts.main-layout>