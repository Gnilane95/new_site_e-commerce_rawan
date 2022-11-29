<x-layouts.layout-dashboard title="Liste abayas homme">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Abayas homme"/>
            <div class="py-10 mx-10">
                <div class="flex justify-between items-center">
                    <h1 class=" font-black text-4xl text-gray-700 ">Mes abayas homme</h1>
                    <a href="{{ route('hommes.create') }}" class="btn  border-none">Ajouter</a>
                </div>
                <div class="mt-10">
                    @include('partials._table-homme')
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>