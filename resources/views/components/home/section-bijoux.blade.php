<div class="lg:mt-56 lg:mb-44 sm:mt-28 lg:mx-36 sm:mx-7 text-gray-700">
    <h1 class="text-center font-black text-4xl mb-5">Nos <span class="text-primary ">bijoux</span></h1>
    <div class="md:flex md:justify-around md:space-x-7 sm:space-y-10">
        {{-- <a href="{{ route('bijoux-inox.all') }}" class="shadow-xl">
            <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="" class="w-full">
            <p class="font-bold text-2xl px-5 py-5">{{ $bijoux->category }}</p>
        </a> --}}
        <a href="{{ route('bijoux-inox.all') }}" class="md:shadow-xl sm:shadow-sm sm:mb-10d md:mb-0d">
            <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="" class="w-full">
            <p class="font-bold lg:text-2xl sm:text-xl px-5 py-5">Aciers inoxydables</p>
        </a>
        <a href="{{ route('bijoux-argents.all') }}" class="shadow-xl">
            <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
            <p class="font-bold lg:text-2xl sm:text-xl px-5 py-7">Argents</p>
        </a>
        <a href="{{ route('bijoux-perso.all') }}" class="shadow-xl">
            <img src="img/ruan-richard-rodrigues-p_OV-k846CQ-unsplash.jpg" alt="bijoux" class="w-full">
            <p class="font-bold lg:text-2xl sm:text-xl px-5 py-5">Bijoux personalisés</p>
        </a>
    </div>
</div>