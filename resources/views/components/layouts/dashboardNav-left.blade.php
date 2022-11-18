@php
    $styleLink="font-bold hover:text-white block pb-5 text-gray-700 text-lg"
@endphp
<div class="bg-gradient-to-b from-primary to-secondary min-h-screen max-w-xl px-10 py-6">
    <div class="flex items-center space-x-3">
        <img src="img/logo-rawan-removebg-preview.png" alt="" class="w-14">
        <p class="text-3xl font-black text-gray-700">Dashboard</p>
    </div>
    <hr class="my-10 w-full">
    <div class="">
        <a href="{{ route('bijoux.all') }}" class="{{ $styleLink }}">Liste des bijoux</a>
    </div>
</div>