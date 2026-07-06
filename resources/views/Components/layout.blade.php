<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Planning Cards</title>
        @vite('resources/css/app.css')
    </head>
    <body class="h-screen">
        
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
            <x-navlink href="/login" :isAuthLink="true" :active="request()->is('login')">Log In</x-navlink>
            <x-navlink href="/register" :isAuthLink="true" :active="request()->is('register')">Register</x-navlink>
        @endguest
        @auth
        <x-navlink href="/profile" :active="request()->is('profile')">Profile</x-navlink>
            <form method="POST" action="/logout">
                @csrf
                <x-button :style="'auth'">Log out</x-button>
            </form>
        @endauth
            </div>
    </nav>

    <main class="mx-3 mt-3 h-full">
        <header class="mb-3">{{ $header }}</header> 
        {{ $slot }}
    </main>
    </body>
</html>
