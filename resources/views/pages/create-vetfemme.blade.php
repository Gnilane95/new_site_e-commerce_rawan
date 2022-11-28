<x-layouts.layout-dashboard title="Ajouter un vêtement femme">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Ajouter un vêtement femme"/>
            <div class="py-10 mx-10">
                <h1 class="font-black text-4xl text-gray-700 pb-5">Nouveau Vêtement</h1>
                <form action="{{ route('femmes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-[50%]">
                        {{-- name --}}
                        <input type="text" name="name" placeholder="Nom du vêtement" id="" class="block w-full rounded-lg border-gray-400" value="{{ old('name') }}"> 
                        <x-error-msg name="name" />
                        {{-- Price --}}
                        <input type="number" name="price" placeholder="Prix" id="" class="mt-5  block w-full rounded-lg border-gray-400" value="{{ old('price') }}"> 
                        <x-error-msg name="price" />
                        {{-- description --}}
                        <div class="mt-5">
                            <label for="desc" class="">Description du vêtement</label>
                            <textarea name="desc" id="" cols="30" rows="10" class="mt-3 block w-full rounded-lg border-gray-400">
                                {{ old('desc') }}
                            </textarea>
                            <x-error-msg name="desc" />
                        </div>
                    
                        {{-- Stock --}}
                        <input type="number" name="stock" placeholder="0" id="" class="mt-5  block rounded-lg border-gray-400" value="{{ old('stock') }}"> 
                        <x-error-msg name="stock" />

                        {{-- category --}}
                        <div class="mt-5">
                            <select name="category" id="" class="select select-bordered w-full">
                                <option disabled selected>Choisir une catégorie</option>
                                <option>Robes/Jupes</option>
                                <option>Pulls/hauts</option>
                                <option>Ensembles/Combinaisons</option>
                                <option>Pantalons/Jeans</option>
                                <option>Vestes/Manteaux</option>
                                <option>Abayas</option>
                            </select>
                            <x-error-msg name="category" />

                        {{-- Image --}}
                        <div class="mt-5">
                            <label for="">Image :</label>
                            <input class="block w-full rounded-lg border-gray-400 mt-3" type="file" name="url_img" id="" >
                            <x-error-msg name="url_img" />
                        </div>

                        {{-- Other img --}}
                        <div class="">
                            <label for="url_img">Autres images :</label>
                            <input class="block w-full rounded-lg border-gray-400 mt-5" type="file" name="images[]" id="" multiple>
                            <x-error-msg name="url_img" />
                        </div>

                        <button type="submit" class="btn bg-secondary-dark border-none mt-6 w-full">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
