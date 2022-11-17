<x-layouts.main-layout title="Accueil">
    {{-- hero home --}}
        <div class="hero ">
            <div class="flex-col flex justify-center items-center text-center absolute z-50 left-auto h-full">
                    <img src="img/logo-rawan-removebg-preview.png" alt="Logo Rawan" width="200px">
                    <p class="font-bold text-white text-xl italic">
                        Votre boutique de <span class="text-secondary">prêt-à-porter</span> <br> et de <span class="text-primary">bijoux</span>
                    </p>
            </div>
            <div class="overlay"></div>
        </div>
        {{-- main content --}}
        <div class=" ">
            {{-- card bijoux --}}
            <div class="mt-28 mb-44 mx-36">
                <h1 class="text-center font-black text-2xl mb-5">Notre Sélection <span class="text-primary italic">bijoux</span></h1>
                <div class="flex justify-around space-x-5">
                    <div class="shadow-xl">
                        <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Boules d'oreilles</p>
                            <p class="text-primary font-semibold pb-3">Aciers inoxydables</p>
                            <button class="btn bg-primary py-3 px-16 rounded-xl shadow-lg text-center font-bold">Voir</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Bracelets</p>
                            <p class="text-primary font-semibold pb-3">Argents</p>
                            <button class="btn bg-primary py-3 px-16 rounded-xl shadow-lg text-center font-bold">Voir</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Colliers</p>
                            <p class="text-primary font-semibold pb-3">Bijoux personalisés</p>
                            <button class="btn bg-primary py-3 px-16 rounded-xl shadow-lg text-center font-bold">Voir</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                </div>
            </div>
            {{-- section about --}}
            <div class="about mt-5 mb-44">
                <div class="bg-white px-56 py-10 rounded-2xl text-center m-10">
                    <h1 class="pb-5 font-bold text-2xl underline">A propos</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim voluptatibus quia praesentium et quae! Exercitationem delectus voluptatem dignissimos aliquam, reprehenderit sed quisquam at sequi, distinctio architecto in asperiores voluptates soluta? Consequuntur quae saepe quas praesentium cum quos libero quod non aliquid nisi? Delectus eaque repudiandae corrupti soluta, pariatur eveniet nemo consequatur sint accusamus expedita hic ratione, reiciendis et quo molestias quis asperiores culpa fuga voluptatem magnam, reprehenderit molestiae ab? Quas rerum doloribus quia voluptates accusantium accusamus, ipsam eos in sapiente?</p>
                </div>
            </div>
            {{-- section vêtement --}}
            <div class="mx-36 mb-16">
                <h1 class="text-center font-black text-2xl mb-5">Nos <span class="text-secondary italic">vêtements</span></h1>
                <div class="flex justify-around space-x-5 mb-5">
                    <div class="shadow-xl">
                        <img src="img/abaya-femme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/abaya-femme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/abaya-femme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/abaya-femme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                </div>
                <div class="flex justify-around space-x-5 mb-5">
                    <div class="shadow-xl">
                        <img src="img/enfant.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/enfant.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/enfant.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/enfant.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                </div>
                <div class="flex justify-around space-x-5">
                    <div class="shadow-xl">
                        <img src="img/abaya-homme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/abaya-homme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/abaya-homme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                    <div class="shadow-xl">
                        <img src="img/abaya-homme.webp" alt="bijoux" class="w-full">
                        <div class="p-5 min-h-[200px]">
                            <p class="font-bold text-2xl pb-3">Lorem ipsum dolor</p>
                            <p class="pb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto, doloremque.</p>
                            <p class="font-semibold text-secondary">65,00€</p>
                            <button class="btn bg-secondary mt-3 py-3 px-16 rounded-xl shadow-lg text-center font-bold">Ajouter au panier</button>
                        </div>
                        {{-- <p class=" font-bold text-green-600 pl-44 pb-5"> Publié le 22 décembre 2022</p> --}}
                    </div>
                </div>
            </div>
        </div>
        
    {{-- <div class="mx-10">
        <div class="grid grid-cols-4 gap-5 " id="containerGrid">
            @forelse ($posts as $post)
                <a href="posts/{{ $post->id }}">
                    <x-cards.post-card :url_img="$post->url_img" :title="$post->title" :content="$post->content" :created_at="$post->created_at->format('d/m/Y')"/>
                </a>
            @empty
                <p>Pas d'articles disponibles</p>
            @endforelse
        </div>
        <div class="my-12 mx-auto flex justify-end">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div> --}}
</x-layouts.main-layout>

