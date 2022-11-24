@php
    $styleLink="font-bold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<nav class="flex justify-between px-10 py-5 items-center font-bold">
    {{-- logo --}}
        <a href="/">
            <img src="{{asset('storage/images/logo-rawan-removebg-preview.png') }}" alt="Logo Rawan" class="w-20">
        </a>
    {{-- nav items --}}
    <div class="nav_menu space-x-5 flex text-gray-600">
        {{-- ${ Route::getCurrentRoute()->getName() === "bijoux" ? "bg-gray-200": "" } --}}
        <a href="{{ route('bijoux.index') }}" active={true} class="hover:text-primary"> Bijoux</a>
        <a href="{{ route('femmes') }}" class="hover:text-primary">Collections femmes</a>
        <a href="{{ route('hommes') }}" class="hover:text-primary">Abayas hommes</a>
        <a href="{{ route('enfants') }}" class="hover:text-primary">Enfants</a>
        <a href="{{ route('blog') }}" class="hover:text-primary">blog</a>
    </div>
    {{-- other items --}}
    <div class="space-x-5 flex items-center">
        <a href=""><i class="fa-solid fa-magnifying-glass text-gray-600"></i></a>
        <a href=""><i class="fa-solid fa-bag-shopping text-gray-600"></i></a>
        @guest
            <a href="{{ route('login') }}"><i class="fa-regular fa-user text-gray-600"></i></a>
        @endguest
        @auth
        <div class="dropdown dropdown-end flexh items-center">
            <p class="text-gray-600 text-center">Bienvenue</p>
            <label tabindex="0" class="cursor-pointer text-secondary-dark underline border-none">
                {{ Auth::user()->name }}
            </label>
            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                <li >
                    <a href="{{ route('users.show',$userId) }}">Mon profil</a>
                </li>
                <li ><x-btn-logout/></li>
            </ul>
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