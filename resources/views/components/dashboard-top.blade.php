<div class="bg-white border-b-4 border-primary-dark p-7 flex justify-between ">
    <p class="font-bold text-secondary-dark">Dashboard/Bijoux/<span class="text-gray-500">{{ $currentPage }}</span></p>
    <a href="" class="font-semibold  text-gray-500 hover:text-secondary-dark shadow-lg p-4 ">
        {{ Auth::user()->name }}
    </a>
</div>
@include('partials._session')