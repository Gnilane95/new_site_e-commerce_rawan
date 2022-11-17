<x-guest-layout title="Se connecter">
    <h1 class="uppercase text-center mt-10 text-2xl font-black">Connexion</h1>
    <x-auth-card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                
            </div>

            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="btn bg-primary  py-1 px-3 rounded-lg text-white">
                    Se connecter
                </button>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                {{-- <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button> --}}
            </div>
        </form>
        <div class="">
            <p class="text-center pt-10 pb-3 font-semibold underline">Vous n'avez pas de compte ?</p>
            <p class="text-center">La création d’un compte présente de nombreux avantages : paiement plus rapide, conservation de plusieurs adresses, suivi des commandes, etc.</p>
            <a href="{{ route('register') }}">
               <button class="btn bg-primary text-center text-white px-5 py-3 rounded-lg w-full mt-5">
                    Créer un compte
                </button>
            </a>
        </div>
    </x-auth-card>
</x-guest-layout>
