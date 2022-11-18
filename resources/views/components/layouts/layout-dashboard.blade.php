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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">


    <title>Rawan | {{ $title }}</title>
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials._session')
    {{ $slot }}
    @vite('resources/js/app.js')
    @vite('resources/js/scroll.js')
</body>
</html>