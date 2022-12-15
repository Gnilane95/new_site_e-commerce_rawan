<x-layouts.layout-dashboard title="Liste mes bijoux">
    <div class="lg:flex sm:gridg sm:grid-cols-2g">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Tous mes bijoux"/>
            <div class="py-10 mx-10">
                <div class="flex justify-between items-center">
                    <div class="">
                        <h1 class=" font-black text-4xl text-gray-700 ">Mes Bijoux</h1>
                        <x-items-bijoux/>
                    </div>
                    <a href="{{ route('bijoux.create') }}" class="btn  border-none">Ajouter</a>
                </div>
                <div class="mt-10">
                    @include('partials._table-bijoux')
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>