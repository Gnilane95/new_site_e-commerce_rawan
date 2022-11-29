<x-layouts.layout-dashboard title="Liste Abayas femme">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Abayas femme"/>
            <div class="py-10 mx-10">
                <div class="">
                    <h1 class=" font-black text-4xl text-gray-700 ">Abayas</h1>
                    <x-items-vetFemme/>
                </div>
                <div class="mt-10">
                    @include('partials._table-femmes')
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>