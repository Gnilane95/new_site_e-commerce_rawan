@php
    $index = 1;
@endphp
<div class="bg-white shadow rounded-md overflow-hidden my-6">
  <table class="border-collapse table w-full">
    <!-- head -->
    <thead >
      <tr class="">
        <th class="bg-primary text-white"></th>
        <th class="bg-primary text-white">Nom</th>
        <th class="bg-primary text-white">Prix</th>
        <th class="bg-primary text-white">Stock</th>
        <th class="bg-primary text-white">Categories</th>
        <th class="bg-primary text-white">Date</th>
        <th class="bg-primary text-white">Modifier</th>
        <th class="bg-primary text-white">Suprimer</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($femmes as $femme)
            <tr>
                <th>{{ $index++ }}</th>
                <td>{{ $femme->name }}</td>
                <td>{{ $femme->price }}€</td>
                <td>{{ $femme->stock }}</td>
                <td>{{ $femme->category }}</td>
                <td>{{ $femme->created_at->format('d/m/Y') }}</td>
                <td class="text-center text-secondary-dark"><a href="{{ route('femmes.edit', $femme->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td class="text-center text-red-400">
                  <x-btn-deletefemme :femme="$femme"/>
                </td>
            </tr>
        @empty
            <tr>
                <td>Pas de posts disponibles</td>
            </tr>
        @endforelse
    </tbody>
  </table>
</div>