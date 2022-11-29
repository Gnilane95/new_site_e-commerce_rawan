<x-layouts.layout-dashboard title="Liste Aciers Inoxydables">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Aciers inoxydables"/>
            <div class="py-10 mx-10">
                <div class="">
                    <h1 class=" font-black text-4xl text-gray-700 ">Aciers Inoxydables</h1>
                    <x-items-bijoux/>
                </div>
                <div class="mt-10">
                    @include('partials._table-bijoux')
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>