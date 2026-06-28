<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Planning Cards</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <nav>
        <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
        <x-navlink href="/login" :active="request()->is('login')">Log In</x-navlink>
        <x-navlink href="/cards_list" :active="request()->is('cards_list')">Cards List</x-navlink>
        <x-navlink href="/card/create" :active="request()->is('card/create')">Create Card</x-navlink>
    </nav>
        <header>{{ $header }}</header> 
        <main class="m-[1rem]">{{ $slot }}</main>
    </body>
</html>
