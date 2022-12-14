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
        <th class="bg-primary text-white">Bijoux-ID</th>
        <th class="bg-primary text-white">Prix</th>
        <th class="bg-primary text-white">Stock</th>
        <th class="bg-primary text-white">Categories</th>
        <th class="bg-primary text-white">Date</th>
        <th class="bg-primary text-white">Modifier</th>
        <th class="bg-primary text-white">Suprimer</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($bijoux as $bijou)
            <tr>
                <th>{{ $index++ }}</th>
                <td>{{ $bijou->name }}</td>
                <td>{{ $bijou->id }}</td>
                <td>{{ $bijou->price }}€</td>
                <td>{{ $bijou->stock }}</td>
                <td>{{ $bijou->category }}</td>
                <td>{{ $bijou->created_at->format('d/m/Y') }}</td>
                <td class="text-center text-secondary-dark"><a href="{{ route('bijoux.edit', $bijou->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td class="text-center text-red-400">
                  <x-btn-deleteBijou :bijou="$bijou"/>
                </td>
            </tr>
        @empty
            <tr>
                <td>Pas de bijoux disponibles</td>
            </tr>
        @endforelse
    </tbody>
  </table>
</div>