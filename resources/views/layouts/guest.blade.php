@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- link font awesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- link google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">


    <title>Rawan | {{ $title }}</title>
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-secondary">
    <div class="bg-white shadow-lg">
        @include('partials.navbar._navbar')
    </div>
    @include('partials._session')
    {{ $slot }}
    @vite('resources/js/app.js')
    @vite('resources/js/scroll.js')
    <div class="bg-white">
        @include('partials.footer._footer')
    </div>
</body>
</html>