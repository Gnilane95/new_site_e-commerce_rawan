@php
    $styleLink="font-bold hover:text-white block pb-5 text-white text-lg"
@endphp
<div class="bg-gray-700 px-5 min-h-screen sticky w-[25%] py-4">
    <a href="/dashboard">
        <div class="flex items-center  space-x-1">
            <img src="{{asset('storage/images/logo-rawan-removebg-preview.png') }}" alt="" class="w-14">
            <h1 class="text-2xl font-black text-white">Dashboard</h1>
        </div>
    </a>
    <hr class="my-10">
    <div class="">
        <a href="{{ route('bijoux.all') }}" class="{{ $styleLink }}">
            Tous les bijoux
        </a>
        {{-- <a href="{{ route('images.all') }}" class="{{ $styleLink }}">
            Les images
        </a> --}}
    </div>
</div>