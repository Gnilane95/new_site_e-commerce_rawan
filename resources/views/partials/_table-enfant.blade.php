@php
    $index = 1;
@endphp
<div class="bg-white shadow rounded-md overflow-hidden my-6">
  <table class="border-collapse table w-full">
    <!-- head -->
    <thead >
      <tr class="">
        <th class="bg-primary-dark text-white"></th>
        <th class="bg-primary-dark text-white">Nom</th>
        <th class="bg-primary-dark text-white">Prix</th>
        <th class="bg-primary-dark text-white">Stock</th>
        <th class="bg-primary-dark text-white">Date</th>
        <th class="bg-primary-dark text-white">Modifier</th>
        <th class="bg-primary-dark text-white">Suprimer</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($enfants as $enfant)
            <tr>
                <th>{{ $index++ }}</th>
                <td>{{ $enfant->name }}</td>
                <td>{{ $enfant->price }}€</td>
                <td>{{ $enfant->stock }}</td>
                <td>{{ $enfant->created_at->format('d/m/Y') }}</td>
                <td class="text-center text-secondary-dark">
                  <a href="{{ route('enfants.edit', $enfant->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
                <td class="text-center text-secondary-dark">
                  <x-btn-deleteEnfant :enfant="$enfant"/>
                </td>
            </tr>
        @empty
            <tr>
                <td>Pas de vêtements enfants disponibles</td>
            </tr>
        @endforelse
    </tbody>
  </table>
</div>