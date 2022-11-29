<x-layouts.layout-dashboard title="Mes vêtements femmes">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Vêtements femmes"/>
            <div class="py-10 mx-10">
                <div class="flex justify-between items-center">
                    <div class="">
                        <h1 class=" font-black text-4xl text-gray-700 ">Mes vêtements femmes</h1>
                        <div class=" text-white mt-3">
                            <a href="" class="bg-gray-700 btn-sm py-1 px-3 rounded-md">Robes/Jupes</a>
                            <a href="" class="bg-gray-700 btn-sm py-1 px-3 rounded-md">Pull/hauts</a>
                            <a href="" class="bg-gray-700 btn-sm py-1 px-3 rounded-md">Ensembles/combinaisons</a>
                            <a href="" class="bg-gray-700 btn-sm py-1 px-3 rounded-md">Pantalons/Jeans</a>
                            <a href="" class="bg-gray-700 btn-sm py-1 px-3 rounded-md">Vestes/Manteaux</a>
                            <a href="" class="bg-gray-700 btn-sm py-1 px-3 rounded-md">Abayas</a>
                        </div>
                    </div>
                    <a href="{{ route('femmes.create') }}" class="btn  border-none">Ajouter</a>
                </div>
                <div class="mt-10">
                    @include('partials._table-femmes')
                </div>
            </div>
            {{-- <div class="">
                {{ $bijoux->links('pagination::tailwind') }}
            </div> --}}
        </div>
    </div>
</x-layouts.layout-dashboard>