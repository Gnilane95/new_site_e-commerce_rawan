<div class="bg-white border-b-4 border-primary-dark p-7 flex justify-between items-center">
    <p class="font-bold text-secondary-dark">Dashboard/
        <span class="text-gray-500">{{ $currentPage }}</span>
    </p>
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn m-1 bg-secondary-dark border-none">{{ Auth::user()->name }}</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
          {{-- <li ><a href="{{ route('users.show',$userId) }}">Mon profil</a></li> --}}
          <li ><a><x-btn-logout/></a></li>
        </ul>
    </div>
</div>
@include('partials._session')