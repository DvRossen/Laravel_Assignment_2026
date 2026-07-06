<x-layout>
<x-slot:header> <h1 class="text-4xl font-bold ">Home</h1></x-slot:header>

<div class="flex flex-col h-max items-center content-center">

@auth
<h2 class="text-2xl w-fit h-min">Welcome Back, <span class="font-bold">{{ $user['username'] }}</span></h2>

@if($user['is_admin'] == true)
<x-field :style="'notice'">
    <p class="font-bold underline">You have admin privileges.</p>
    <p>This means you are able to edit and delete any cards made by any user.</p>
</x-field>
@endif

@endauth

@guest
<h2 class="text-2xl">Welcome To Planning Cards!</h2> 
@endguest

</div>
</x-layout>

