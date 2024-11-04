<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div class="flex justify-around">
        <div><a href="{{route('accueil.index')}}">Accueil</a></div>
        <div><a href="{{route('cours.index')}}">Cours</a></div>
        <div><a href="{{route('contact.index')}}">Contact</a></div>
        <div><a href="{{route('tarifs.index')}}">Tarifs</a></div>
        <div><a href="{{route('mentions-legales.index')}}">Mentions-Légales</a></div>
    </div>
     @yield('content') {{-- instruction pour une vue enfant --}}
</body>
</html>