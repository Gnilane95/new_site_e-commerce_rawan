@props([
    'url_img',
    'author',
    'date',
    'title',
    'content',
])
<div class=" max-w-lg h-[500px] mb-28">
  <img src="{{ asset('storage/'.$url_img) }}" alt="{{ $title }}" class="w-full shadow-md h-64 rounded-lg"/>
  <div class="pt-5">
    <p>
      <span>Par {{ $author }} | </span>
      <span>{{ $date }}</span>
    </p>
    <h2 class="text-2xl font-bold text-gray-700 pt-4 pb-1">{{ $title }}</h2>
    <p class="mb-5">{{ $content }}</p>
    <a href="" class="py-3 px-5 w-full text-xl rounded-lg bg-primary-dark border-none text-white">
      Lire la suite
    </a>
  </div>
</div>