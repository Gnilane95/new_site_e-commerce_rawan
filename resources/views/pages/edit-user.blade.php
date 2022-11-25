<x-layouts.main-layout title="Modifier mes infos">
    @include('partials.navbar._navbar')
    <div class="mx-48 bg-gray-200 mb-10 p-5 rounded-lg text-gray-700">
        <div class="py-10 mx-10">
            <h1 class="font-black text-4xl text-gray-700 pb-5">Modifier mes informations</h1>
            <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-[50%]">
                    {{-- email --}}
                    {{-- <div class="">
                        <label for="" class="pb-3">Mon nouveau email</label>
                        <input type="text" name="email" class="block w-full rounded-lg border-gray-400"> 
                        <x-error-msg name="email" />
                    </div> --}}
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Nouveau e-mail')" class="text-lg" />
        
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- password --}}
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Nouveau mot de pass')" class="text-lg" />
        
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
        
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirmer le mot de pass')" class="text-lg" />
        
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
        
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    
                    {{-- btn --}}
                    <button type="submit" class="btn bg-secondary-dark border-none mt-6 w-full">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.main-layout>
