<x-guest-layout title="Créer un compte">
    <x-auth-card>
        <a href="/">
            <img src="{{asset('storage/images/logo-rawan-removebg-preview.png') }}" alt="Logo Rawan" 
            class="w-28 mx-auto">
        </a>
        <h1 class="uppercase text-center pt-5 pb-10 text-2xl font-black">Créer un compte</h1>
        <form method="POST" action="{{ route('register') }}" class="form-control">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nom')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('E-mail')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de pass')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmer le mot de pass')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Vous avez déjà un compte ?') }}
                </a>
                <x-primary-button class="btn bg-primary border-none ml-4 py-1 px-3 rounded-lg text-white">
                    {{ __('Enregistrer') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
