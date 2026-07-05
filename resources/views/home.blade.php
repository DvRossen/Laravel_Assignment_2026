
<x-layout>
<x-slot:header> <h1 class="text-4xl font-bold underline">Home</h1></x-slot:header>
@auth
<h2 class="text-2xl">Welcome Back, <span class="font-bold">{{ $user['username'] }}</span></h2>
@if($user['is_admin'] == true)
<p class="font-bold underline">You have admin privileges.</p>
<p>This means you are able to edit and delete any cards made by any user.</p>
@endif
@endauth

@guest
<h2 class="text-2xl">Welcome To Planning Cards!</h2> 
@endguest
</x-layout>