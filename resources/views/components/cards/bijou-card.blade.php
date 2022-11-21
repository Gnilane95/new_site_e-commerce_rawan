@props([
    'url_img',
    'name',
    'price',
])
<div class=" max-w-sm mb-10 shadow-lg">
    <img src="{{ asset('storage/'.$url_img) }}" alt="{{ $name }}" class="w-full shadow-md h-64"/>
    <div class="px-10 pt-5 pb-10">
      <div class="flex justify-between items-center">
        <h2 class="text-xl font-bold text-gray-600 pt-1">{{ $name }}</h2>
        <p class="font-semibold pt-1">{{ $price }}€</p>
      </div>
      <button class="py-1 px-4 mt-5 w-full rounded-lg bg-primary-dark border-none text-white">
        Ajouter au panier
      </button>
    </div>
  </div>
{{-- <div class="shadow-xl">
    <img src="{{ asset('storage/'.$url_img) }}" alt="{{ $title }}" class="w-full">
    <div class="p-5 min-h-[200px]">
        <p class="font-bold text-2xl pb-5">{{ $title }}</p>
        <p class="">{{ Str::substr($content, 0, 180) }}</p>
    </div>
    <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le {{ $created_at }}</p>
</div> --}}