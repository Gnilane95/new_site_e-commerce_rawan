<x-layouts.layout-dashboard title="Liste Ensembles et Combinaisons">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Ensembles/Combinaisons"/>
            <div class="py-10 mx-10">
                <div class="">
                    <h1 class=" font-black text-4xl text-gray-700 ">Ensembles et Combinaisons</h1>
                    <x-items-vetFemme/>
                </div>
                <div class="mt-10">
                    @include('partials._table-femmes')
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>