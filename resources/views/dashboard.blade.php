<x-layouts.layout-dashboard title="Dashboard">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <div class="bg-white border-b-4 border-primary-dark p-7 flex justify-between items-center">
                <p class="font-bold text-secondary-dark">Dashboard/
                    <span class="text-gray-500">Accueil</span>
                </p>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn m-1 bg-secondary-dark border-none">{{ Auth::user()->name }}</label>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                      <li ><a><x-btn-logout/></a></li>
                    </ul>
                </div>
            </div>
            <div class="py-10 px-10">
                <h1 class="text-2xl text-gray-800">
                    Bienvenue <span class="font-semibold">{{ Auth::user()->name }}</span> sur ton Dashbord
                </h1>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
