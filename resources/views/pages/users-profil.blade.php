<x-layouts.main-layout title="Profil">
    @include('partials.navbar._navbar')

    <div class="mx-48 bg-gray-200 mb-10 p-5 rounded-lg text-gray-700">
        <h1 class="text-4xl font-bold pb-5">Mes informations personnelles</h1>
        {{-- name --}}
        <div class="mb-5">
            <p class="pb-3 font-bold">Nom</p>
            <p class="">{{ $user->name }}</p>
        </div>
        <hr class="border-black">
        {{-- email --}}
        <div class="my-5">
            <p class="pb-3 font-bold">E-mail</p>
            <p class="">{{ $user->email }}</p>
        </div>
        <hr class="border-black">
        {{-- password --}}
        <div class="mt-5">
            <p class="pb-3 font-bold">Mot de pass</p>
            <p class="">*************</p>
        </div>
        {{-- route edit --}}
        <a href="{{ route('users.edit', $user->id) }}" class="btn bg-secondary-dark border-none mt-5 ">Modifier</a>

    </div>
</x-layouts.main-layout>