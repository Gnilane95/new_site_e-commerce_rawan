<x-layouts.main-layout title="Catégories">
    <div class="container">
        <h1 class="font-black text-red-800 text-4xl underline underline-offset-2">Gestion des catégories</h1>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mt-10">
                <input type="text" name="category" placeholder="Catégorie" class="my-3">
                <x-error-msg name="category" />
                <button type="submit" class="btn btn-primary ">Enregistrer</button>
            </div>
        </form>
        <div class="bg-gray-100 p-5 mt-5">
            @forelse ($categories as $category)
                <div class="pb-5">
                    <p class="font-bold uppercase pb-2">
                        {{ $category->category }}
                    </p>
                    <div>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm mr-3">Modifier</a>
                        <x-link-delete routeName="category.delete" :itemId="$category->id" linkName="Supprimer" />
                    </div>
                </div>
            @empty
                <p class="pt-10">Pas de catégories enregistrées actuellement</p>
            @endforelse
        </div>
    </div>
</x-layouts.main-layout>