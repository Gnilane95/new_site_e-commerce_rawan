<x-layouts.layout-dashboard title="Ajouter un bijou">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            {{-- dashboard top --}}
            <div class="bg-white border-b-4 border-secondary p-7 flex justify-between ">
                <p class="font-bold text-primary">Dashboard/Bijoux/<span class="text-gray-500">Ajouter un bijou</span></p>
                <span class="font-semibold  text-primary hover:text-secondary">{{ Auth::user()->name }}</span>
            </div>
            <div class="py-10 mx-10">
                <h1 class="font-black text-4xl text-gray-700 pb-5">Nouveau Bijou</h1>
                <form action="{{ route('bijoux.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-[50%]">
                        {{-- name --}}
                        <input type="text" name="name" placeholder="Nom du bijou" id="" class="block w-full rounded-lg border-gray-400" value="{{ old('name') }}"> 
                        <x-error-msg name="name" />
                        {{-- Price --}}
                        <input type="number" name="price" placeholder="Prix" id="" class="mt-5  block w-full rounded-lg border-gray-400" value="{{ old('price') }}"> 
                        <x-error-msg name="price" />
                        {{-- description --}}
                        <div class="mt-5">
                            <label for="desc" class="">Description du bijou</label>
                            <textarea name="desc" id="" cols="30" rows="10" class="mt-3 block w-full rounded-lg border-gray-400">
                                {{ old('desc') }}
                            </textarea>
                            <x-error-msg name="desc" />
                        </div>
                    
                        {{-- Stock --}}
                        <input type="number" name="stock" placeholder="1" id="" class="mt-5  block rounded-lg border-gray-400" value="{{ old('stock') }}"> 
                        <x-error-msg name="stock" />

                        {{-- category --}}
                        <div class="mt-5">
                            <select name="category" id="" class="select select-bordered w-full">
                                <option disabled selected value="">Choisir une catégorie</option>
                                <option>Aciers Inoxydables</option>
                                <option>Argents</option>
                                <option>Bijoux personalisés</option>
                            </select>
                            <x-error-msg name="category" />

                        {{-- Image --}}
                        <div class="mt-5">
                            <label for="">Image :</label>
                            <input class="block w-full rounded-lg border-gray-400 mt-3" type="file" name="url_img" id="" >
                            <x-error-msg name="url_img" />
                        </div>

                        <button type="submit" class="btn bg-secondary border-none mt-6 w-full">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
