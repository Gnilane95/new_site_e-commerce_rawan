<x-layouts.layout-dashboard title="Tous mes images">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Liste"/>
            <div class="py-10 mx-10">
                <div class="flex justify-between items-center">
                    <h1 class=" font-black text-4xl text-gray-700 ">Mes images</h1>
                    <a href="" class="btn  border-none">Ajouter</a>
                </div>
                <div class="mt-10">
                    @include('partials._table-images')
                </div>
            </div>
            {{-- <div class="">
                {{ $bijoux->links('pagination::tailwind') }}
            </div> --}}
        </div>
    </div>
</x-layouts.layout-dashboard>