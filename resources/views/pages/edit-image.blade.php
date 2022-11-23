<x-layouts.layout-dashboard title="Modifier un bijou">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Edit"/>
            <div class="py-10 mx-10">
                <h1 class="font-black text-4xl text-gray-700 pb-5">Modifier un bijou</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="w-[50%]">
                        {{-- name --}}
                        {{-- <input type="text" name="name" placeholder="Nom du bijou" id="" class="block w-full rounded-lg border-gray-400" value="{{ old('name', $bijoux->name) }}"> 
                        <x-error-msg name="name" /> --}}
                        {{-- Price --}}
                        {{-- <input type="number" name="price" placeholder="Prix" id="" class="mt-5  block w-full rounded-lg border-gray-400" value="{{ old('price', $bijoux->price) }}"> 
                        <x-error-msg name="price" /> --}}
                        {{-- description --}}
                        {{-- <div class="mt-5">
                            <label for="desc" class="">Description du bijou</label>
                            <textarea name="desc" id="" cols="30" rows="10" class="mt-3 block w-full rounded-lg border-gray-400">
                                {{ old('desc', $bijoux->desc) }}
                            </textarea>
                            <x-error-msg name="desc" />
                        </div> --}}
                    
                        {{-- Stock --}}
                        {{-- <input type="number" name="stock" placeholder="1" id="" class="mt-5  block rounded-lg border-gray-400" value="{{ old('stock', $bijoux->stock) }}"> 
                        <x-error-msg name="stock" /> --}}

                        {{-- category --}}
                        {{-- <div class="mt-5">
                            <select name="category" id="" class="select select-bordered w-full">
                                <option disabled selected value="">Choisir une catégorie</option>
                                <option >Aciers Inoxydables</option>
                                <option >Argents</option>
                                <option >Bijoux personalisés</option>
                            </select>
                            <x-error-msg name="category" />
                        </div> --}}
                        {{-- Image --}}
                        {{-- <div class="mt-5">
                            <label for="">Image :</label>
                            <input class="block w-full rounded-lg border-gray-400 mt-3" type="file" name="url_img" id="" >
                            <x-error-msg name="url_img" />
                        </div> --}}

                        {{-- <button type="submit" class="btn bg-secondary border-none mt-6 w-full">Modifier</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
