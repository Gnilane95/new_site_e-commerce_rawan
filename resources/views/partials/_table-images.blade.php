@php
    $index = 1;
@endphp
<div class="bg-white shadow rounded-md overflow-hidden my-6">
  <table class="border-collapse table w-full">
    <!-- head -->
    <thead >
      <tr class="">
        <th class="bg-primary text-white"></th>
        <th class="bg-primary text-white">URL</th>
        <th class="bg-primary text-white">Bijoux-id</th>
        <th class="bg-primary text-white">Date</th>
        <th class="bg-primary text-white">Modifier</th>
        <th class="bg-primary text-white">Suprimer</th>

      </tr>
    </thead>
    <tbody>
        @forelse ($images as $image)
            <tr>
                <th>{{ $index++ }}</th>
                <td>{{ $image->slug }}</td>
                <td>{{ $image->bijou_id }}</td>
                <td>{{ $image->created_at->format('d/m/Y') }}</td>
                <td class="text-center text-secondary-dark">
                  <a href="{{ route('images.edit', $image->id)}}"><i class="fa-solid fa-pen-to-square"></i><a>
                </td>
                <td class="text-center text-red-400">
                  <x-btn-deleteImage :image="$image"/>
                </td>
            </tr>
        @empty
            <tr>
                <td>Images indisponibles</td>
            </tr>
        @endforelse
    </tbody>
  </table>
</div>