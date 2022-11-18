<x-layouts.layout-dashboard title="Tous mes bijoux">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <div class="bg-white border-b-4 border-secondary p-7 flex justify-between ">
                <p class="font-bold text-primary">Dashboard/Bijoux/<span class="text-gray-500">Liste</span></p>
                <span class="font-semibold  text-primary hover:text-secondary">{{ Auth::user()->name }}</span>
            </div>
            @include('partials._session')
            <div class="py-10 mx-10">
                <div class="flex justify-between items-center">
                    <h1 class=" font-black text-4xl text-gray-700 ">Mes Bijoux</h1>
                    <a href="{{ route('bijoux.create') }}" class="btn bg-secondary border-none">Ajouter</a>
                </div>
                <div class="mt-10">
                    @include('partials._table-bijoux')
                </div>
            </div>
            {{-- <div class="mx-56 mt-28 flex justify-end">
                {{ $bijoux->links('pagination::tailwind') }}
            </div> --}}
        </div>
    </div>
</x-layouts.layout-dashboard>