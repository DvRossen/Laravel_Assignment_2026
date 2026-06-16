<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Planning Cards</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
        <x-navlink href="/login" :active="request()->is('login')">Log In</x-navlink>
        <x-navlink href="/mycards" :active="request()->is('mycards')">My Cards</x-navlink>
        {{ $header }}
        {{ $slot }}
    </body>
</html>
