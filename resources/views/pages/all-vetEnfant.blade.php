<x-layouts.layout-dashboard title="Liste vêtements enfant">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Vêtements enfant"/>
            <div class="py-10 mx-10">
                <div class="flex justify-between items-center">
                    <h1 class=" font-black text-4xl text-gray-700 ">Mes vêtements enfant</h1>
                    <a href="{{ route('enfants.create') }}" class="btn  border-none">Ajouter</a>
                </div>
                <div class="mt-10">
                    @include('partials._table-enfant')
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>