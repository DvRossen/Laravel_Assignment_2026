<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Planning Cards</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <nav class="flex gap-1">
        <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
        <x-navlink href="/cards" :active="request()->is('cards')">Cards List</x-navlink>
        @guest
        <x-navlink href="/login" :active="request()->is('login')">Log In</x-navlink>
        <x-navlink href="/register" :active="request()->is('register')">Register</x-navlink>
        @endguest
        @auth
        <x-navlink href="/cards/create" :active="request()->is('cards/create')">Create Card</x-navlink>
        <form method="POST" action="/logout">
            @csrf
            <button
            type="submit" class="hover:cursor-pointer hover:text-red-700 text-red-500">Log out</button>
        </form>
        @endauth
        
    </nav>  
    
        <header>{{ $header }}</header> 
        <main class="m-[1rem]">{{ $slot }}</main>
    </body>
</html>
