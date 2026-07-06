<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Planning Cards</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        
    <nav class="grid grid-cols-2 p-3 bg-linear-to-r from-gray-900 to-gray-700">
        <div class="flex gap-3">
        <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
        <x-navlink href="/cards" :active="request()->is('cards')">Cards List</x-navlink>
        @auth
            <x-navlink href="/cards/create" :active="request()->is('cards/create')">Create Card</x-navlink>
        @endauth
        </div>
        <div class="flex gap-3 justify-end">
        @guest
            <x-navlink href="/login" :active="request()->is('login')">Log In</x-navlink>
            <x-navlink href="/register" :active="request()->is('register')">Register</x-navlink>
        @endguest
        @auth
            <form method="POST" action="/logout">
                @csrf
                <button
                type="submit" class=" px-3 py-2 text-l text-white rounded hover:cursor-pointer active:bg-blue-600 bg-blue-500 hover:bg-blue-400">Log out</button>
            </form>
        @endauth
            </div>
    </nav>

    <main class="mx-3 mt-3">
        <header class="mb-3">{{ $header }}</header> 
        {{ $slot }}
    </main>
    </body>
</html>
