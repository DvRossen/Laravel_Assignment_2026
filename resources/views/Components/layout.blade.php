<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
    </head>
    <body>
        <nav>
        <a href="/">Home</a>
        <a href="/login">Log In</a>
        <a href="/mycards">My Cards</a>
        </nav>
        {{ $header }}
        {{ $slot }}
    </body>
</html>
