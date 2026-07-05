
<x-layout>
<x-slot:header> <h1 class="text-4xl font-bold underline">Home</h1></x-slot:header>
@auth
<h2 class="text-2xl">Welcome Back,</h2>
@endauth
@guest
<h2 class="text-2xl">Welcome To Planning Cards!</h2> 
@endguest
</x-layout>