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
        <div class="w-1/4 bg-gray-200 p-7 rounded-md">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, beatae a blanditiis quaerat aliquid veritatis iure mollitia dolorem impedit porro optio molestias doloribus possimus recusandae! Porro praesentium eveniet quas error necessitatibus quibusdam minus fugiat. Debitis beatae exercitationem doloremque, voluptatibus rerum adipisci illum, accusamus eum aliquam excepturi voluptate veritatis modi error deserunt maxime facere. Fugit optio molestias, deserunt autem voluptatem cupiditate, hic officia atque unde voluptatibus, rem repellendus officiis delectus laborum nemo a? Debitis unde, recusandae reiciendis voluptatibus, commodi molestias amet deleniti in assumenda repudiandae distinctio autem dicta possimus facere, optio explicabo maxime molestiae suscipit tenetur vitae alias itaque sequi inventore?
        </div>

    </div>
</x-layouts.main-layout>