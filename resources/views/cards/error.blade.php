<x-layout>
    <x-slot:header>
        <h1 class="text-4xl font-bold">Create Card</h1>
    </x-slot:header>
    <div class="flex flex-col h-max items-center content-center">
    <x-field class="content-center" :style="'notice'">
        <p class=" font-bold underline"> You have not logged in often enough!</p>
        <p>You have to log in <span class="font-bold">{{ $value=(4 - ($user['times_logged_in'])) }}</span> more time(s) before you can start to create a cards!</p>
    </x-field>
    </div>
         
    
     
</x-layout>