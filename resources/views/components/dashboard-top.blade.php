<div class="bg-white border-b-4 border-primary-dark p-7 flex justify-between ">
    <p class="font-bold text-secondary-dark">Dashboard/Bijoux/<span class="text-gray-500">{{ $currentPage }}</span></p>
    {{-- <a href="" class="font-semibold  text-gray-500 hover:text-secondary-dark shadow-lg p-4 ">
        {{ Auth::user()->name }}
    </a> --}}
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn m-1 bg-secondary-dark border-none">{{ Auth::user()->name }}</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
          {{-- <li ><a href="{{ route('users.show',$userId) }}">Mon profil</a></li> --}}
          <li ><a><x-btn-logout/></a></li>
        </ul>
    </div>
</div>
@include('partials._session')