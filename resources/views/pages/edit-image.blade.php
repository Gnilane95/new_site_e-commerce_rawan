<x-layouts.layout-dashboard title="Modifier un bijou">
    <div class="flex">
        <x-layouts.dashboardNav-left/>
        <div class="w-full bg-gray-100">
            <x-dashboard-top currentPage="Edit"/>
            <div class="py-10 mx-10">
                <h1 class="font-black text-4xl text-gray-700 pb-5">Modifier un bijou</h1>
                <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="w-[50%] form-control">
                        <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="slug" />

                        <button type="submit" class="btn bg-secondary-dark border-none mt-6 w-full">
                            Modifier
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout-dashboard>
