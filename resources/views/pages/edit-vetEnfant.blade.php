<x-layouts.layout-dashboard title="Modifier un vêtement enfant">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Modifier un vêtement enfant"/>
            <div class="py-10 mx-10">
                <h1 class="font-black text-4xl text-gray-700 pb-5">Modifier un vêtement enfant</h1>
                <form action="{{ route('enfants.update',$enfant->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="w-[50%]">
                        {{-- name --}}
                        <input type="text" name="name" class="block w-full rounded-lg border-gray-400" value="{{ old('name', $enfant->name) }}"> 
                        <x-error-msg name="name" />
                        {{-- Price --}}
                        <input type="number" name="price" class="mt-5  block w-full rounded-lg border-gray-400" value="{{ old('price', $enfant->price) }}"> 
                        <x-error-msg name="price" />
                        {{-- description --}}
                        <div class="mt-5">
                            <label for="desc" class="">Description</label>
                            <textarea name="desc" cols="30" rows="10" class="mt-3 block w-full rounded-lg border-gray-400">
                                {{ old('desc', $enfant->desc) }}
                            </textarea>
                            <x-error-msg name="desc" />
                        </div>
                    
                        {{-- Stock --}}
                        <div class="mt-5">
                            <label for="" class="pb-3">Stock</label>
                            <input type="number" name="stock" class="block rounded-lg border-gray-400" value="{{ old('stock', $enfant->stock) }}"> 
                            <x-error-msg name="stock" />
                        </div>

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

                        <button type="submit" class="btn bg-secondary-dark border-none mt-6 w-full">
                            Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
