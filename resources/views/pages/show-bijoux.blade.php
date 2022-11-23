{{-- @php
    $current_user = Auth::user()->is_admin
@endphp --}}
<x-layouts.main-layout title="Bijou">
    <x-nav-bijou/>
    {{-- section product --}}
    <div class="my-28 mx-14 flex gap-10 text-gray-700">
        @if (count($bijoux->images) != 0)
            <div class="space-y-5 bg-gradient-to-b from-gray-50 via-gray-200 to-white px-5 py-36">
                @foreach ($bijoux->images as $image)
                    <img src="{{ asset($image->slug) }}" alt="" class="w-28">
                @endforeach
            </div>
        @endif
        <img src="{{ asset('storage/'.$bijoux->url_img) }}" alt="{{ $bijoux->name }}" class="max-w-sm">
        {{-- Infos card --}}
        <div class="">
            <h1 class="text-5xl ">{{ $bijoux->name }}</h1>
            <div class="flex space-x-3 items-center">
                <div class="">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p class="text-primary-light">Soyez le premier à donner votre avis</p>
            </div>
            <p class="text-primary text-xl font-semibold pt-5">€{{ $bijoux->price }}</p>
            <hr class="mt-5 mb-5 border-2">
            <h2 class="text-xl font-semibold pb-3">Description</h2>
            <p>{{ $bijoux->desc }}</p>
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
        <div class="grid grid-cols-2">
            <div class="px-20 space-y-5">
                <div class="">
                    @forelse ($bijoux->avis as $avi)
                    <p class="">
                        <span class="text-gray-500 text-xl font-bold">{{ $avi->users->name }} |</span> 
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
                    @empty
                        <p class="">Soyez le premier à donner votre avis</p>
                    @endforelse
                </div>
            </div>
            <div class="px-20 border-l-4 border-b-4 pb-5 border-white">
                <p class="text-xl font-bold text-gray-700 pb-5">Ajouter un avis</p>
                <form action="{{ route('avi.store', $bijoux->id) }}" method="POST">
                    @csrf
                    <div class="">
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
                        <div class="">
                            <p class="font-semibold text-gray-500 pb-2">Votre avis</p>
                            <textarea name="avis" id="" cols="30" rows="10" class="w-[500px]"></textarea>
                            <x-error-msg name="avis"/>
                        </div>
                    </div>
                    <button class="btn mt-5" type="submit">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.main-layout>