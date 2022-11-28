@php
    $styleLink="font-bold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<nav class="flex justify-between sticky top-0 z-50 bg-white shadow-lg px-10 py-5 items-center font-bold">
    {{-- logo --}}
    <a href="/">
        <img src="{{asset('storage/images/logo-rawan-removebg-preview.png') }}" alt="Logo Rawan" class="w-20">
    </a>
    {{-- nav items --}}
    <div class="nav_menu space-x-5 flex text-gray-600">
        {{-- ${ Route::getCurrentRoute()->getName() === "bijoux" ? "bg-gray-200": "" } --}}
        <a href="{{ route('bijoux.index') }}" class="hover:text-primary">Bijoux</a>
        <a href="{{ route('femmes') }}" class="hover:text-primary">Collections femmes</a>
        <a href="{{ route('hommes') }}" class="hover:text-primary">Abayas hommes</a>
        <a href="{{ route('enfants') }}" class="hover:text-primary">Enfants</a>
        <a href="{{ route('blog') }}" class="hover:text-primary">blog</a>
    </div>
    {{-- other items --}}
    <div class="flex items-center">
        <a href="" class="btn btn-ghost btn-circle">
            <i class="fa-solid fa-magnifying-glass text-gray-600"></i>
        </a>
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
              <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                <span class="badge badge-sm indicator-item">0</span>
              </div>
            </label>
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
              <div class="card-body">
                <span class="font-bold text-lg">0 Items</span>
                <span class="text-info">Total: €0,00</span>
                <div class="card-actions">
                  <button class="btn btn-primary btn-block">Voir le panier</button>
                </div>
              </div>
            </div>
        </div>
        @guest
            <a href="{{ route('login') }}" class="btn btn-ghost btn-circle">
                <i class="fa-regular fa-user text-gray-600"></i>
            </a>
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