<x-layouts.layout-dashboard title="Ajouter des images">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Ajouter des images"/>
            <div class="py-10 mx-10">
                <h1 class="font-black text-4xl text-gray-700 pb-5">Ajouter des images</h1>
                <form action="{{ route('bijoux.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-[50%]">
                        <div class="">
                            <label for="url_img">Others images :</label>
                            <input class="block w-full rounded-lg border-gray-400 mt-5" type="file" name="images[]" id="" multiple>
                            <x-error-msg name="url_img" />
                        </div>

                        <button type="submit" class="btn bg-secondary border-none mt-6 w-full">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
