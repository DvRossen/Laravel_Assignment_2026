<x-layout>
    <x-slot:header>
        <h1 class="text-4xl font-bold">Create Card</h1>
    </x-slot:header>
    <div class="flex flex-col h-max items-center content-center">
    <x-field class="content-center" :style="'notice'">
        <p class=" font-bold underline"> You have not liked enough cards!</p>
        <p>You have to like <span class="font-bold">{{ $value=(4 - count($likes)) }}</span> more post(s) before you can start to create a cards!</p>
    </x-field>
    </div>
         
    
     
</x-layout>