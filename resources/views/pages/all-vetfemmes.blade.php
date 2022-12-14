<x-layouts.layout-dashboard title="Liste vĂȘtements femmes">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="VĂȘtements femmes"/>
            <div class="py-10 mx-10">
                <div class="flex justify-between items-center">
                    <div class="">
                        <h1 class=" font-black text-4xl text-gray-700 ">Mes vĂȘtements femmes</h1>
                        <x-items-vetFemme/>
                    </div>
                    <a href="{{ route('femmes.create') }}" class="btn  border-none">Ajouter</a>
                </div>
                <div class="mt-10">
                    @include('partials._table-femmes')
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>