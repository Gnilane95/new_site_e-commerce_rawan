<x-layouts.main-layout title="Accueil">
    @include('partials.navbar._navbar')
        <div class="flex-column w-full">
            {{-- hero home --}}
            <div class="w-full">
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
        </div>
</x-layouts.main-layout>

