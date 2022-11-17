@php
    $styleLink="font-bold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<nav class="flex justify-between px-10 items-center font-bold">
    {{-- logo --}}
        <a href="/">
            <img src="img/logo-rawanpng.png" alt="Logo Rawan" class="w-36">
        </a>
    {{-- nav items --}}
    <div class="space-x-5 flex ">
        <a href="{{ route('bijoux') }}" class="hover:text-primary">Bijoux</a>
        <a href="{{ route('femmes') }}" class="hover:text-primary">Collections femmes</a>
        <a href="{{ route('hommes') }}" class="hover:text-primary">Abayas hommes</a>
        <a href="{{ route('enfants') }}" class="hover:text-primary">Enfants</a>
        <a href="{{ route('blog') }}" class="hover:text-primary">blog</a>
    </div>
    {{-- other items --}}
    <div class="space-x-5 flex items-center">
        <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
        <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
        @guest
            <a href="{{ route('login') }}"><i class="fa-regular fa-user"></i></a>
        @endguest
        @auth
        <div class="flex justify-center gap-7 items-center">
            {{-- <p>{{ Auth::user()->name }}</p> --}}
            <x-btn-logout/>
        </div>
        @endauth
        {{-- @guest
            <a href="{{ route('login') }}" class="{{ $styleLink }}">Se connecter</a>
            <a href="{{ route('register') }}" class="{{ $styleLink }}">S'inscrire</a>
            @endguest
        @auth
            <a href="{{ route('dashboard') }}" class="{{ $styleLink }}">Dashbord</a>
            <div class="flex justify-center gap-7 items-center">
                <p>{{ Auth::user()->name }}</p>
                <x-btn-logout/>
            </div>
        @endauth --}}
    </div>
</nav>