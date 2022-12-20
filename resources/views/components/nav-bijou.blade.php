<div class="sm:hidden md:bg-gray-700 md:p-5 md:flex md:justify-center md:space-x-5 md:font-bold md:text-gray-700">
    <a href="{{ route('bijoux-inox.all') }}" class="text-primary-light hover:text-white hover:underline">
        Aciers inoxydables
    </a>
    <a href="{{ route('bijoux-argents.all') }}" class="text-primary-light hover:text-white hover:underline">
        Argents
    </a>
    <a href="{{ route('bijoux-perso.all') }}" class="text-primary-light hover:text-white hover:underline">
        Bijoux personalisés
    </a>
</div>
<div class="md:hidden bg-gray-700">
    <div class="dropdown p-5">
        <div class="flex items-center space-x-2 text-primary-light text-xl">
            <label tabindex="0" class="text-primary-light text-xl font-bold">
                <span>Catégories</span>
                <i class="fa-solid fa-angle-down"></i>
            </label>
        </div>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-200 rounded-box w-[40vh]">
          <li>
            <a href="{{ route('bijoux-inox.all') }}" class="hover:underline font-bold">
                Aciers inoxydables
            </a>
            <a href="{{ route('bijoux-argents.all') }}" class="hover:underline font-bold">
                Argents
            </a>
            <a href="{{ route('bijoux-perso.all') }}" class="hover:underline font-bold">
                Bijoux personalisés
            </a>
          </li>
        </ul>
    </div>
</div>