<x-layouts.layout-dashboard title="Tous mes bijoux">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Liste"/>
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