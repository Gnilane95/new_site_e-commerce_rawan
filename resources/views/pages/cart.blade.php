<x-layouts.main-layout title="Panier">
    @include('partials.navbar._navbar')

    <div class="overflow-x-auto mx-28 my-28 shadow-lg">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th>Produits</th>
              <th>Prix</th>
              <th>Quantité</th>
              <th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @forelse (Cart::content() as $bijou)
                <tr>
                <td>
                    <div class="flex items-center space-x-3">
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                            <img src="{{ asset('storage/'.$bijou->model->url_img) }}" alt="" />
                            </div>
                        </div>
                        <div class="">
                            <div class="font-bold">{{ $bijou->model->name }}</div>
                            <div class="text-sm opacity-50">Catégorie : {{ $bijou->model->category }}</div>
                        </div>
                    </div>
                </td>
                <td>
                    <p>{{ $bijou->model->price }}</p>
                </td>
                <td>
                    <select class="rounded-md" name="qty" id="qty">
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </td>
                <th>
                    <x-btn-deleteCart :bijou="$bijou"/>
                </th>
                </tr>
            @empty
                <p>Votre panier est vide</p>
            @endforelse
        </table>
    </div>
</x-layouts.main-layout>