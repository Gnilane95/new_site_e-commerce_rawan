<x-layouts.main-layout title="Accueil">
    @include('partials.navbar._navbar')

        {{-- hero home --}}
        <div class="">
            <x-home.hero/>
        </div>
            {{-- main content --}}
        <div class=" ">
            {{-- section bijoux --}}
            <x-home.section-bijoux/>
            {{-- section about --}}
            <x-home.section-about/>
            {{-- section vêtement --}}
            <x-home.section-vetements/>
        </div>
</x-layouts.main-layout>

