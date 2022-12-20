@php
    $styleLink="font-bold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<nav class="flex justify-between lg:sticky lg:top-0 lg:z-50 lg:bg-white shadow-lg md:px-10 sm:px-3 py-5 items-center font-bold">
    {{-- logo --}}
    <a href="/">
        <img src="{{asset('storage/images/logo-rawan-removebg-preview.png') }}" alt="Logo Rawan" class="w-20">
    </a>
    
    {{-- other items sm --}}
    <div class="sm:flex sm: sm:items-center xl:hidden">
        <a href="" class="btn btn-ghost btn-circle">
            <i class="fa-solid fa-magnifying-glass text-gray-600"></i>
        </a>
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
              <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="badge badge-sm indicator-item">
                    {{ Cart::count() }}
                </span>
              </div>
            </label>
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
              <div class="card-body">
                <div class="card-actions">
                  <a href="{{ route('carts.index') }}" class="btn btn-primary btn-block">Voir le panier</a>
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
                    @if (Auth::user()->is_admin === 1)
                        <li >
                            <a href="{{ route('dashboard') }}">Tableau de bord</a>
                        </li>
                    @endif
                    <li ><x-btn-logout/></li>
                </ul>
            </div>
        @endauth
    </div>

    <input type="checkbox" id="check" class="hidden" >
    <label for="check" class="xl:hidden sm:text-2xl sm:loading-[80px]">
        <i class="fa-solid fa-bars"></i>
    </label>
    {{-- nav items --}}
    <ul class="xl:space-x-5 xl:flex xl:space-y-0  xl:bg-transparent xl:opacity-100 xl:p-0 xl:z-auto xl:static xl:text-center xl:text-gray-600 sm:fixed sm:right-0 sm:top-20 xl:top-0 sm:leading-[80px] sm:z-50 sm:mr-10 xl:mr-0 sm:space-x-4 sm:rounded sm:h-[100vh] xl:h-fit sm:w-[100%] xl:w-fit sm:text-center sm:transition-all sm:duration-300 xl:transition-none sm:bg-slate-50 sm:left-[-100%] xl:left-0">
        <li>
            <a href="{{ route('bijoux.index') }}" class="hover:text-primary">Bijoux</a>
        </li>
        <li>
            <a href="{{ route('femmes.index') }}" class="hover:text-primary">Collections femmes</a>
        </li>
        <li>
            <a href="{{ route('hommes.index') }}" class="hover:text-primary">Abayas hommes</a>
        </li>
        <li>
            <a href="{{ route('enfants.index') }}" class="hover:text-primary">Enfants</a>
        </li>
        <li>
            <a href="{{ route('posts.index') }}" class="hover:text-primary">blog</a>
        </li>
    </ul>
    {{-- other items xl --}}
    <div class="xl:flex xl:items-center sm:hidden">
        <a href="" class="btn btn-ghost btn-circle">
            <i class="fa-solid fa-magnifying-glass text-gray-600"></i>
        </a>
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
              <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                <span class="badge badge-sm indicator-item">{{ Cart::count() }}</span>
              </div>
            </label>
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
              <div class="card-body">
                <div class="card-actions">
                  <a href="{{ route('carts.index') }}" class="btn btn-primary btn-block">Voir le panier</a>
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
                @if (Auth::user()->is_admin === 1)
                    <li >
                        <a href="{{ route('dashboard') }}">Tableau de bord</a>
                    </li>
                @endif
                <li ><x-btn-logout/></li>
            </ul>
        </div>
        @endauth
    </div>
</nav>
