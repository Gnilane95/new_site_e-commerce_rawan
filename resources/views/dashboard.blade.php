<x-layouts.layout-dashboard title="Dashboard">
    <div class="flex gap-10">
        <x-layouts.dashboardNav-left/>
        <div class="py-10 ">
            <p class="text-2xl text-gray-800">
                Bienvenue <span class="font-semibold">{{ Auth::user()->name }}</span> sur ton Dashbord
            </p>
        </div>
    </div>
</x-layouts.layout-dashboard>
