<x-layouts.main-layout title="Blog">
    @include('partials.navbar._navbar')
    <div class="my-28 mx-28 flex justify-center gap-10">
        <div class="w-1/2">
            @forelse ($posts as $post)
                <a href="{{ route('posts.show', $post->id) }}">
                    <x-cards.card-post :url_img="$post->url_img" :author="$post->author" :date="$post->updated_at->format('d/m/Y')" :content="$post->content" :title="$post->title" />
                </a>
            @empty
                <p>Aucun article publié</p>
            @endforelse
        </div>
        <div class="w-1/4 bg-gray-200 p-7 rounded-md text-gray-700">
            {{-- Newsletter --}}
            <div class="form-control">
                <label class="label">
                  <span class="label-text text-lg font-bold text-gray-700">Newsletter</span>
                </label> 
                <div class="relative">
                  <input type="text" placeholder="username@site.com" class="input input-bordered w-full pr-20" /> 
                  <button class="btn bg-primary-dark border-none absolute top-0 right-0 rounded-l-none">S'inscrire</button>
                </div>
            </div>

            {{-- Categories --}}
            <div class="mt-10">
                <p class="text-lg font-bold text-gray-700 pb-3">Catégories</p>
                <a href="" class="block pb-3">Lorem ipsum dolor</a>
                <hr class="mb-3 border-black">
                <a href="" class="block pb-3">Adipisicing elit</a>
                <hr class="mb-3 border-black">
                <a href="" class="block pb-3">Sit amet consectetur</a>
            </div>
        </div>

    </div>
</x-layouts.main-layout>