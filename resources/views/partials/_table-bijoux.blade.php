@php
    $index = 1;
@endphp
<div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Date</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($bijoux as $bijou)
            <tr>
                <th>{{ $index++ }}</th>
                <td>{{ $bijou->name }}</td>
                <td>{{ $bijou->price }}€</td>
                <td>{{ $bijou->stock }}</td>
                <td>{{ $bijou->created_at->format('d/m/Y') }}</td>
            </tr>
        @empty
            <tr>
                <td>Pas de posts disponibles</td>
            </tr>
        @endforelse
    </tbody>
  </table>
</div>