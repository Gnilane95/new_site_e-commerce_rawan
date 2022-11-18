<x-layouts.layout-dashboard title="Tous mes bijoux">
    <div class="flex gap-10">
        <x-layouts.dashboardNav-left/>
        <div class="py-10 ">
            <h1 class="text-center font-black text-4xl text-red-600 underline">Tous mes articles</h1>
            <div class="mt-10">
                @include('partials._table-bijoux')
            </div>
            <div class="mx-56 mt-28 flex justify-end">
                {{ $bijoux->links('pagination::tailwind') }}
            </div>
        </div>

    </div>
</x-layouts.layout-dashboard>