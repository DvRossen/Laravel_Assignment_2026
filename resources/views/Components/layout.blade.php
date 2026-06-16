<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Planning Cards</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav class="text-red-500">
        <a href="/">Home</a>
        <a href="/login">Log In</a>
        <a href="/mycards">My Cards</a>
        </nav>
        {{ $header }}
        {{ $slot }}
    </body>
</html>
