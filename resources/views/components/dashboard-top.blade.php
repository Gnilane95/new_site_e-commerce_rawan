<div class="bg-white border-b-4 border-secondary p-7 flex justify-between ">
    <p class="font-bold text-primary">Dashboard/Bijoux/<span class="text-gray-500">{{ $currentPage }}</span></p>
    <span class="font-semibold  text-primary hover:text-secondary shadow-lg p-2">{{ Auth::user()->name }}</span>
</div>
@include('partials._session')