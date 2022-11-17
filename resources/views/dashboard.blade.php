@php
    $styleLink="font-bold hover:text-white block pb-5 text-gray-700 text-lg"
@endphp
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


    <title>Rawan | Dashboard</title>
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
</head>
<body class="">
    @include('partials._session')
    @vite('resources/js/app.js')
    @vite('resources/js/scroll.js')
    <div class="flex gap-10">
        <div class="bg-gradient-to-b from-primary to-secondary min-h-screen max-w-xl px-10 py-6">
            <div class="flex items-center space-x-3">
                <img src="img/logo-rawan-removebg-preview.png" alt="" class="w-14">
                <p class="text-3xl font-black text-gray-700">Dashboard</p>
            </div>
            <hr class="my-10 w-full">
            <div class="">
                <a href="" class="{{ $styleLink }}">Liste des bijoux</a>
            </div>
        </div>
        <div class="py-10 ">
            <p class="text-2xl text-gray-800">
                Bienvenue <span class="font-semibold">{{ Auth::user()->name }}</span> sur ton Dashbord
            </p>
        </div>
    </div>
</body>
</html>
</div>

