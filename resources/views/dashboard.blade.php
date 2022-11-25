<x-layouts.layout-dashboard title="Dashboard">
    <div class="flex gap-10">
        <x-layouts.dashboardNav-left/>
        <div class="w-full">
            <x-dashboard-top currentPage="Liste"/>
            <div class="py-10">
                <h1 class="text-2xl text-gray-800">
                    Bienvenue <span class="font-semibold">{{ Auth::user()->name }}</span> sur ton Dashbord
                </h1>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
