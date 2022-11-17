@php
    $styleLink="font-bold hover:text-red-700 hover:underline underline-offset-4 block pb-5 text-blue-700"
@endphp
<x-layouts.main-layout title="Dashbord">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="uppercase text-xl text-red-700 font-black">
            Bienvenue <span class="text-primary-focus underline">{{ Auth::user()->name }}</span> sur ton Dashbord
        </h1>
        <div class="py-12">
            @auth
                @if ((Auth::user()->is_admin == 1))
                    <a href="{{ route('posts.create') }}" class="{{ $styleLink }}">New post</a>
                    <a href="{{ route('posts.all') }}" class="{{ $styleLink }}">La liste des posts</a>
                    <a href="{{ route('users.all') }}" class="{{ $styleLink }}">La liste des users</a>
                    <a href="{{ route('categories.home') }}" class="{{ $styleLink }}">Gérer les catégories</a>
                @else
                    <a href="" class="{{ $styleLink }}">Modifier mon profil</a>
                    <a href="" class="{{ $styleLink }}">FAQ</a>
                    <a href="" class="{{ $styleLink }}">New post</a>
                @endif
            @endauth
        </div>
    </div>
</x-layouts.main-layout>

